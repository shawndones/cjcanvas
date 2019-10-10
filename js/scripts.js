
/* This is the main JS file, included on every page of the site.
 * Use Sprockets 'require's *only* in this file. To add functionality, create
 * a new file and 'require' it in here. Coffeescript files should have the
 * extension 'js.coffee'.
 */

// wait for document ready
jQuery(document).ready(function($) {

  $(".transcript-body").hide();
  $(".transcript-toggle").click( function() {
    if( $(this).hasClass("active") ) {
      $(this).removeClass("active");
      $(".transcript-body").hide();
    } else {
      $(this).siblings(".transcript-body").show();
      $(this).addClass("active");
    }
  });

  $('.nav-a-z li').click(function(){
    // console.log("hello thanos");
    $(this).parent().find('.active').removeClass('active');
	    $(this).addClass('active');
    });
    
  /***************************************
  *       Primary Navigation
  *  Uses Superfish https://superfish.joelbirch.design/options/ *
  // ***************************************/
  $('ul.sf-menu').superfish({
   
    delay:       1000,                            // one second delay on mouseout
    animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
    speed:       'fast',                          // faster animation speed
    autoArrows:  false,  // disable generation of arrow mark-up
  });

  var primaryNavList = $('.c-primary-nav__list');

  primaryNavList.clone().addClass("c-mobile-nav__list").removeClass("c-primary-nav__list sf-menu").appendTo(".c-primary-nav");
  $('.c-primary-nav__list > .menu-item-has-children > .sf-mega').siblings('a').append('<i class="icon-chevron"><svg><use xlink:href="#shape-chevron"/></svg></i>');


  $(".c-primary-nav__link__nav").removeClass()
  // Find mobile navigation items that contain submenus and add Overview and Back links.
  $(".c-mobile-nav__list > li > .sf-with-ul").each(function() {
    
    // Create Overview and Back links.
    // Get parent page link
    var navParentLink = $(this).attr("href");
    
    var li = "<li><a class='c-primary-nav__link back-btn' nohref>Back</a></li><li class='menu-item menu-item-type-post_type menu-item-object-page'><a class='link-overview c-primary-nav__link' href='"+navParentLink+"'>Overview</a></li>";

    // Append Overview and Back links.
    $(this).siblings(".sf-mega").prepend(li);


  });

  var navOpen = $('.nav-toggle-menu');
  var navListOpen = $('.c-mobile-nav__list');

  $('.c-mobile-nav__list > .menu-item-has-children > .sf-mega').siblings('a').append('<i class="icon-chevron"><svg><use xlink:href="#shape-chevron"/></svg></i>');

  navOpen.click(function() {
    var x = window.innerHeight;
    $('.sf-mega').css("max-height", x);
    if (! navOpen.hasClass("active")) {
      $(this).addClass('active');
      navListOpen.show();
    }
    else {
      navOpen.removeClass("active");
      navListOpen.hide();
      $(this).parents("body").removeClass("no-scroll");
      $('.menu-item-has-children.active').removeClass("active");
      navListOpen.removeClass("move");
    }
  });

  $( window ).resize(function() {
    navListOpen.hide();
    navOpen.removeClass('active');
  });

  $('.back-btn').click(function() {
    $(this).parents('.active').removeClass("active");
    $(this).parents('.c-mobile-nav__list').removeClass("move");
    $(this).parents("body").removeClass("no-scroll");
  });

  $(".c-mobile-nav__list > li.menu-item-has-children > a").click(function(e) {
  
    // stop link from propogating
    e.preventDefault();

    var x = $(this).parent();
    var z = $(this).parents('.c-mobile-nav__list');
    
    if (! x.hasClass("active")) {
      x.addClass("active");
      z.addClass("move");
      $(this).parents("body").addClass("no-scroll");
    }
  
    else {
      x.removeClass("active");
      z.removeClass("move");
      $(this).parents("body").removeClass("no-scroll");
    }
  });



  

 });


