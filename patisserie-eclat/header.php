<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if (is_front_page()): ?>
<!-- ヒーローセクション -->
<section class="hero-section">

    <!-- 外側の店名とアクセント -->
    <div class="hero-deco">
        <h1 class="site-name">Pâtisserie ÉCLAT</h1>
        <div class="deco-line left"></div>
        <div class="deco-line right"></div>
    </div>
    <!-- コンテンツ -->
    <div class="hero-content">
        <div class="hero-bg">
            <div class="bg-slide"></div>
            <div class="bg-slide"></div>
            <div class="bg-slide active"></div>
        </div>
        <!-- スライド1 -->
        <div class="hero-text active">
            <div class="hero-title">ひとくちで広がる<br>小さなしあわせ</div>
            <p class="hero-subtitle">毎日をちょっと特別にするケーキ</p>
            <p class="hero-en">Pure Elegance</p>
        </div>

        <!-- スライド2 -->
        <div class="hero-text">
            <div class="hero-title">特別な瞬間を<br>美しく彩る</div>
            <p class="hero-subtitle">職人が心を込めて作る上質なケーキで<br>大切な人との時間をより特別に</p>
            <p class="hero-en">With Love</p>
        </div>

        <!-- スライド3 -->
        <div class="hero-text">
            <div class="hero-title">素材にこだわる<br>職人の手仕事</div>
            <p class="hero-subtitle">ひとつひとつ心を込めて焼き上げています</p>
            <p class="hero-en">Crafted Beauty</p>
        </div>

    </div>
</section>
<?php endif; ?>
<header id="header">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" alt="パティスリーエクラのロゴ"></a>
        <nav id="navi" aria-label="メインナビゲーション">
            <ul class="nav-menu">
                <li><a href="<?php echo esc_url(home_url('/#menu')); ?>">Menu</a></li>
                <li><a href="<?php echo esc_url(home_url('/#news')); ?>">News</a></li>
                <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('/access')); ?>">Access</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
        </nav>
        <div class="toggle_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    <div id="mask"></div>
</header>
