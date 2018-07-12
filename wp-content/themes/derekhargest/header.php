<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-24574093-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-24574093-3');
  </script>

  <meta property="og:image" content="<?php echo bloginfo('template_directory'); ?>/assets/img/og-image3.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="500">
  <meta property="og:image:height" content="500">

  <meta property="og:description"        content="Freelance Web Developer working with agencies, start-ups, and large companies to bring great ideas to the web." />

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

  <script src="https://use.typekit.net/ykw0qbg.js"></script>
  <script src="https://unpkg.com/react@15/dist/react.js"></script>
  <script src="https://unpkg.com/react-dom@15/dist/react-dom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.24/browser.min.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/vendor/jquery.slicknav.min.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/vendor/featherlight.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/vendor/featherlight.gallery.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/assets/js/vendor/jquery.svgInject.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Domine:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>

<body <?php body_class(); ?>>
  <div class="wrap wrap--header">
    <header class="header" id="main-header">
      <div class="container">
        <div class="header__container">
          <a href="<?php echo get_site_url(); ?>" class="logo" id="logo">dh</a>
        </div>
      </div>
      <div id="menu-location">
        <!-- slicknav recreation of menu -->
      </div>
      <div class="container">
        <div class="main-navigation-wrap">
          <nav class="main-navigation mobile">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
          </nav>
          <a id="nav-toggle" href="#"><span></span></a>
        </div>
      </div>
    </header>
  </div>

  <script>
  		$('.main-navigation.mobile .menu').slicknav({
          prependTo: '#menu-location',
          label: '',
          nestedParentLinks: false,
          duration: 200,
          beforeOpen:	function(trigger){
            $( ".menu-location" ).fadeToggle(1000, "linear");
          },
          beforeClose:	function(trigger){
            $( ".main-navigation" ).fadeToggle(200, "linear");
          }
      });

      $('#nav-toggle').click(function(){
        $('.menu').slicknav('toggle');
      });

      document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
        this.classList.toggle( "active" );
        document.getElementById("logo").classList.toggle( "active" );
        document.getElementById("main-header").classList.toggle( "active" );
      });

      $.fn.extend({
  animateCss: function(animationName, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));

    this.addClass('animated ' + animationName).one(animationEnd, function() {
      $(this).removeClass('animated ' + animationName);

      if (typeof callback === 'function') callback();
    });

    return this;
  },
});

      $(document).ready(function(){
        $('#flip-test').hover( function(){
          $( this ).animateCss('flipInX');
        }
        )
      })

  </script>
