<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            
            <div class="header-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/logokms.png'); ?>"
                         alt="КМС МЕДИЦИНА"
                         class="logo-img">
                </a>
            </div>
            
            <div class="header-line">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/line-header.png'); ?>"
                     alt=""
                     class="line-img">
            </div>

            <nav class="header-nav">
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#services" class="nav-link">Услуги</a></li>
                    <li class="nav-item"><a href="#licenses" class="nav-link">Лицензии</a></li>
                    <li class="nav-item"><a href="#faq" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            
            <div class="header-contact">
                <div class="phone-info">
                    <p class="phone-number">+7 (999) 000-11-22</p>
                    <p class="phone-note">Круглосуточно</p>
                </div>
                
                <div class="header-action">
                    <button class="header-button open-modal-btn">Оставить заявку</button>
                </div>
            </div>
            
        </div>
    </div>
</header>