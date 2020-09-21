/*-------------------------
  hamburger menu
--------------------------*/
var winW = $(window).width();
var devW = 767;
if (winW <= devW) {

  $(function(){
    jQuery('.hamburger').on('click', function(){
      jQuery('.nav_box').slideToggle(600);
       jQuery(this).toggleClass('active');
    });
     jQuery('.nav_box li a').on('click', function(){
          jQuery('.nav_box').css('display', 'none');
           jQuery('.hamburger').toggleClass('active');
        });

  })
} else {
}

/*-------------------------
  pagetotop
--------------------------*/
$(function() {
    var topBtn = $('#totop');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
        //ボタンの表示方法
            topBtn.fadeIn();
        } else {
        //ボタンの非表示方法
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,  html').animate({
            scrollTop: 0
        },   500);
        return false;
    });
});
      /*-------------------------
        スムーススクロール
    //   --------------------------*/

    $(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});


/*-------------------------
  新着記事一覧　切り替え
--------------------------*/
$(window).on('load', function(){
  var winW = $(window).width();
  var devW = 767;
  if (winW <= devW) {

    $('.change_cat').show();
    setTimeout(function(){
         $('.change_cat').hide();
         $('.change_cat.is-active').show();
    },1500);
console.log('スマホ');
  } else {

    $('.change_cat').show();
    setTimeout(function(){
         $('.change_cat').hide();
         $('.change_cat.is-active').show();
    },300);
console.log('PC');
  }

  $(function(){
  	$('.cat_nav_list > a').click(function(){

  		$('.cat_nav_list > a,.change_cat').removeClass('is-active');

  		var tabClass = $(this).attr('class');

  		$(this).addClass('is-active');

  		$('.change_cat').each(function(){

  			if($(this).attr('class').indexOf(tabClass) != -1){

  				$(this).addClass('is-active').fadeIn(500);

  			}else{

  				$(this).hide();

  			}

  		});

  	});

  });


})
