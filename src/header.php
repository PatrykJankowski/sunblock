<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="theme-color" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/sunblock/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/wp-content/themes/sunblock/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/wp-content/themes/sunblock/img/favicon-16x16.png" sizes="16x16">

    <!-- connect to domain of font files -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- optionally increase loading priority -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;700&display=swap">

    <!-- async CSS -->
    <link rel="stylesheet" media="print" onload="this.onload=null; this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;700&display=swap">


    <link rel="stylesheet" href="/wp-content/themes/sunblock/style.css"/>


<!--    <link rel="preload" href="/wp-content/themes/sunblock/style-non-critical.css" as="style" onload="this.onload=null; this.rel='stylesheet'">
-->
    <!-- no-JS fallback -->
    <!--<noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap">
        <link rel="stylesheet" href="/wp-content/themes/sunblock/style.css"/>
    </noscript>-->

    <!--<style type="text/css">

    </style>-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="navbar">
        <div class="container d-flex">
            <a class="logo" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="242" height="71" viewBox="0 0 222.1 62.92"><defs><style>.cls-1-logo{fill:#fff}.cls-2-logo{fill:#1a2938}.cls-3-logo{fill:#cecdcd}</style></defs><path class="cls-1-logo" d="M220.8 172.48a10.34 10.34 0 01-6.1-1.77 9.56 9.56 0 01-4-6.57 12 12 0 01.77-6.89 9.08 9.08 0 016.44-5.38 11.68 11.68 0 014.67-.24 9.3 9.3 0 017.86 6.27 11.84 11.84 0 01.51 6.32 9.51 9.51 0 01-9.05 8.2zm-6.89-10.54a7.89 7.89 0 001.18 4.49 6.44 6.44 0 004.71 2.89 7.05 7.05 0 005.07-1.15 6.43 6.43 0 002.53-3.63 8.7 8.7 0 00-.17-5.59 6.33 6.33 0 00-5.45-4.3 6.64 6.64 0 00-6.45 2.59 7.4 7.4 0 00-1.42 4.7zM125.47 170.85c-1.61 1.11-3.3 1.58-6.14 1.58a13.09 13.09 0 01-7.57-2.39l-.53-.39 1.69-2.52.44.28a10.41 10.41 0 008.27 1.74 5 5 0 001.71-.74 2.28 2.28 0 00-.25-4 9.31 9.31 0 00-3-.92 20.09 20.09 0 01-4.9-1.15 5.16 5.16 0 01-3.08-6.9 5.42 5.42 0 012.86-2.92 10.64 10.64 0 016.9-.7 12.11 12.11 0 014.1 1.61l.91.62-1.66 2.37-.57-.35a9.35 9.35 0 00-6-1.53 5.63 5.63 0 00-2.59.93 2.19 2.19 0 00.29 3.87 22.4 22.4 0 003.24 1c1.58.41 3.18.71 4.74 1.19a5 5 0 012.9 2.29 5.54 5.54 0 01-1.76 7.03zM148.1 165.11a7.57 7.57 0 01-6.72 7.21 10 10 0 01-6.12-.82 7.46 7.46 0 01-3.93-5.36 14.86 14.86 0 01-.26-2.91v-11.31h3.31v11.31a10.7 10.7 0 00.29 2.47 5 5 0 005.65 3.62c2.94-.34 4.54-2.51 4.57-5.41s0-12 0-12h3.31s.07 11.14-.1 13.2z" transform="translate(-49.77 -130.52)"/><path class="cls-1-logo" d="M159.43 38.39v3.16h-13.9V21.39h3.34l.01 17h10.55zM120.25 41.55h-3.02l-10.8-14.41.02 14.41h-3.32V21.39h3.01l10.84 14.43-.04-14.43h3.3l.01 20.16z"/><path class="cls-1-logo" d="M189.51 162.35c-.31-.24-.64-.47-1-.73a5.5 5.5 0 002.28-5 4.54 4.54 0 00-2.15-3.58 7.83 7.83 0 00-4.43-1.08h-9.51v20.15h10.1c.52 0 1.05-.06 1.57-.13a5.93 5.93 0 004-2.07 5.44 5.44 0 00-.86-7.56zM178 154.9h6.52a4.34 4.34 0 011.58.37 2.51 2.51 0 01-.45 4.73 6.68 6.68 0 01-1.48.2H178zm10 12a2.64 2.64 0 01-2.5 2H178v-5.8h6.56a4 4 0 012.58.71 2.84 2.84 0 01.92 3.12z" transform="translate(-49.77 -130.52)"/><path class="cls-1-logo" d="M222.1 41.55h-4.57l-8.67-9.1v9.1h-3.36V21.38h3.36v8.61l8.01-8.61h4.34l-9.15 9.77 10.04 10.4z"/><path class="cls-1-logo" d="M244.14 151.55a12.82 12.82 0 00-2.73.3 9.76 9.76 0 00-7.57 8.14 11.64 11.64 0 00.27 5.18 9.69 9.69 0 002.89 4.73 9.94 9.94 0 006.79 2.5h1.63a9.9 9.9 0 005.91-2.52l.48-.42-2.19-2.23-.51.45a7.08 7.08 0 01-3.76 1.62 9.29 9.29 0 01-1.28.09 6.7 6.7 0 01-5.15-2.23 7.56 7.56 0 01-1.79-6.32 7 7 0 012.17-4.39 7.22 7.22 0 014.9-1.87 7.29 7.29 0 014.61 1.61l.61.54 2.21-2.1-.47-.42a9.91 9.91 0 00-2.85-1.85 11 11 0 00-4.16-.8M93.55 142.62l-11.16 6.29-10.27-5.8-11.19 6.31-11.16-6.29 22.35-12.61z" transform="translate(-49.77 -130.52)"/><path class="cls-3-logo" d="M44.68 25.19l-10.27 5.78-11.16-6.29 21.43-12.07v12.58z"/><path class="cls-1-logo" d="M72.12 180.86v12.58l-22.35-12.56c.07 0 0-12.59 0-12.59z" transform="translate(-49.77 -130.52)"/><path class="cls-1-logo" d="M43.76 37.26l-11.17 6.29-10.26-5.78v-.01L0 25.19V12.61l11.16 6.29 32.6 18.36z"/><path class="cls-2-logo" d="M22.34 25.19h-.01M44.68 37.77h-.01"/><path class="cls-3-logo" d="M44.68 50.35L23.23 62.42V49.84l21.45-12.07v12.58z"/></svg>
            </a>
            <nav class="navbar__nav-desktop">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
                <?php /*get_search_form(); */?>
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </nav>

            <nav id="navbar__nav-mobile" class="navbar__nav-mobile">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
            </nav>
            <div id="navbar__toggle" class="navbar__toggle" onclick="slideToggle()"><i class="navbar__toggle-icon"></i></div>
        </div>
    </header>

    <main>