$(function() {
  // GENERAL SMOOTH SCROLLING WITH ANCHOR TAGS
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 50,
        }, 1000);
        return false;
      }
    }
  });
});
// SHOW BACK TO TOP ON SCROLL
var showBackToTop = $(".backtotop");
$(document).on( 'scroll', function(){
  if ($(this).scrollTop() > 500) {
    showBackToTop.addClass("show");
  } else {
    showBackToTop.removeClass("show");
  }
});

// PROGRESS BAR LOADER
var getMax = function(){
  return $(document).height() - $(window).height();
}

var getValue = function(){
  return $(window).scrollTop();
}

if('max' in document.createElement('progress')){
  // Browser supports progress element
  var progressBar = $('progress');

  // Set the Max attr for the first time
  progressBar.attr({ max: getMax() });

  $(document).on('scroll', function(){
    // On scroll only Value attr needs to be calculated
    progressBar.attr({ value: getValue() });
  });

  $(window).resize(function(){
    // On resize, both Max/Value attr needs to be calculated
    progressBar.attr({ max: getMax(), value: getValue() });
  });
}
else {
  var progressBar = $('.progress-bar'),
  max = getMax(),
  value, width;

  var getWidth = function(){
    // Calculate width in percentage
    value = getValue();
    width = (value/max) * 100;
    width = width + '%';
    return width;
  }

  var setWidth = function(){
    progressBar.css({ width: getWidth() });
  }

  $(document).on('scroll', setWidth);
  $(window).on('resize', function(){
    // Need to reset the Max attr
    max = getMax();
    setWidth();
  });
}
