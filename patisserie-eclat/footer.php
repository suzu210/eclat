<!-- フッター -->
    <footer>
        <div class="wrapper">
            <div class="footer-content">
                <!-- ショップ情報 -->
                <div class="footer-shop">
                    <div class="footer-logo">Pâtisserie ÉCLAT</div>
                    <div class="catchphrase">
                        <span class="jp">「今日という日を、少しだけ特別に。」</span><br>
                        <span class="en">Make today a little more special.</span>
                    </div>
                    <div class="shop-info">
                        <div class="shop-info-item">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <span>〒100-0001 東京都千代田区1-1-1</span>
                        </div>
                        <div class="shop-info-item">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <span>03-1234-5678</span>
                        </div>
                        <div class="shop-info-item">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <span>info@patisserie-example.com</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="https://facebook.com/" class="social-link"><i
                                class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://instagram.com/" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://twitter.com/" class="social-link"><i
                                class="fa-brands fa-square-x-twitter"></i></a>
                    </div>
                </div>

                <!-- メニュー -->
                <div class="footer-column">
                    <p>Menu</p>
                    <div class="footer-links">
                        <a href="<?php echo esc_url(home_url('/petitgateau')); ?>">小さなケーキ</a>
                        <a href="<?php echo esc_url(home_url('/celebration')); ?>">ホールケーキ・お祝いケーキ</a>
                        <a href="<?php echo esc_url(home_url('/confiserie')); ?>">焼き菓子＆ギフト</a>
                    </div>
                </div>

                <!-- インフォメーション -->
                <div class="footer-column">
                    <p>Information</p>
                    <div class="footer-links">
                        <a href="<?php echo esc_url( home_url('/#news') ); ?>">お知らせ</a>
                        <a href="<?php echo esc_url( home_url( '/access' ) ); ?>">アクセス</a>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせ</a>
                    </div>
                </div>

                <!-- 営業時間 -->
                <div class="footer-column">
                    <p>営業時間</p>
                    <div class="business-hours">
                        <div class="hours-item">
                            <span>平日</span>
                            <span>10:00 - 20:00</span>
                        </div>
                        <div class="hours-item">
                            <span>土日祝</span>
                            <span>9:00 - 19:00</span>
                        </div>
                        <div class="hours-item">
                            <span>定休日</span>
                            <span>火曜日</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- コピーライト -->
            <div class="footer-bottom">
                <p>&copy; 2025 Pâtisserie ÉCLAT. All rights reserved.</p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>