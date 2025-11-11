<?php
get_header();
?>

<main class="celebration-page">
    <!-- ヒーロー -->
    <section class="hero">
        <div class="hero-content tracking-in-expand">
            <h1 class="hero-title">Celebration Cakes</h1>
            <p class="hero-subtitle">特別な日に華やぎを添えるホールケーキ</p>
        </div>
    </section>

    <!-- 商品カード一覧 -->
    <section class="product-list celebration-list">
        <div class="product-card new">
            <span class="badge">NEW</span>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/celebration-ichigo.jpg'); ?>" alt="苺デコレーションケーキ">
            <h2>苺デコレーションケーキ</h2>
            <p class="desc">定番人気。ふわふわのスポンジに苺をたっぷり。</p>
            <p class="price">¥3,800〜</p>
            <p class="size">4号（2〜3人用）〜 6号（6〜8人用）</p>
        </div>

        <div class="product-card popular">
            <span class="badge">人気</span>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/celebration-choco.jpg'); ?>" alt="チョコレートケーキ">
            <h2>チョコレートケーキ</h2>
            <p class="desc">濃厚ショコラの贅沢ケーキ。誕生日や記念日に。</p>
            <p class="price">¥4,200〜</p>
            <p class="size">5号（4〜6人用）〜 7号（8〜10人用）</p>
        </div>

        <div class="product-card">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/celebration-talt.jpg'); ?>" alt="フルーツタルト">
            <h2>フルーツタルト</h2>
            <p class="desc">旬のフルーツをふんだんにのせた彩り豊かなタルト。</p>
            <p class="price">¥4,800〜</p>
            <p class="size">5号（4〜6人用）〜</p>
        </div>
    </section>

    <!-- 他メニューへのリンク -->
    <section class="other-menus">
        <div class="menu-links btn">
            <a href="<?php echo esc_url(home_url('/petitgateau')); ?>">Petits Gâteaux</a>
            <a href="<?php echo esc_url(home_url('/confiserie')); ?>">Confiserie</a>
        </div>
    </section>
    <div class="btn">
        <a href="<?php echo esc_url(home_url()); ?>">Home</a>
    </div>
</main>

<?php
get_footer();
?>