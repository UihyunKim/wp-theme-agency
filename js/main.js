'use strict';

(function ($) {

  var windowWidth = $(window).width();
  var imgCrops = [];
  var blackNavs = [];
  var currSlide = null;
  var navTooltips = [];
  var pgBars = [];
  var prxBgs = [];

  var resize = function resize() {
    $(window).resize(function (e) {
      windowWidth = $(window).width();
      navColor();
      imgCrop();
    });
  };

  var prxBg = function prxBg() {
    if (prxBgs.map(function (bg) {
      return bg.slide;
    }).includes(currSlide)) {
      var prx = prxBgs.filter(function (bg) {
        return bg.slide === currSlide;
      })[0]['class'];
      $('#bootstrap-overrides').removeClass().addClass(prx);
    }
  };

  var animationEnd = function (el) {
    var animations = {
      animation: 'animationend',
      OAnimation: 'oAnimationEnd',
      MozAnimation: 'mozAnimationEnd',
      WebkitAnimation: 'webkitAnimationEnd'
    };

    for (var t in animations) {
      if (el.style[t] !== undefined) {
        return animations[t];
      }
    }
  }(document.createElement('div'));

  var titleAnim = function titleAnim(sId, effectAdd) {
    var all = '.js-title-anim';
    var current = '#' + sId + currSlide + ' ' + all;
    var effect = 'animated ' + effectAdd;

    $(all).addClass('invisible'); // back to default(display: hidden;)
    $(current) // animation start
    .removeClass('invisible').addClass(effect).one(animationEnd, function () {
      $(this).removeClass(effect);
    });
  };

  var bgAnim = function bgAnim(sId, effectAdd) {
    var all = '.js-bg-anim';
    var current = '#' + sId + currSlide + ' ' + all;
    var effect = 'animated ' + effectAdd;

    $(all).addClass('invisible'); // back to default(display: hidden;)
    $(current) // animation start
    .removeClass('invisible').addClass(effect).one(animationEnd, function () {
      $(this).removeClass(effect);
    });
  };

  var pgBarAnim = function pgBarAnim() {
    if (pgBars.includes(currSlide)) {
      $('.prb-1').css('width', '80%');
      $('.prb-2').css('width', '90%');
      $('.prb-3').css('width', '100%');
    } else {
      $('.progress-bar').css('width', '0%');
    }
  };

  var hoverAnim = function hoverAnim() {
    var anim = 'animated infinite bounce';
    $('#fullpage-front .scroll-down').mouseenter(function () {
      $('.arrow', this).addClass(anim);
    }).mouseleave(function () {
      $('.arrow', this).removeClass(anim);
    });
  };

  var navColor = function navColor() {
    var white = function white() {
      $('nav a').removeClass('js-color-black');
      $('#sns img').removeClass('js-filter-black');
      $('#fp-nav ul li a span, .fp-slidesNav ul li a span').addClass('js-bg-white');
      $('#fp-nav ul li .fp-tooltip').removeClass('js-color-black');
    };
    var black = function black() {
      $('nav a').addClass('js-color-black');
      $('#sns img').addClass('js-filter-black');
      $('#fp-nav ul li a span, .fp-slidesNav ul li a span').removeClass('js-bg-white');
      $('#fp-nav ul li .fp-tooltip').addClass('js-color-black');
    };
    blackNavs.includes(currSlide) ? black() : white();
  };

  var imgCrop = function imgCrop() {
    if (imgCrops.length) {
      var hWindow = $(window).height();
      var hNav = $('nav').outerHeight();
      var hBody = $('#s5-body').outerHeight();
      var height = hWindow - hNav - hBody + 'px';
      $('#s5-img').css('height', windowWidth < 576 ? height : 'auto');
    }
  };

  var fullpage = function fullpage() {
    // Front page
    if ($('#fullpage-front').length) {
      blackNavs = [4, 6];
      imgCrops = [5];
      pgBars = [5];
      navTooltips = ['Welcome', 'About us', 'News', 'Blog', 'Skill-set', 'Our team', 'Contact'];
      prxBgs = [{
        slide: 1,
        class: 'prx-1'
      }, {
        slide: 5,
        class: 'prx-2'
      }, {
        slide: 7,
        class: 'prx-3'
      }];

      $('#fullpage-front').fullpage({
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: navTooltips,

        afterLoad: function afterLoad(anchorLink, idx) {
          currSlide = idx;
          navColor();
          pgBarAnim();
          imgCrop();
          titleAnim('section', 'fadeInUp');
          bgAnim('section', 'fadeIn');
        },
        onLeave: function onLeave(idx, nextIdx, direction) {
          //
          currSlide = nextIdx;
          navColor();
          pgBarAnim();
          prxBg();
        }
      });
    } else if ($('#fp-news').length) {
      $('#fp-news').fullpage({
        navigation: true,
        navigationPosition: 'right',
        afterLoad: function afterLoad(achorLink, idx) {
          currSlide = idx;
          navColor();
          titleAnim('news-section', 'flipInX');
          bgAnim('news-section', 'fadeIn');
        }
      });
    }
  }; // end fulpage

  $(document).ready(function () {
    hoverAnim();
    resize();
    fullpage();
    $('#bootstrap-overrides').removeClass('d-none');
  });
})(jQuery);