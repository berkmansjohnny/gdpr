<!doctype html>
<html class="no-js" lang="">
<!-- saved from url=(0080)http://eur-lex.europa.eu/legal-content/NL/TXT/HTML/?uri=CELEX:32016R0679&from=NL -->
<!-- CONVEX # converter_version:6.7.1 # generated_on:20160504-0045 -->
<head>
  <title>GDPR Excerpt</title>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link type="text/css" rel="stylesheet" href="assets/warpaint.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link type="text/css" rel="stylesheet" href="assets/gdpr.css">
</head>

<body>
  <progress value="0" id="progressBar">
    <div class="progress-container">
      <span class="progress-bar"></span>
    </div>
  </progress>  <header id="rise">
    <div class="container">
    <div class="row stack-s">
    <div class="column">
      <h3 class="first logo inset-s">GDPR</h3>
    </div>
    <div class="column-1 center-center">
      <span class="lnr lnr-menu"></span>
    </div>
  </div>
</div>
<hr class="separator">
</header>

    <div class="container content stack-l">
    <div class="inline-xl">
        <?php

        //include("chapters/intro.php");
        include("chapters/chapter-1.php");
        //include("chapters/chapter-2.php");
        //include("chapters/chapter-3.php");
        //include("chapters/chapter-4.php");
        //include("chapters/chapter-5.php");
        //include("chapters/chapter-6.php");
        //include("chapters/chapter-7.php");
        //include("chapters/chapter-8.php");
        //include("chapters/chapter-9.php");
        include("views/footer.php");
        ?>
    </div>
    <section class="controls container">
      <div class="row">
        <div class="column-1 inset text-center">
          <a href="#">
            <span class="lnr lnr-chevron-left"></span>
          </a>
        </div>
        <div class="column inset text-center">
          <a href="#">
            <span class="lnr lnr-chevron-menu"></span>
          </a>
        </div>
        <div class="column-1 inset text-center">
          <a href="#">
            <span class="lnr lnr-chevron-right"></span>
          </a>
        </div>
      </div>
    </section>
    </div>
    <a href="#rise" class="backtotop round">
      <span class="lnr lnr-chevron-up"></span>
    </a>

<script type="text/javascript" src="assets/jquery.js"></script>
<script>
$(function() {
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
var showBackToTop = $(".backtotop");

$(document).on( 'scroll', function(){
    if ($(this).scrollTop() > 500) {
        showBackToTop.addClass("show");
    } else {
        showBackToTop.removeClass("show");
    }
});


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
</script>
</body>

</html>