<?php
get_header();
?>

<main class="petitgateau-page">
    <!-- ヒーロー -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Petits Gâteaux</h1>
            <p class="hero-subtitle">ひとつぶの幸せを、日常に</p>
        </div>
    </section>

    <!-- 商品カード一覧 -->
    <section class="product-list">
        <div class="product-card new">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/menu-petitgateau.png' ); ?>" alt="苺のショートケーキ">
            <h2>苺のショートケーキ</h2>
            <p class="desc">ふわふわスポンジと甘酸っぱい苺の王道ケーキ</p>
            <p class="price">¥480（税込）</p>
            <p class="size">サイズ：1個</p>
            <span class="badge">人気</span>
        </div>

        <div class="product-card popular">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/chocolatcake.jpg' ); ?>" alt=""クラシックショコラ>
            <h2>クラシックショコラ</h2>
            <p class="desc">濃厚なカカオの香りが口いっぱいに広がる定番</p>
            <p class="price">¥520（税込）</p>
            <p class="size">サイズ：1個</p>

        </div>

        <div class="product-card">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/macha-mint-garnish.webp' ); ?>" alt="抹茶">
            <h2>抹茶オペラ</h2>
            <p class="desc">抹茶の濃厚な風味を閉じ込めた秋のおすすめ</p>
            <p class="price">¥550（税込）</p>
            <p class="size">サイズ：1個</p>
            <span class="badge">NEW</span>
        </div>
    </section>

    <!-- 他メニューへのリンク -->
    <section class="other-menus btn">
        <div class="menu-links">
            <a href="<?php echo esc_url(home_url('/celebration')); ?>">Celebration</a>
            <a href="<?php echo esc_url(home_url('/confiserie')); ?>">Confiserie</a>
        </div>
        <!-- 戻るボタン -->
        <div class="btn">
            <a href="<?php echo esc_url(home_url()); ?>">Home</a>
        </div>
    </section>
</main>
<?php
get_footer();
?>
