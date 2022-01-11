<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <meta property="og:title" content="YG PLANNING INC.｜株式会社ワイジープランニング">
    <meta property="og:description" content="「og:description」での文字数は80~90文字が最適とされています。">
    <meta property="og:url" content="http://www.yg-planning.co.jp/">
    <meta property="og:image" content="http://www.yg-planning.co.jp/img/ogp.jpg">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="YG PLANNING INC.｜株式会社ワイジープランニング">
    <meta name="twitter:card" content="summary_large_image">
</head>

<?php if ( !is_404() ) : ?>
<body>

<!---- header ---->
<?php if( is_home() || is_front_page() ): ?>
<header class="header">
<?php else : ?>
<header class="header _show">
<?php endif; ?>

    <div class="header-bg" id="js-header-bg"></div>
        <div class="inner">
            <p class="header-logo" id="js-header-logo"><a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header_logo.png" alt="YG PLANNING"></a></p>
            <div class="nav-icon"><div><span></span><span></span><span></span></div></div>
        </div>

            <!----  nav ---->
            <nav class="nav">
                <div class="nav-close"></div>
                <div class="nav-inner">
                    <div class="nav-logo"><a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo_white.svg" alt="YG PLANNING"></a></div>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="<?php echo esc_url( home_url('info') ) ?>">INFORMATION</a></li>
                        <li class="nav-item">
                            <a href="<?php echo esc_url( home_url() ) ?>#bisiness">BUSINESS</a>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url() ) ?>#brand">CHIAKI KATAGIRI</a></li>
                                <li><a href="<?php echo esc_url( home_url() ) ?>#import">IMPORT</a></li>
                                <li><a href="<?php echo esc_url( home_url() ) ?>#oem">OEM</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="<?php echo esc_url( home_url() ) ?>#about">ABOUT<span class="_ls0"> </span>US</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url( home_url('contact') ) ?>">CONTACT</a></li>
                    </ul>
                    <p class="nav-link">
                        <a href="" target="_blank">
                        <span>Original Brand</span>
                        <img class="_sp" src="<?php echo get_template_directory_uri() ?>/img/brand_logo_white.png" alt="CHIAKI KATAGIRI">
                        <img class="_pc" src="<?php echo get_template_directory_uri() ?>/img/brand_logo.png" alt="CHIAKI KATAGIRI">
                        </a>
                    </p>
                </div>
            </nav><!---- /nav ---->

    </header><!---- /header ---->
<?php endif; ?>  
