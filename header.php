<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html dir="ltr" lang="en-US">

<head id="pbkchicago">
	<meta charset="utf-8">
<?php wp_head(); ?>

<?php $rCacheNum1 = rand( 000000000000,9999999999999999 ); ?>

<title><?php echo get_post_meta( $post->ID, 'Title Tag', true ); ?></title>

<meta name="title" content="<?php echo get_post_meta( $post->ID, 'Title Tag', true ); ?>">
<meta name="description" content="<?php echo get_post_meta( $post->ID, 'Title Tag', true ); ?>">
<meta name="keywords" content="<?php echo get_post_meta( $post->ID, 'Meta Keywords', true ); ?>">
<meta name="author" content="Swartwerk Media Design">
<meta name="Copyright" content="Copyright Swartwerk Media Design, Inc. 2012. All Rights Reserved.">
<meta name="revisit-after" content="10 days" />
<meta name="robots" content="follow,index" />

<link href='http://fonts.googleapis.com/css?family=Della+Respira|Archivo+Black' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/_image/favicon.ico">

<link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-touch-icon.png">

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>?cache=<?php echo($rCacheNum1);?>">


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script>
		jQuery(function()
		{
			// Create slideshow instances
			var $s = jQuery('.slideshow').slides(),

				// Access an instance API
				api = $s.eq(0).data('slides');

			// Transition select
			jQuery('select[name=transition]').on('change', function()
			{
				api.redraw( this.value );
			});
		});
</script>


/head>

<body <?php body_class(); ?>>

<div id="header">
<a href="/"><img src="/wp-content/themes/pbkchicago/_image/pbk-keychain.gif" id="keychain" width="90" height="126" alt="Phi Beta Kappa Keychain" /></a>

<div id="name-founded">

<h1><a href="/">Phi Beta Kappa Association<br />of the Chicago Area </a></h1>

<h5>Founded in 1938</h5>

</div> <!-- name-founded -->

<ul id="social-media">
<li><a href="http://www.facebook.com/pbkaca"><img src="/wp-content/themes/pbkchicago/_image/fb.png" width="32" height="32" alt="Facebook" /></a></li>
<li><a href="http://www.linkedin.com/groups/Phi-Beta-Kappa-Society-67341/about"><img src="/wp-content/themes/pbkchicago/_image/li.png" width="32" height="32" alt="LinkedIn" /></a></li>
</ul> <!-- social-media -->

<div id="search-container">


<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="sh" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		<input id="searchsubmitheader" type="image" alt="Search" src="/wp-content/themes/pbkchicago/_image/magnifying-glass.gif" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>">
</form>

<br><a href="http://www.pbkaca.org/index.php/log-in/" style="color: #fff;">Member log in</a>

</div> <!-- search-container-->

</div> <!-- header -->

<div id="prog-menu-wrapper">

<?php wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); ?>

<div id="prog-menu-toggle">LINK</div>


</div> <!--prog-menu-wrapper -->
