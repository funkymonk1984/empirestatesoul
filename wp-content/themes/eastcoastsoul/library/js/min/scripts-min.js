jQuery(document).ready(function($){function e(){$(this).scrollTop()>100?($(".header").addClass("scroll"),setTimeout(function(){$(".header").slideDown(240)},0)):$(".header").removeClass("scroll")}function a(){$(".image-wrapper").each(function(){var e=$(this).children().height(),a=$(this).height(),l=$(this).children().width(),d=$(this).width()})}$(".page-template-page-home .header").delay(1200).fadeIn(480),$(".page-template-page-home .intro-text").delay(2400).fadeIn(480),$(".page-template-page-home .intro-text").delay(2800).fadeOut(480),$(".page-template-page-home .carousel").delay(5600).fadeIn(480),$(".page-template-page-landing .header").delay(1200).fadeIn(480),$(".page-template-page-landing .intro-text").delay(2400).fadeIn(480),$(".page-template-page-landing .intro-text").delay(2800).fadeOut(480),$(".page-template-page-landing .carousel").delay(5600).fadeIn(480),$(".overlay").delay(2400).fadeIn(480),$("body").hasClass("page-template-page-landing")&&$("#logo").attr("href","#"),e(),$(window).scroll(function(){e()}),$("#breadcrumbs").prependTo("#inner-content"),$(".carousel-item").eq(0).addClass("active"),$(".carousel-indicators li:nth-child(1)").addClass("active"),$(".accolade").eq(0).addClass("first"),$(".accolade.first").addClass("col-sm-3"),$(".accolade:not(.first)").wrapAll("<div class='col-sm-9 row'></div>"),$(".accolade:not(.first)").addClass("col-sm-2 col-xs-6"),$(".video-grid").each(function(){$(this).children(".video:eq(0)").addClass("container margin-0-auto"),$(this).children(".video:gt(0)").addClass("col-md-12 col-lg-6")}),a(),$(window).resize(function(){a()}),$("body:not(.home)").addClass("sub-page"),$(".carousel").carousel(),$("p:empty").remove(),$(".ensemble").eq(1).addClass("col-lg-6"),$(".ensemble").eq(2).addClass("col-lg-6"),$(".ensemble").eq(3).addClass("col-lg-12"),$(".jumbotron .content").hide(),$(".jumbotron .content").delay(2400).fadeIn(480),$(".testimonial").eq(0).addClass("first"),$(".ensemble-configuration").eq(0).addClass("first"),$(".ensemble-configuration.first").removeClass("col-sm-12 col-md-10 col-lg-3"),$(".ensemble-configuration.first").addClass("col-lg-10 col-md-10 col-sm-11 margin-0-auto"),$(".map-overlay").appendTo(".acf-map"),$(".gallery").addClass("row margin-0"),$("dl.gallery-item").addClass("col-lg-2 col-md-2 col-sm-2 col-xs-6"),$(".gallery br").remove(),$(".single-post #container").delay(1e3).fadeIn(500),$(".page-template-page-ensemble #container").delay(250).fadeIn(500),$(".page-template-page-about #container").delay(250).fadeIn(500),$(".page-template-page-media #container").delay(250).fadeIn(500),$(".page-template-page-weddings #container").delay(250).fadeIn(500),$(".single-performances #container").delay(240).fadeTo(480,1)});
//# sourceMappingURL=./scripts-min.js.map