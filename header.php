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
                    <a href="<?php echo site_url(); ?>">ЛОГО
                        <!-- <img src="<?php echo get_theme_file_uri('assets/src/images/logo.png'); ?>" alt="" class="logo"> -->
                    </a>
                    <ul class="nav-links d-flex align-items-center">
                        <div class="dropdown me-5">
                            <li class="nav-item"><a href="" class="nav-link">Съставки</a></li>
                            <div class="dropdown__content">
                                <?php wp_list_categories(
                                    array(
                                        'title_li' => '',
                                        'child_of' => 8,
                                    )
                                ); ?>
                            </div>
                        </div>
                        <div class="dropdown">
                            <li class="nav-item"><a href="" class="nav-link">Рутини</a></li>
                            <div class="dropdown__content">
                                <?php wp_list_categories(
                                    array(
                                        'title_li' => '',
                                        'child_of' => 8,
                                    )
                                ); ?>
                            </div>
                        </div>
                    </ul>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-magnifying-glass search-icon search-icon-js"></i>
                        <button type="button" href="" class="btn btn--subscribe ms-5">Абонирай се</button>
                    </div>
                </div>
            </div>
        </nav>