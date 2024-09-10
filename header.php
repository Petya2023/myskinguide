<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <script type="text/javascript" src="https://livejs.com/live.js"></script>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="hero-section">
        <nav class="nav navigation">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center nav-inner">
                    <a href="">
                        <!-- <img src="<?php echo get_theme_file_uri('assets/src/images/logo.png'); ?>" alt="" class="logo"> -->
                    </a>
                    <ul class="d-flex">
                        <li><a href="" class="nav-link me-4">Съставки</a></li>
                        <li><a href="" class="nav-link">Типове кожа</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-magnifying-glass search-icon search-icon-js"></i>
                        <a href="" class="btn btn--subscribe ms-5">Абонирай се</a>
                    </div>
                </div>
            </div>
        </nav>