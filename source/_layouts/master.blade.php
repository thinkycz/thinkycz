<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @viteRefresh()
    <link rel="stylesheet" href="{{ vite('source/_assets/sass/main.scss') }}">
    <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    <title>@yield('title', 'Long Do - Portfolio')</title>

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