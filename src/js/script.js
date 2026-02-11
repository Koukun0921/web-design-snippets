jQuery(function ($) {
  // ハンバーガーメニュー
  $(function () {
    $(".js-hamburger").click(function () {
      $(this).toggleClass("is-open");
      $(".js-drawer").fadeToggle();
    });
    $(".js-drawer a[href]").on("click", function () {
      $(".js-hamburger").removeClass("is-open");
      $(".js-drawer").fadeOut();
    });
    $(window).on("resize", function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        $(".js-hamburger").removeClass("is-open");
        $(".js-drawer").fadeOut();
      }
    });
  });

  // FAQアコーディオン
  $(function () {
    $(".js-faq-trigger").on("click", function () {
      var $item = $(this).closest(".p-faq__item");
      $item.toggleClass("is-open");
      $item.find(".p-faq__answer").slideToggle(300);
    });
  });

  // フェードイン
  $(window)
    .on("scroll", function () {
      $(".js-fadeIn").each(function () {
        if (
          $(this).offset().top <
          $(window).scrollTop() + $(window).height() * 0.8
        ) {
          $(this).addClass("is-active");
        }
      });
    })
    .trigger("scroll");
});
