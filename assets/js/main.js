jQuery('.slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 5000,
});

jQuery(".js-accordion_title").on("click", function () {
  // クリックした次の要素を開閉
  jQuery(this).next().slideToggle(300);
  // タイトルにopenクラスを付け外しして矢印の向きを変更
  jQuery(this).toggleClass("open", 300);
});


jQuery(document).ready(function(){
  jQuery('.slider_service').slick({
      dots: true,
      fade: true,
      speed: 100,
      autoplay: true,
      infinite: true,
      cssEase: 'linear'
  });
});






// drawer
jQuery(".drawer-icon, .drawer-background, .drawer-content-item, .drawer-item-link, .drawer-nav-item-link-sub").on("click", function () {
  // クリックした時にis-activeがついていたら外す、ついていなかったら付ける！
  jQuery(".drawer-icon").toggleClass("is-active");
  jQuery(".drawer-content").toggleClass("is-active");
  jQuery(".drawer-background").toggleClass("is-active");
});

// nav スクロールシャドー
jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();
  if (scroll > 150) {
    jQuery(".header").addClass("active");
  } else {
    jQuery(".header").removeClass("active");
  }
});


// ページトップへ戻るボタンの設定
jQuery(function() {
  var topBtn = jQuery('#pageTop');
  topBtn.hide();
  //スクロールが100に達したらボタン表示
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  //スクロールしてトップ
  topBtn.click(function () {
    jQuery('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
}
);

// ハンバーガーメニューの色の変更
jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();
  if (scroll > 150) {
    jQuery(".drawer-icon").addClass("active");
  } else {
    jQuery(".drawer-icon").removeClass("active");
  }
});

// メニューボタンとナビゲーションのトグル設定
document.addEventListener("DOMContentLoaded", function() {
  var menuButton = document.querySelector('#menuButton');
  var gNav = document.querySelector('#gNav');

  menuButton.addEventListener('click', function() {
    gNav.classList.toggle('active');
    menuButton.classList.toggle('active');
    document.body.classList.toggle('active');
    // document.getElementById("mask").classList.toggle("active");
  });
  gNav.addEventListener("click", function () {
      gNav.classList.remove("active");
      menuButton.classList.remove("active");
      document.body.classList.remove("active");
  });
});


// トップページ動画
if (jQuery(".homeMv_video").length) {
  videoSize();
  jQuery(window).on('resize', function () {
    videoSize();
  });

  function videoSize() {
    var jQueryelm = jQuery(".homeMv_video"),
      elmSrc = jQueryelm.attr("src"),
      winWidth = window.innerWidth,
      mvHeight = jQuery(".homeMv").height(),
      widthBase,
      heightBase;
    if (winWidth <= 767) {
      if (elmSrc.indexOf("sp") == -1) {
        jQueryelm.attr("src", "/assets/video/main_sp.mp4");
      }
      widthBase = winWidth / 10
      heightBase = mvHeight / 16
      if (heightBase > widthBase) {
        jQueryelm.css({
          "width": heightBase * 10.1 + "px",
          "height": "102%"
        });
      } else {
        jQueryelm.css({
          "width": "102%",
          "height": "auto"
        });
      }
    } else {
      if (elmSrc.indexOf("sp") > -1) {
        jQueryelm.attr("src", "/assets/video/main.mp4");
      }
      widthBase = winWidth / 16
      heightBase = mvHeight / 9
      if (heightBase > widthBase) {
        jQueryelm.css({
          "width": heightBase * 16.1 + "px",
          "height": "102%"
        });
      } else {
        jQueryelm.css({
          "width": "100%",
          "height": "auto"
        });
      }
    }
  }
  // jQuery(".js-modal-video").modalVideo({
  //   channel: "vimeo",
  //   vimeo: {
  //     color: "fff",
  //     byline: false,
  //     portrait: false,
  //   },
  // });
}


  // スクロールイベントの各位置取得 （グローバル変数）
  var winPos = 0;
  var winHeight = jQuery(window).outerHeight();
  jQuery(window).on("scroll", function () {
    winPos = jQuery(this).scrollTop();
    winHeight = jQuery(window).outerHeight();
  });

  // ヘッダー色の変更
  if (jQuery(".lyMvWhite").length) {
    headerWhite();
    jQuery(window).on("scroll", function () {
      headerWhite();
    });

    function headerWhite() {
      var mvHeight = jQuery(".lyMvWhite").outerHeight();
      // console.log(mvHeight);
      if (winPos < mvHeight - 40) {
        jQuery(".header_logo img").attr("src", "/assets/image/common/logo_white.png");
        jQuery(".gNavBtn").addClass("white");
      } else {
        jQuery(".header_logo img").attr("src", "/assets/image/common/logo.png");
        jQuery(".gNavBtn").removeClass("white");
      }
    }
  }





// タイピングアニメーション
document.addEventListener("DOMContentLoaded", function() {
  const outputElement = document.getElementById('typed-output');
  const text = "信頼と実績のRoorDoctor";
  let index = 0;

  function type() {
      if (index < text.length) {
          outputElement.textContent += text.charAt(index);
          index++;
          setTimeout(type, 100); // 100msごとに次の文字を表示
      } else {
          setTimeout(erase, 2000); // タイピングが完了したら2秒待ってから消去を開始
      }
  }

  function erase() {
      if (index > 0) {
          outputElement.textContent = text.substring(0, index - 1);
          index--;
          setTimeout(erase, 100); // 100msごとに一文字を消去
      } else {
          setTimeout(type, 1000); // 全ての文字が消去されたら1秒待ってから再びタイピングを開始
      }
  }

  type();
});
