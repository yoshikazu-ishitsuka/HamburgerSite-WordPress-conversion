// headerのMenuボタン押下時の処理
jQuery(function ($) {
  $(".c-button--menu.js-button").click(function () {
    $(".menu-cateogrymenu-container").scrollTop(0);
    $(".wrapper.u-background--overlay").toggleClass("js-height");
    $(".menu-cateogrymenu-container").css({
      "z-index": "4",
      left: "0",
      "transition-duration": "0.5s",
    });
    $(".menu").toggleClass("is-open");
    $(".menu").css({ overflow: "inherit" });
    $(".menu-item").css({ width: "auto" });
    $(".fa-times").css({ "margin-right": "1rem" });
    $("body").css({ position: "fixed", overflow: "scroll" });
    $(".wrapper").css({ position: "static", top: "0" });
    $(".x-mark").css({ position: "sticky", top: "0" });
  });
});

// sidebarのｘボタン押下時の処理
jQuery(function ($) {
  $(".x-mark").click(function () {
    $(".u-background--overlay").toggleClass("js-height");
    $(".menu-cateogrymenu-container").css({
      "z-index": "-1",
      left: "100%",
    });
    $(".menu").css({
      "transition-duration": "0.5s",
    });
    $(".wrapper").css({ position: "static" });
    $("body").css({ position: "static", overflow: "inherit" });
    $(".menu").removeClass("is-open");
  });
});

//サイドバー表示中にブラウザをレスポンシブした時の処理（ｘボタン押下時と同じスタイルを適用）
jQuery(function ($) {
  $(window).resize(function () {
    $(".l-sidebar__main").css({
      "transition-duration": "0s",
    });

    if (window.matchMedia("(min-width: 1025px)").matches) {
      $(".l-sidebar__main").removeClass("is-open");
      $(".u-background--overlay").removeClass("js-height");
      $(".wrapper").css({ position: "static" });
      $("body").css({ position: "static", overflow: "inherit" });
      $(".side-wrapper").css({
        "z-index": "-1",
        left: "100%",
      });
    }
  });
});
