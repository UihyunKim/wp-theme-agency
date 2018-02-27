// 
// Init fullpage.js
// 
$(function () {
  $('#fullpage').fullpage();
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
