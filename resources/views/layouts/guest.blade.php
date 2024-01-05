<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Primary Meta Tags -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Pixel Bootstrap 5 - Sign in">
    <meta name="author" content="Themesberg">
    <meta name="description" content="Open source and free Bootstrap 5 UI Kit featuring 80 UI components, 5 example pages, and a Gulp and Sass workflow.">
    <link rel="canonical" href="https://themesberg.com/product/ui-kit/pixel-free-bootstrap-5-ui-kit">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/pixel-bootstrap-5-ui-kit">
    <meta property="og:title" content="Pixel Bootstrap 5 - Sign in">
    <meta property="og:description" content="Open source and free Bootstrap 5 UI Kit featuring 80 UI components, 5 example pages, and a Gulp and Sass workflow.">
    <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/pixel-lite/pixel-lite-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/pixel-bootstrap-5-ui-kit">
    <meta property="twitter:title" content="Pixel Bootstrap 5 - Sign in">
    <meta property="twitter:description" content="Open source and free Bootstrap 5 UI Kit featuring 80 UI components, 5 example pages, and a Gulp and Sass workflow.">
    <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/pixel-lite/pixel-lite-preview.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Pixel CSS -->
    <link type="text/css" href="/assets/css/pixel.css" rel="stylesheet">

</head>

<body>
<main>

<x-preloader/>

    <!-- Section -->

    <section class="min-vh-100 d-flex align-items-center section-image overlay-soft-dark" data-background="../../assets/img/pages/form-image.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Core -->
<script src="/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="/vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="/vendor/vivus/dist/vivus.min.js"></script>
<script src="/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Pixel JS -->
<script src="/assets/js/pixel.js"></script>

</body>

</html>
