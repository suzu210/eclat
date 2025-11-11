<?php
get_header();
?>

<main class="confiserie-page">
    <!-- ヒーロー -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Confiserie</h1>
            <p class="hero-subtitle">大切なひとに贈る、小さな幸せのギフト</p>
        </div>
    </section>

    <!-- 商品カード一覧 -->
    <section class="product-list">
        <div class="product-card">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/colorful-macarons-in-a-box.jpg'); ?>" alt="マカロン">
            <h2>マカロン</h2>
            <p class="desc">カラフルで華やかな、贈り物にもぴったりなひと粒。</p>
            <p class="price">¥1,900 / 9個入</p>
        </div>

        <div class="product-card">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/confi-photo2.jpg'); ?>" alt="フィナンシェ">
            <h2>フィナンシェ</h2>
            <p class="desc">焦がしバターの香り豊かな、しっとり焼き菓子。</p>
            <p class="price">¥1,500 / 8個入</p>
        </div>

        <div class="product-card">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/gatou.png'); ?>" alt="シュー">
            <h2>シュー</h2>
            <p class="desc">サクサク生地にクリームを詰めた小さな幸せ。</p>
            <p class="price">¥300 / 1個</p>
        </div>
    </section>

    <!-- 他メニューへのリンク -->
    <section class="other-menus">
        <div class="menu-links btn">
            <a href="<?php echo esc_url(home_url('/petitgateau')); ?>">Petits Gâteaux</a>
            <a href="<?php echo esc_url(home_url('/celebration')); ?>">Celebration</a>
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