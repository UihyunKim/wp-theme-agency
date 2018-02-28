// 
// fullpage.js
// 
$(function () {
  
  let windowWidth = $(window).width();
  let slideIndex;

  const navBg = function (param) {
    param == 'on' ? $('nav').css('background-color', 'rgba(0,0,0,0.7)') : '';
    param == 'off' ? $('nav').css('background-color', 'rgba(0,0,0,0)') : '';
  }

  $(window).resize(function (e) {
    windowWidth = $(window).width();

    windowWidth < 992 ? navBg('off') : navBg('on');
  });

  $('#fullpage').fullpage({
    afterLoad : function (anchorLink, idx) {
      slideIndex = idx;

      // progress bar animation start
      if (idx == 5) {
        $('.prb-1').css('width', '80%');
        $('.prb-2').css('width', '90%');
        $('.prb-3').css('width', '100%');
      } else {
        $('.progress-bar').css('width', '0%');
      }
    },

    onLeave: function(idx, nextIdx, direction){
      // add bg-color on nav when white bg
      // only working bigger than md screen size
      if (windowWidth >= 992) {
        if (idx == 4) { navBg('off'); }
        else if (nextIdx == 4) { navBg('on'); }
      }

      // change parallax background image
      if (nextIdx == 1) {
        $('#bootstrap-overrides').removeClass('prx-2').addClass('prx-1');
      } 
      else if (nextIdx == 5) {
        $('#bootstrap-overrides').removeClass('prx-1').addClass('prx-2');
      }

    },

  });
});


//
// animate.js
//
$(function() {
  $('#fullpage .scroll-down')
    .mouseenter(function() {
      $('.arrow', this).addClass('animated infinite bounce');
    })
    .mouseleave(function() {
      $('.arrow', this).removeClass('animated infinite bounce');
    });

});
