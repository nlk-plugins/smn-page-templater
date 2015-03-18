<?php
/**
 * SMN Legacy template header.
 *
 */
?><!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>

	<?php tha_head_top(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>css/wp_core.css">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>css/theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>css/pro.css">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>css/color_blue.css">

	<?php if ( is_admin_bar_showing() ) { ?>
	<style>
	#page { top: 32px; position: relative; }
	</style>
	<?php } ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo plugin_dir_url( __FILE__ ); ?>js/dropdown.js"></script>

	<?php tha_head_bottom(); ?>

	<?php //wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php tha_body_top(); ?>

<div id="page" class="fix">
	<div id="wrapper" class="fix">

		<!-- header -->
		<div id="header" class="fix">
			<a href="<?php echo get_bloginfo('url'); ?>">
				<img class="headerimage" src="<?php echo get_bloginfo('url'); ?>/images/smnheader05.jpg" width="727" height="64" alt="Save My Marriage System | Online Marriage Counseling Made Easy">
			</a>

			<!-- iphone icons -->
			<div class="icons"></div>
			<!-- /end iphone icons -->

			<div class="toplinks">
				<div class="askdanabutton">
					<a href="<?php echo get_bloginfo('url'); ?>/ask-dr-dana/"><img src="<?php echo get_bloginfo('url'); ?>/images/askdana03.jpg"></a>
				</div>


				<ul>
					<li><a href="<?php echo get_bloginfo('url'); ?>/login-2">MEMBER LOGIN</a></li>
				</ul>
			</div>
		</div><!-- /header -->

		<!-- nav -->
		<div id="nav" class="fix">
			<ul class="fix homebutton">
				<li class="page_item navfirst">
					<a class="home" href="<?php echo get_bloginfo('url'); ?>/" title="Home" style="background-image: url('http://cdn.strongmarriagenow.com/wp-content/uploads/home-icon-trans.png');">Home</a>
				</li>
			</ul>

			<ul id="menu-top-navigation" class="mnav dropdown fix">
				<li id="menu-item-673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-673"><a title="Who We Are - Dr. Dana Fillmore and Amy Barnhart" href="<?php echo get_bloginfo('url'); ?>/expert/" rel="nofollow">Who We Are</a></li>
				<li id="menu-item-42555" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42555"><a href="<?php echo get_bloginfo('url'); ?>/how-we-help/" rel="nofollow">How We Help</a></li> 
				<li id="menu-item-425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-425"><a href="<?php echo get_bloginfo('url'); ?>/success/" rel="nofollow">Success Stories</a></li> 
				<li id="menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-426"><a title="Marriage Counseling Alternative" href="<?php echo get_bloginfo('url'); ?>/coursedetails/" rel="nofollow">Marriage Solutions</a>
					<ul class="sub-menu">
						<li id="menu-item-3960" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3960"><a href="<?php echo get_bloginfo('url'); ?>/coursedetails/" rel="nofollow">Marriage Success Solutions</a></li> 
						<li id="menu-item-465" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-465"><a href="<?php echo get_bloginfo('url'); ?>/coursedetails/strongmarriagenowsystem/" rel="nofollow">StrongMarriageNow System</a></li> 
						<li id="menu-item-46555" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46555"><a href="<?php echo get_bloginfo('url'); ?>/coursedetails/spouse-wants-out/" rel="nofollow">Marriage Guide:  What To Do When Your Spouse Wants Out</a></li> 
						<li id="menu-item-3959" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3959"><a href="<?php echo get_bloginfo('url'); ?>/coursedetails/checked-out-wife-husband/" rel="nofollow">How To Get Your Partner Checked Back In</a></li> 
						<li id="menu-item-433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433"><a href="<?php echo get_bloginfo('url'); ?>/coursedetails/affairproof/" rel="nofollow">Affair-Proof Your Marriage System</a></li> 
						<li id="menu-item-433333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433333"><a href="<?php echo get_bloginfo('url'); ?>/communicate" rel="nofollow">Effective Communication for Couples</a></li> 
					</ul> 
				</li> 
				<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423"><a href="<?php echo get_bloginfo('url'); ?>/contactus/" rel="nofollow">Contact Us</a></li> 
				<li id="menu-item-446" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-446"><a href="<?php echo get_bloginfo('url'); ?>/blog/" rel="nofollow">Marriage Help Blog</a></li> 
			</ul>

			<style type="text/css">#nav ul#menu-main-nav,#nav ul.mnav{width:890px;}</style>

			<div class="clear"></div>
		</div><!-- /nav -->

