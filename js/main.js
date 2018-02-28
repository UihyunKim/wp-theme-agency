// 
// Init fullpage.js
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
    },

    onLeave: function(idx, nextIdx, direction){
      // add bg-color on nav when white bg
      // only working bigger than md screen size
      if (windowWidth >= 992) {
        if (idx == 4) { navBg('off'); }
        else if (nextIdx == 4) { navBg('on'); }
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
