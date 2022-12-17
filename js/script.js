// headerのMenuボタン押下時の処理
$(function () {
  $(".c-button--menu.js-button").click(function () {
    $(".l-sidebar__main").scrollTop(0);
    $(".wrapper.u-background--overlay").toggleClass("js-height");
    $(".side-wrapper").css({
      "z-index": "4",
      left: "0",
      "transition-duration": "0.5s",
    });
    $(".l-sidebar__main").toggleClass("is-open");
    $("body").css({ position: "fixed", overflow: "scroll" });
    $(".wrapper").css({ position: "sticky", top: "0" });
    $(".menu-close.js-button").css({ position: "sticky", top: "0" });
  });
});

// sidebarのｘボタン押下時の処理
$(function () {
  $(".menu-close.js-button").click(function () {
    $(".u-background--overlay").toggleClass("js-height");
    $(".side-wrapper").css({
      "z-index": "-1",
      left: "100%",
    });
    $(".l-sidebar__main").css({
      "transition-duration": "0.5s",
    });
    $(".wrapper").css({ position: "static" });
    $("body").css({ position: "static", overflow: "inherit" });
    $(".l-sidebar__main").removeClass("is-open");
  });
});

//サイドバー表示中にブラウザをレスポンシブした時の処理（ｘボタン押下時と同じスタイルを適用）
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
