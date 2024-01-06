<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - {{ $title ?? "Journal on the go!"}}</title>


    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="title" content="Pixel Pro - Messages" />
    <meta name="author" content="Themesberg" />
    <meta name="description"
        content="Premium Bootstrap 5 UI Kit featuring over 1000 components and 35 example pages created by Themesberg." />
    <meta name="keywords"
        content="bootstrap, bootstrap ui kit, premium Bootstrap 5 UI Kit, bootstrap dashboard, bootstrap messaging, bootstrap billing, bootstrap item list, bootstrap charts, bootstrap timelines, bootstrap cards, bootstrap pricing cards, bootstrap profile cards, bootstrap 5, gulp, npm, sass, javascript, jquery, themesberg, Bootstrap 5 UI Kit theme, Bootstrap 5 UI Kit, premium bootstrap ui kit, bootstrap design system, themesberg ui kit, pixel ui kit, pixel pro ui kit" />
    <link rel="canonical" href="https://themesberg.com/product/ui-kit/pixel-pro-premium-bootstrap-5-ui-kit" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://demo.themesberg.com/pixel-pro" />
    <meta property="og:title" content="Pixel Pro - Messages" />
    <meta property="og:description"
        content="Premium Bootstrap 5 UI Kit featuring over 1000 components and 35 example pages created by Themesberg." />
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/pixel-pro/pixel-pro-preview.jpg" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://demo.themesberg.com/pixel-pro" />
    <meta property="twitter:title" content="Pixel Pro - Messages" />
    <meta property="twitter:description"
        content="Premium Bootstrap 5 UI Kit featuring over 1000 components and 35 example pages created by Themesberg." />
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/pixel-pro/pixel-pro-preview.jpg" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/assets/img/favicon/site.webmanifest" />
    <link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <link type="text/css" href="/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/vendor/@glidejs/glide/dist/css/glide.core.min.css" />
    <link rel="stylesheet" href="/vendor/@glidejs/glide/dist/css/glide.theme.min.css" />
    <link type="text/css" href="/assets/css/pixel.css" rel="stylesheet" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>

</head>

<body>

    <header class="header-global">

    </header>
    <main>
        <div class="preloader bg-dark flex-column justify-content-center align-items-center">
            <svg id="loader-logo" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                viewBox="0 0 64 78.4">
                <path fill="#fff" d="M10,0h1.2V11.2H0V10A10,10,0,0,1,10,0Z" />
                <rect fill="none" stroke="#fff" stroke-width="11.2" x="40" y="17.6" width="0" height="25.6" />
                <rect fill="none" stroke="#fff" stroke-opacity="0.4" stroke-width="11.2" x="23" y="35.2"
                    width="0" height="25.6" />
                <path fill="#fff" d="M52.8,35.2H64V53.8a7,7,0,0,1-7,7H52.8V35.2Z" />
                <rect fill="none" stroke="#fff" stroke-width="11.2" x="6" y="52.8" width="0" height="25.6" />
                <path fill="#fff" d="M52.8,0H57a7,7,0,0,1,7,7h0v4.2H52.8V0Z" />
                <rect fill="none" stroke="#fff" stroke-opacity="0.4" stroke-width="11.2" x="57.8" y="17.6"
                    width="0" height="11.2" />
                <rect fill="none" stroke="#fff" stroke-width="11.2" x="6" y="35.2" width="0"
                    height="11.2" />
                <rect fill="none" stroke="#fff" stroke-width="11.2" x="40.2" y="49.6" width="0"
                    height="11.2" />
                <path fill="#fff" d="M17.6,67.2H28.8v1.2a10,10,0,0,1-10,10H17.6V67.2Z" />
                <rect fill="none" stroke="#fff" stroke-opacity="0.4" stroke-width="28.8" x="31.6"
                    width="0" height="11.2" />
                <rect fill="none" stroke="#fff" x="14" stroke-width="28.8" y="17.6" width="0"
                    height="11.2" />
            </svg>
        </div>
        <div class="section section-lg pt-md-7 bg-gray-200">

            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-12 col-sm-8">
                        <div class="alert alert-success alert-dismissible fade show" role="alert"><span
                                class="fas fa-bullhorn me-1"></span> Story created successfully<button type="button"
                                class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    </div>
                </div>
                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>
        </div>
    </main>
    <footer class="footer bg-dark pb-5 pt-6 text-white">
        <div class="container">

            <hr class="bg-secondary my-lg-5 my-3" />
            <div class="row">
                <div class="col mb-md-0">
                    <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center mb-3"><img
                            src="/assets/img/themesberg.svg" height="30" class="me-2" alt="Themesberg Logo" />
                        <p class="fw-bold footer-logo-text m-0 text-white">
                            Themesberg
                        </p>
                    </a>
                    <div class="d-flex justify-content-center align-items-center text-center" role="contentinfo">
                        <p class="fw-normal font-small mb-0">
                            Copyright © Themesberg 2019-<span class="current-year">2021</span>. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/vendor/headroom.js/dist/headroom.min.js"></script>
    <script src="/vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="/vendor/vivus/dist/vivus.min.js"></script>
    <script src="/vendor/chartist/dist/chartist.min.js"></script>
    <script src="/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="/vendor/@glidejs/glide/dist/glide.min.js"></script>
    <script src="/vendor/countup.js/dist/countUp.umd.js"></script>
    <script src="/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
    <script src="/assets/js/pixel.js"></script>

</body>

</html>
