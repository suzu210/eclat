$(function () {
  // -------------------------
  // ハンバーガーメニュー
  // -------------------------
  $(".toggle_btn").on("click", function () {
    $("body").toggleClass("open");
  });

  $("#navi a, #mask").on("click", function () {
    $("body").removeClass("open");
  });

  // -------------------------
  // スクロールでフェードイン
  // -------------------------
  function fadeInOnScroll() {
    $('.fadeInUp, .fadeInLeft, .fadeInRight').each(function () {
      var elemTop = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > elemTop - windowHeight + windowHeight / 3) {
        $(this).addClass('in-view');
      }
    });

    // floatは常にループアニメ
    $('.float').addClass('in-view');
  }

  // 初回＋スクロール時に実行
  $(window).on('load scroll', fadeInOnScroll);

  // -------------------------
  // セクションタイトルアニメーション
  // -------------------------
  function animateSectionTitle() {
    $('.section-title').each(function () {
      var elemTop = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > elemTop - windowHeight + 50) {
        $(this).addClass('animate active');
      }
    });
  }

  $(window).on('load scroll', animateSectionTitle);

  // -------------------------
  // 背景スライドショー
  // -------------------------
  let current = 0;
  const slides = $(".bg-slide");
  const texts = $(".hero-text");
  const slideCount = slides.length;
  const interval = 6000;

  function showSlide(index) {
    slides.removeClass("active").eq(index % slideCount).addClass("active");
    texts.removeClass("active").eq(index % slideCount).addClass("active");
  }

  function nextSlide() {
    current = (current + 1) % slideCount;
    showSlide(current);
  }

  // 初期表示
  showSlide(current);

  // 自動切り替え
  setInterval(nextSlide, interval);
});

