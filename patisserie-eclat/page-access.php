<?php get_header(); ?>
<main>
    <section class="access-section section">
        <h2 class="section-title">
            Access<span class="ja">アクセス</span>
        </h2>

        <div class="access-info">
            <div class="map-wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.953312413771!2d139.76712567579156!3d35.68123617258573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf0fbd9b8e3%3A0x2a4d0f8f8d91f9a!2z5p2x5Lqs6YO95p2x5Lqs5biC!5e0!3m2!1sja!2sjp!4v1691234567890"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="access-text">
                <div class="access-address">
                    <p>
                        〒100-0001<br>
                        東京都千代田区1-1-1<br>
                        TEL 03-1234-5678
                    </p>
                </div>

                <div class="link-btn">
                    <a href="https://goo.gl/maps/xxxxxx" target="_blank" rel="noopener noreferrer">
                        Google Mapで開く
                    </a>
                </div>

                <div class="access-route">
                    <dl>
                        <dt>お車でお越しの方</dt>
                        <dd>〇〇ICから約12分（駐車場あり）</dd>

                        <dt>電車でお越しの方</dt>
                        <dd>〇〇駅から徒歩約8分</dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="btn">
            <a href="<?php echo esc_url(home_url()); ?>">Home</a>
        </div>
    </section>
</main>
    <?php get_footer(); ?>