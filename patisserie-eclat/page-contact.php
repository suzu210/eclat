<?php
get_header();
?>

<main>
    <section class="contact-section">
        <h2 class="section-title">
            Contact<span class="ja">お問い合わせ</span>
        </h2>
        <div class="contact-wrapper">
            <p class="contact-text">
                ご予約やご質問など、どうぞお気軽にお問い合わせください。<br>
                フォーム送信後、担当者より折り返しご連絡いたします。
            </p>
            <?php echo do_shortcode('[contact-form-7 id="c2abb66" title="contact"]'); ?>
        </div>
        <div class="btn">
            <a href="<?php echo esc_url(home_url()); ?>">Home</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>