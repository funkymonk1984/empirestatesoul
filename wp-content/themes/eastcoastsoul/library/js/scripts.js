/*
 * ECS Scripts File
 * Author: Sean Davies
*/


jQuery(document).ready(function($) {



  /***************************
  HOME HEADER ANIMATION
  ***************************/
  $(".page-template-page-home .header").delay(1200).fadeIn(480);
  $(".page-template-page-home .intro-text").delay(2400).fadeIn(480);
  $(".page-template-page-home .intro-text").delay(2800).fadeOut(480);
  $(".page-template-page-home .carousel").delay(5600).fadeIn(480);

  $(".page-template-page-landing .header").delay(1200).fadeIn(480);
  $(".page-template-page-landing .intro-text").delay(2400).fadeIn(480);
  $(".page-template-page-landing .intro-text").delay(2800).fadeOut(480);
  $(".page-template-page-landing .carousel").delay(5600).fadeIn(480);

  $(".overlay").delay(2400).fadeIn(480);




  if ($("body").hasClass("page-template-page-landing")) {
    //alert("Test");
    //$("#logo").hide();
    $("#logo").attr("href", "#");
  }


  //$(".arrow").effect( "bounce", {times:3}, 300 );




  /***************************
  NAVBURGER
  ***************************/
  // $( ".navburger" ).click(function() {
  //   $(".header").toggleClass("clicked");
  //   $("#menu-main").toggle(250);
  //
  //   if ($(this).hasClass("clicked")) {
  //     $(this).removeClass("clicked");
  //     $(".navburger .navburger-icon").attr("src", templateUrl + "/library/images/hamburger.png");
  //   } else {
  //     $(this).addClass("clicked");
  //     $(".navburger .navburger-icon").attr("src", templateUrl + "/library/images/close.png");
  //   }
  // });
  //
  // $( ".navburger-red" ).click(function() {
  //   $(".header").toggleClass("clicked");
  //   $("#menu-main").toggle(250);
  //
  //   if ($(this).hasClass("clicked")) {
  //     $(this).removeClass("clicked");
  //     $(".navburger-red .navburger-icon").attr("src", templateUrl + "/library/images/hamburger-red.png");
  //   } else {
  //     $(this).addClass("clicked");
  //     $(".navburger-red .navburger-icon").attr("src", templateUrl + "/library/images/close-red.png");
  //   }
  // });



  /***************************
  HEADER RE-FORMAT ON SCROLL
  ***************************/
  function headerScroll() {
    if ($(this).scrollTop() > 100) {
      $(".header").addClass('scroll');
      setTimeout(function(){
        $(".header").slideDown(240);
      }, 0);

      } else {
        $(".header").removeClass('scroll');
    }
  } headerScroll();

  $(window).scroll(function() {
    headerScroll();
  });




  /***********
  BREADCRUMBS
  **********/
  $("#breadcrumbs").prependTo("#inner-content");




  /**********************
  BUILD CONTENT ASSYMETRY
  ***********************/

  // $( ".home-about-row:nth-of-type(even)" ).addClass( "even" );
  // $( ".about-repertoire-row:nth-child(2n)" ).addClass( "even" );
  // $( ".about-repertoire-row.even").children().addClass("pull-right");





  /***************************
  HOME TESTIMONIALS

  Section takes the full
  window height
  ***************************/
  // $(".home-testimonials").height($(window).height());




  /***************************
  HOME BLOG FORMATTING
  ***************************/
  // $(".home-update").eq(0).addClass("col-lg-12 col-md-12 col-sm-12 most-recent");
  // $(".home-update.most-recent .image-wrap").addClass("col-lg-6 col-md-6 col-sm-12");
  // $(".home-update.most-recent .content").addClass("col-lg-6 col-md-6 col-sm-12");
  // $(".home-update").eq(0).removeClass("col-lg-4 col-md-6");




  /***************************
  ADD ACTIVE CLASS TO CAROUSEL

  Carousel needs active class
  to animate. When generated
  through loop, it needs to
  be added here.
  ***************************/
  $(".carousel-item").eq(0).addClass("active");
  $(".carousel-indicators li:nth-child(1)").addClass("active");




  $('.accolade').eq(0).addClass('first');
  $('.accolade.first').addClass('col-sm-3');
  $('.accolade:not(.first)').wrapAll("<div class='col-sm-9 row'></div>");
  $('.accolade:not(.first)').addClass('col-sm-2 col-xs-6');



  /**********************
  EXCERPT MANAGEMENT
  ***********************/

  // $( ".excerpt" ).each(function() {

  //   /* Grab the contents of all elements with a class of "excerpt" */
  //   var excerptTitle = $(this).html();

  //   /* Trim these elements down */
  //   var shortExcerptTitle = jQuery.trim(excerptTitle).substring(0, 92).split(" ").slice(0, -1).join(" ") + "...";

  //   /* Replace the contents with shortened string */
  //   $(this).html(shortExcerptTitle);

  // });



  /**********************
  VIDEO ASSUMETRY
  ***********************/

  // $(".video-grid .video:eq(0)").addClass("container margin-0-auto");
  // $( ".video-grid .video:gt(0)" ).addClass("col-lg-6");

  $( ".video-grid" ).each(function() {
    $( this ).children( ".video:eq(0)" ).addClass("container margin-0-auto");
    $( this ).children( ".video:gt(0)" ).addClass("col-md-12 col-lg-6");
  });





  /**********************
  IMG WRAP
  ***********************/

  function resizeImage(){

    $( ".image-wrapper" ).each(function() {

      var imageHeight = $( this ).children().height();
      var imageWrapperHeight = $( this ).height();

      var imageWidth = $( this ).children().width();
      var imageWrapperWidth = $( this ).width();

      if (imageWrapperHeight >= imageHeight) {

        // $( ".image-wrapper img" ).height(imageWrapperHeight);
        // $( ".image-wrapper img" ).css({
        //   "width":"100%"
        // });

      } else if (imageWrapperWidth >= imageWidth) {

        //$( ".image-wrapper img" ).width(imageWrapperWidth+100);
        // $( ".image-wrapper img" ).css({
        //   "width":"100%",
        //   "height":"auto"
        // });

      }
    });
  }

  resizeImage();

  $(window).resize(function() {
    resizeImage();
  });






  /**********************
  SUB PAGE CLASS
  ***********************/
  $("body:not(.home)").addClass("sub-page");




  // $( window ).resize(function() {
  //   var fullWidthGridWidth = $('.full-width-grid').width();
  //   $('.full-width-grid').height(fullWidthGridWidth);
  // });

  // var fullWidthGridWidth = $('.full-width-grid').width();
  // $('.full-width-grid').height(fullWidthGridWidth);

  // $('.full-width-grid h3').css({
  //   "height":fullWidthGridWidth + "px"
  // });

  // $('.full-width-grid h3 a').css({
  //   "height":fullWidthGridWidth + "px"
  // });



  // $('#container').tubular({
  //   videoId: 'yJ30wV_a6yQ'
  // });




  /**********************
  CAROUSEL(S)
  ***********************/
  $(".carousel").carousel();

  // $("#testimonial-carousel").carousel({
  //   interval: 12000
  // });




  /**********************
  HOUSEKEEPING
  ***********************/
  $('p:empty').remove();




  /**********************
  ASSYMETRY TO ENSEMBLES
  ***********************/
  $(".ensemble").eq(1).addClass("col-lg-6");
  $(".ensemble").eq(2).addClass("col-lg-6");
  $(".ensemble").eq(3).addClass("col-lg-12");

  /**********************
  ASSYMETRY TO WEDDING PERFORMANCES
  ***********************/
  //$(".performance-inner").eq(0).addClass("col-md-12 col-lg-5 pull-left");
  //$(".performance-inner").eq(1).addClass("col-md-12 col-lg-6 pull-right");

  //$( "<div class='clearfix'></div>" ).insertBefore( ".performance-inner:last" );
  //$(".performance-inner:last").addClass('container');
  //$(".performance-inner:last .content").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6");
  //$(".performance-inner:last .image-wrapper:first").removeClass("height-16");
  //$(".performance-inner:last .image-wrapper:first").addClass("height-24");





  /**********************
  ANIMATE JUMBOTRON
  ***********************/
  $(".jumbotron .content").hide();
  $(".jumbotron .content").delay(2400).fadeIn(480);



  /**********************
  TESTIMONIAL FORMAT
  ***********************/
  $(".testimonial").eq(0).addClass("first");



  /**********************
  ENSEMBLE CONTENT FORMAT
  ***********************/
  //$(".ensemble-video:gt(1)").wrap( "<div class='ensemble-video-wrapper col-sm-12 col-md-12 col-lg-6'></div>" );
  $(".ensemble-configuration").eq(0).addClass("first");
  $(".ensemble-configuration.first").removeClass("col-sm-12 col-md-10 col-lg-3");
  $(".ensemble-configuration.first").addClass("col-lg-10 col-md-10 col-sm-11 margin-0-auto");
  //$(".ensemble-configuration.first").addClass("bg-primary");


  //$(".ensemble-configuration.first li").addClass("col-lg-6 col-md-6 col-sm-12");
  //$(".ensemble-configuration:gt(0)").wrap( "<div class='col-sm-12 col-md-3 col-lg-3'></div>" );
  //$(".ensemble-blog").eq(0).addClass("col-lg-12 col-md-12 col-sm-12 most-recent");
  //$(".ensemble-blog.most-recent .image").addClass("col-lg-6 col-md-6 col-sm-12");
  //$(".ensemble-blog.most-recent .content").addClass("col-lg-6 col-md-6 col-sm-12");
  //$(".ensemble-blog").eq(0).removeClass("col-lg-4 col-md-6");



  //$(".video-element").addClass("col-lg-6 col-md-12 col-sm-12");
  //$(".video-element").eq(0).removeClass("col-lg-6");
  //$(".video-element").eq(0).addClass("col-lg-12");






  $( ".map-overlay" ).appendTo( ".acf-map" );




  $(".gallery").addClass('row margin-0');
  $("dl.gallery-item").addClass('col-lg-2 col-md-2 col-sm-2 col-xs-6');
  $(".gallery br").remove();




  $(".single-post #container").delay(1000).fadeIn(500);
  $(".page-template-page-ensemble #container").delay(250).fadeIn(500);
  $(".page-template-page-about #container").delay(250).fadeIn(500);
  $(".page-template-page-media #container").delay(250).fadeIn(500);
  $(".page-template-page-weddings #container").delay(250).fadeIn(500);

  $(".single-performances #container").delay(240).fadeTo(480, 1);







}); /* end of as page load scripts */
