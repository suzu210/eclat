<?php get_header(); ?>
<main>
    <div class="wrapper">
        <!-- Menuセクション -->
        <section id="menu">
            <h2 class="section-title">
                Menu<span class="ja">メニュー</span>
            </h2>
            <div class="menu-content gradientMove">

                <a href="<?php echo esc_url(home_url('/petitgateau')); ?>" class="menu-card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu-petitgateau.png'); ?>" alt="petit Gâteaux">
                    <div class="label">
                        <span class="fr">Petits Gâteaux</span>
                        <span class="jp">小さなケーキ</span>
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </a>

                <a href="<?php echo esc_url(home_url('/celebration')); ?>" class="menu-card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu-entremets.png'); ?>" alt="entremets">
                    <div class="label">
                        <span class="fr">Celebration Cake</span>
                        <span class="jp">ホールケーキ・お祝いケーキ</span>
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </a>

                <a href="<?php echo esc_url(home_url('/confiserie')); ?>" class="menu-card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu-gateau.png'); ?>" alt="gateau">
                    <div class="label">
                        <span class="fr">Confiserie</span>
                        <span class="jp">焼き菓子・ギフト</span>
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </a>

            </div>
        </section>
    </div>
    <!-- Newsセクション -->
    <section id="news">
        <h2 class="section-title">
            News<span class="ja">お知らせ</span>
        </h2>
        <div class="news-content fadeInUp">
            <article class="news-card">
                <div class="badge">10月の季節限定</div>
                <h3 class="news-title">秋限定［和栗のモンブラン］登場</h3>
                <p class="news-date">2025.10.06</p>
                <p class="news-text">岐阜県産の和栗をしようした、ふわっと軽やかなモンブラン。サクサクのメレンゲと濃厚なマロンクリームが絶妙なバランスです。</p>
            </article>
            <article class="news-card">
                <div class="badge">新商品</div>
                <h3 class="news-title">フランス産チョコレートケーキ</h3>
                <p class="news-date">2025.09.28</p>
                <p class="news-text">厳選されたフランス産チョコレートを使用した濃厚なガトーショコラ。大人の味わいをお楽しみください。</p>
            </article>
            <article class="news-card">
                <div class="badge">期間限定イベント</div>
                <h3 class="news-title">秋のギフトフェア開催中</h3>
                <p class="news-date">2025.09.15</p>
                <p class="news-text">大切な方への贈り物に最適な、季節限定の詰め合わせセットをご用意。特別なラッピングサービスも承ります。</p>
            </article>
            <article class="news-card">
                <div class="badge">お知らせ</div>
                <h3 class="news-title">営業時間変更のご案内</h3>
                <p class="news-date">2025.08.15</p>
                <p class="news-text">9月より営業時間を変更いたします。平日10:00-19:00、土日祝9:00-20:00となります。</p>
            </article>
        </div>
        <div class="btn">
            <a href="#">もっと見る</a>
        </div>
    </section>
    <!-- Aboutセクション -->
    <section id="about" class="wrapper">
        <h2 class="section-title">
            About<span class="ja">私たちについて</span>
        </h2>
        <div class="about-content">
            <div class="about-text fadeInLeft">
                <h3>日常に彩りを</h3>
                <p>
                    慌ただしい日々の中で、ふと心が軽やかになる瞬間。<br>
                    私たちのお菓子は、そんな<span class="highlight-text">心の余白</span>を大切にする方のために生まれました。<br>
                    静かな午後のコーヒータイム、友人との何気ない会話、
                    愛する人への想いを込めた贈り物として—<br>
                    あなただけの<span class="highlight-text">特別な日常</span>を彩ります。
                </p>
            </div>
            <div class="about-image fadeInRight">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about-sec.png'); ?>" alt="私たちのお菓子">
            </div>
        </div>
        <div class="ingredients-content">
            <div class="ingredients-title">
                <h3>こだわりの素材</h3>
            </div>
            <div class="ingredients-grid">
                <!-- 素材カード1 -->
                <div class="ingredient-card fadeInUp">
                    <div class="ingredient-icon">🌾</div>
                    <h4>厳選小麦粉</h4>
                    <p>北海道産の最高級小麦粉を使用。豊かな風味と、しっとりとした食感を生み出します。</p>
                </div>
                <!-- 素材カード2 -->
                <div class="ingredient-card fadeInUp">
                    <div class="ingredient-icon">🥚</div>
                    <h4>新鮮な卵</h4>
                    <p>契約農場から毎朝届く新鮮な卵。濃厚な味わいと美しい色合いを実現します。</p>
                </div>
                <!-- 素材カード3 -->
                <div class="ingredient-card fadeInUp">
                    <div class="ingredient-icon">🍓</div>
                    <h4>季節のフルーツ</h4>
                    <p>旬の時期に収穫された国産フルーツ。自然な甘みと香りをお楽しみいただけます。</p>
                </div>
            </div>
            <!-- 装飾ライン -->
            <div class="decorative-line bottom"></div>
        </div>
    </section>
    <!-- Instagramセクション -->
    <section class="instagram-section">
        <div class="wrapper">
            <h2 class="section-title">
                Instagram<span class="ja">インスタグラム</span></h2>
            <div class="instagram-grid">
                <a href="#" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/insta-photo1.jpg'); ?>" alt="instagram photo 1"></a>
                <a href="#" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/insta-photo2.jpg'); ?>" alt="instagram photo 2"></a>
                <a href="#" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/insta-photo3.jpg'); ?>" alt="instagram photo 3"></a>
                <a href="#" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/insta-photo4.jpg'); ?>" alt="instagram photo 4"></a>
            </div>
            <div class="instagram-follow">
                <a href="#" class="follow-button">
                    <span><i class="fa-brands fa-instagram"></i></span>
                    <span>Instagramでフォロー</span>
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>