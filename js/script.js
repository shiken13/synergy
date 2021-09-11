
// functionを入れることで、html→css→jqueryの順番で読み込ませる


// staff
// $(function(){

//   // 自動スライド
//   $('#staff-slick').slick({

//     autoplay: true,
//     autoplaySpeed: 5000,
//     dots: true,
//     // dotsClass: 'slick-dots2',
//     arrows: false,
//     slidesToShow: 4,
//     slidesToScroll: 1,

//     responsive: [
//       {
//         breakpoint: 767,
//         settings: {
//           // slidesToShow: 5,
//           // slidesToScroll: 1,
//           // infinite: true,
//           // centerPadding:'0',
//           // centerMode:true,
//           slidesToShow: 2,
//           slidesToScroll: 1,
//           centerPadding:'0px',
//           centerMode:true,
//         }
//       }
//     ]
//   });
// });


//ハンバーガーメニュー
$(function(){
  $('.nav-btn').on('click', function(){
    $(this).toggleClass('-active');
    $('#nav').toggleClass('-active');
  });
});

//wow機能
$(function(){
  new WOW().init();
});

// topへ移動
$(function() {
  var pagetop = $('#page_top');   
  pagetop.hide();
  $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {  //100pxスクロールしたら表示
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
      }
  });
  pagetop.click(function () {
      $('body,html').animate({
          scrollTop: 0
      }, 500); //0.5秒かけてトップへ移動
      return false;
  });


});

// topへ移動
$(function() {
  var fix = $('.request');   
  fix.hide();
  $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {  //100pxスクロールしたら表示
          fix.fadeIn();
      } else {
          fix.fadeOut();
      }
  });

});




