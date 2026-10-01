<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @viteRefresh()
    <link rel="stylesheet" href="{{ vite('source/_assets/sass/main.scss') }}">
    <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    @php
        $canonical = $page->seoOrigin . $page->languagePaths[$page->language ?? 'en'];
        $socialImage = $page->seoOrigin . $page->socialImage;
        $locale = ['en' => 'en_US', 'cs' => 'cs_CZ', 'vi' => 'vi_VN'];
        $personId = $page->seoOrigin . '/#person';
        $structuredData = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Person',
                    '@id' => $personId,
                    'name' => 'Hai Long Do',
                    'alternateName' => ['Long Do', 'Leo'],
                    'url' => $page->seoOrigin . '/',
                    'image' => $socialImage,
                    'sameAs' => $page->socialProfiles->all(),
                ],
                [
                    '@type' => 'WebPage',
                    '@id' => $canonical . '#webpage',
                    'url' => $canonical,
                    'name' => $page->title,
                    'description' => $page->description,
                    'inLanguage' => $page->language ?? 'en',
                    'mainEntity' => ['@id' => $personId],
                ],
            ],
        ];
    @endphp
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">
    <link rel="canonical" href="{{ $canonical }}">
    @foreach($page->languagePaths as $language => $path)
    <link rel="alternate" hreflang="{{ $language }}" href="{{ $page->seoOrigin . $path }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ $page->seoOrigin }}/">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Hai Long Do">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:locale" content="{{ $locale[$page->language ?? 'en'] }}">
    <meta property="og:image" content="{{ $socialImage }}">
    <meta property="og:image:width" content="{{ $page->imageDimensions[$page->socialImage]['width'] }}">
    <meta property="og:image:height" content="{{ $page->imageDimensions[$page->socialImage]['height'] }}">
    <meta property="og:image:alt" content="{{ $page->profileAlt }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $page->title }}">
    <meta name="twitter:description" content="{{ $page->description }}">
    <meta name="twitter:image" content="{{ $socialImage }}">
    <meta name="twitter:image:alt" content="{{ $page->profileAlt }}">
    <script type="application/ld+json">{!! json_encode($structuredData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>

    <link rel="icon" type="image/svg+xml" href="/assets/images/favicons/favicon.svg">
    <link rel="apple-touch-icon" href="/assets/images/favicons/favicon.svg">
    <meta name="theme-color" content="#2563eb">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111744978-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-111744978-1');
    </script>
</head>

<body class="antialiased text-gray-800 bg-gray-50 font-sans leading-normal">
    @yield('body')
</body>

</html>