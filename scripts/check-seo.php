<?php

// Inspect the shipped HTML, rather than just the source templates.
$root = dirname(__DIR__);
$config = require $root . '/config.php';
$origin = 'https://' . trim(file_get_contents($root . '/source/CNAME'));
$build = $root . '/build_production';
$errors = [];
$assert = function ($condition, $message) use (&$errors) {
    if (!$condition) {
        $errors[] = $message;
    }
};
$assert($config['seoOrigin'] === $origin, 'SEO origin must match the HTTPS custom domain.');
$titles = $descriptions = [];
libxml_use_internal_errors(true);
foreach ($config['languagePaths'] as $language => $path) {
    $file = $build . $path . 'index.html';
    if (!is_file($file)) {
        $errors[] = "Missing generated page: $path";
        continue;
    }
    $dom = new DOMDocument();
    $dom->loadHTML(file_get_contents($file));
    $xpath = new DOMXPath($dom);
    $one = function ($query) use ($xpath, $assert, $path) {
        $nodes = $xpath->query($query);
        $assert($nodes->length === 1, "$path: expected one $query");
        return $nodes->length ? trim($nodes->item(0)->nodeValue) : '';
    };
    $canonical = $origin . $path;
    $assert($one('/html/@lang') === $language, "$path: incorrect language");
    $title = $one('//head/title');
    $description = $one('//head/meta[@name="description"]/@content');
    $assert(str_contains($title, 'Hai Long Do'), "$path: title must identify Hai Long Do");
    $assert(strlen($description) > 40, "$path: missing meaningful description");
    $titles[] = $title;
    $descriptions[] = $description;
    $assert($one('//head/link[@rel="canonical"]/@href') === $canonical, "$path: incorrect canonical");
    foreach ($config['languagePaths'] as $alternate => $alternatePath) {
        $assert($one('//head/link[@rel="alternate"][@hreflang="' . $alternate . '"]/@href') === $origin . $alternatePath, "$path: incorrect $alternate alternate");
    }
    $assert($one('//head/link[@hreflang="x-default"]/@href') === $origin . '/', "$path: incorrect default alternate");
    $image = $origin . $config['socialImage'];
    foreach (['og:title' => $title, 'og:description' => $description, 'og:url' => $canonical, 'og:image' => $image, 'og:type' => 'website'] as $key => $value) {
        $assert($one('//head/meta[@property="' . $key . '"]/@content') === $value, "$path: incorrect $key");
    }
    foreach (['twitter:title' => $title, 'twitter:description' => $description, 'twitter:image' => $image, 'twitter:card' => 'summary'] as $key => $value) {
        $assert($one('//head/meta[@name="' . $key . '"]/@content') === $value, "$path: incorrect $key");
    }
    $json = $one('//head/script[@type="application/ld+json"]');
    try {
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        $graph = $data['@graph'] ?? [];
        $person = $graph[0] ?? [];
        $page = $graph[1] ?? [];
        $assert(($person['@type'] ?? '') === 'Person' && ($person['name'] ?? '') === 'Hai Long Do', "$path: missing person identity");
        $assert(($person['sameAs'] ?? []) === $config['socialProfiles'], "$path: incorrect social profiles");
        $assert(($page['url'] ?? '') === $canonical && ($page['inLanguage'] ?? '') === $language, "$path: incorrect structured webpage");
        $assert(($page['mainEntity']['@id'] ?? '') === ($person['@id'] ?? null), "$path: missing person reference");
    } catch (JsonException $e) {
        $errors[] = "$path: invalid JSON-LD";
    }
    $assert($one('//h1') === 'Hai Long Do', "$path: incorrect main heading");
    $assert($one('//h2[@id="projects-heading"]') !== '', "$path: missing projects heading");
    foreach ($xpath->query('//img') as $img) {
        $src = $img->getAttribute('src');
        $assert($img->getAttribute('alt') !== '' && $img->getAttribute('alt') !== 'Profile', "$path: missing descriptive image alternative");
        $imageFile = $build . $src;
        $assert(is_file($imageFile), "$path: missing image $src");
        if (is_file($imageFile)) {
            [$width, $height] = getimagesize($imageFile);
            $assert((int) $img->getAttribute('width') === $width && (int) $img->getAttribute('height') === $height, "$path: incorrect dimensions for $src");
        }
        $expectedLoading = $src === $config['socialImage'] ? 'eager' : 'lazy';
        $assert($img->getAttribute('loading') === $expectedLoading, "$path: incorrect loading for $src");
    }
    foreach ($xpath->query('//link[@rel="stylesheet"]/@href | //script[@type="module"]/@src') as $asset) {
        $assetPath = parse_url($asset->nodeValue, PHP_URL_PATH);
        $assert(is_file($build . '/' . ltrim($assetPath, '/')), "$path: missing built asset $assetPath");
    }
}
$assert(count(array_unique($titles)) === 3, 'Page titles must be unique.');
$assert(count(array_unique($descriptions)) === 3, 'Page descriptions must be unique.');
$sitemap = new DOMDocument();
if (is_file($build . '/sitemap.xml') && $sitemap->load($build . '/sitemap.xml')) {
    $xpath = new DOMXPath($sitemap);
    $xpath->registerNamespace('s', 'http://www.sitemaps.org/schemas/sitemap/0.9');
    $urls = [];
    foreach ($xpath->query('/s:urlset/s:url/s:loc') as $loc) {
        $urls[] = trim($loc->textContent);
    }
    $assert($urls === array_map(fn ($path) => $origin . $path, array_values($config['languagePaths'])), 'Sitemap must contain exactly the three canonical URLs.');
} else {
    $errors[] = 'Missing or invalid sitemap.xml';
}
$robots = is_file($build . '/robots.txt') ? file_get_contents($build . '/robots.txt') : '';
$assert(str_contains($robots, "User-agent: *\nAllow: /"), 'robots.txt must allow crawling.');
$assert(!preg_match('/^Disallow:\s*\//m', $robots), 'robots.txt must not block pages or assets.');
$assert(str_contains($robots, 'Sitemap: ' . $origin . '/sitemap.xml'), 'robots.txt must reference the production sitemap.');
if ($errors) {
    fwrite(STDERR, implode("\n", $errors) . "\n");
    exit(1);
}
echo "SEO checks passed: 3 localized pages, metadata, structured data, images, assets, sitemap and robots.\n";
