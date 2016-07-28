$("#mainimg").on("click", quickView);

 function cattoggle (param1,param2) {
 	if (param1 == 'servis') {
 		$('.nimset').hide(400);
 		$('.gooshvare').hide(400);
 		$('.angoshtar').hide(400);
		$('.servis').show(400);
 	}else if (param1 == 'nimset') {
		$('.nimset').show(400);
 		$('.gooshvare').hide(400);
 		$('.angoshtar').hide(400);
		$('.servis').hide(400);
 	}else if (param1 == 'gooshvare') {
		$('.nimset').hide(400);
 		$('.gooshvare').show(400);
 		$('.angoshtar').hide(400);
		$('.servis').hide(400);
 	}else if (param1 == 'angoshtar') {
		$('.nimset').hide(400);
 		$('.gooshvare').hide(400);
 		$('.angoshtar').show(400);
		$('.servis').hide(400);
 	}else if (param1 == 'all') {
		$('.nimset').show(400);
 		$('.gooshvare').show(400);
 		$('.angoshtar').show(400);
		$('.servis').show(400);
 	}
 }

 function sslider() {

     $("#hidenav").hide();

     // fade in .navbar
     $(function () {
         $(window).scroll(function () {

             // set distance user needs to scroll before we start fadeIn
             if ($(this).scrollTop() > 110) {
                 $('#hidenav').fadeIn();
             } else {
                 $('#hidenav').fadeOut();
             }
         });
     });

$('.latestslider').bxSlider({
  minSlides: 1,
  maxSlides: 4,
  slideWidth: 260,
  autoControls: true,
  slideMargin: 8,
  moveSlides: 1,
  hideControlOnEnd: false,
//  adaptiveHeight: true,
  infiniteLoop: false
});

$('.productslider').bxSlider({
  minSlides: 4,
  maxSlides: 4,
  autoControls: true,
  slideMargin: 10,
  moveSlides: 4,
  hideControlOnEnd: false,
  responsive: true,
  slideWidth: 87,
  pager: true,
  controls: false,
//  adaptiveHeight: true,
  infiniteLoop: false
});

$('.smallslider').bxSlider({
  minSlides: 1,
  maxSlides: 1,
  slideWidth: 260,
  autoControls: true,
  controls: false,
  slideMargin: 8,
  moveSlides: 1,
  hideControlOnEnd: false,
//  adaptiveHeight: true,
  infiniteLoop: false
});

}
    function blacky(divObj,one,two,three) {
      divObj.style.background = "black";
      document.getElementById(one).style.background = "#222";
      document.getElementById(two).style.background = "#222";
      document.getElementById(three).style.background = "#222";
    }

;

function changeimg(param1) {
	document.getElementById("mainimg").src=param1;
  document.getElementById("modalmainimg").src=param1;
}


function quickView() {
  var slider = $('.productslider2').bxSlider({
    minSlides: 4,
  maxSlides: 5,
  autoControls: true,
  slideMargin: 10,
  moveSlides: 1,
  responsive: true,
  slideWidth: 92,
  pager: true,
  controls: false,
  adaptiveHeight: true,
  infiniteLoop: false
  });
  slider.destroySlider();
  //$('#myModal').modal('show');

  slider.reloadSlider();
    slider.reloadSlider();
      slider.reloadSlider();
}

