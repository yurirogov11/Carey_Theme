<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Carey
 * @since Carey 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	

	<meta charset="utf-8">
    <meta name="description" content="Carey | Responsive HTML5 Template">
    <meta name="author" content="Carey">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/responsive.css">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page-wrapper">
	        <div id="header">  
	            <div>          
	                <div class="header-nav">                
	                    <div class="container pos-rel">
	                        <div id="side-nav">                        
	                            <div class="logo">   
	                                <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt=""></a>                            
	                            </div>
	                            <ul>
	                                <li class="quick-link">QUICK LINKS</li>
	                                <li><a href="#">Library</a></li>
	                                <li><a href="#">Timetable and Dates</a></li>
	                                <li><a href="#">Post Graduate School</a></li>
	                                <li><a href="#">international Students</a></li>
	                                <li><a href="#">Chinese Programme</a></li>
	                                <li><a href="#">Staff Directory</a></li>
	                                <li class="quick-link enquire-link">ENQUIRE NOW</li>
	                                <li class="quick-link enquire-link second-child">ENRol NOW</li>
	                            </ul>
	                        </div>
	                        <nav id="nav">
	                            <div class="header-top-nav">                            
	                                <div class="sub-nav">
	                                    <ul>
	                                        <li class="home"><a href="#"><i class="fa fa-home"></i></a></li>
	                                        <li><a href="#">Carey Online</a></li>
	                                        <li><a href="#">Libaray</a></li>
	                                        <li><a href="#">Alumn</a></li>
	                                        <li><a href="#">Donate</a></li>
	                                        
	                                        <li class="fb"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" /></a></li>
	                                        <li class="twitter"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /></a></li>                                    
	                                        
	                                        <li class="mini-search">                                        
	                                            <div class="main-nav-search-form">
	                                                <form method="get" role="search">
	                                                    <div class="search-box">
	                                                        <input type="text" id="s" name="s" value="">
	                                                        <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png" /></i></button>
	                                                    </div>
	                                                </form>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                </div>    
	                                <li class="visible-mobile">
	                                    <a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
	                                </li>
	                            </div>

	                            <ul id="main-nav" class="hidden-mobile">
	                                <li><a href="#">Prospective Students</a></li>
	                                <li><a href="#">Current Students</a></li>
	                                <li><a href="#">Study Options</a></li>
	                                <li><a href="#">About Carey</a></li>
	                            </ul>
	                        </nav>
	                    </div>
	                
	                    <div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
	                        <ul class="mobile-nav">
	                            <li class="menu-item-has-children">
	                                <span class="open-subnav"></span>
	                                <li><a href="#">Prospective Students</a></li>
	                                <li><a href="#">Current Students</a></li>
	                                <li><a href="#">Study Options</a></li>
	                                <li><a href="#">About Carey</a></li>
	                            </li>                   
	                        </ul>
	                    </div>
	                </div>
	                <?php if ( is_front_page()) : ?>						
	                <div id="slideshow">
	                    <div class="container pos-rel">
	                        <div class="home-slider">
	                            <ul>                    
	                                <li data-transition="notransition" data-slotamount="7" >                    
	                                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg"  alt="bg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
	                                </li>                                        
	                            </ul>
	                        </div>
	                    </div>    
	                </div> 
	            	<?php endif; ?>
	            </div>               
	        </div>       
