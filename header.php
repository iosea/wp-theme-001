<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wp-theme-001
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- in wp-head enthalten
		<title>--><?php //wp_title(); ?><!--</title>
	-->

	<!-- Meta -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Styles -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,200,300,400,600,700'>
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/less/style.less" />

	<script type='text/javascript'>
		less = {
			// env : 'development', // or 'production'
			//Wähle production, um den Fehlerdebugger zu deaktivieren
			env : 'production', // or 'production'
			async : false, // load imports async
			fileAsync : false, // load imports async when in a page under
			// a file protocol
			poll : 1000, // when in watch mode, time in ms between polls
			functions : {}, // user functions, keyed by name
			dumpLineNumbers : 'comments', // or 'mediaQuery' or 'all'
			relativeUrls : false, // whether to adjust url's to be relative
			// if false, url's are already relative to the
			// entry less file
			rootpath : ''// a path to add on to the start of every url
			//resource
		};
	</script>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a id="top" name="top"/>
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wp-theme-001' ); ?></a>

	<!-- HEADER -->
	<div class="header">


		<div class="navbar navbar-default" role="navigation">
			<div class="container-fluid">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo get_option('home'); ?>" style="font-size: 30px; text-decoration: none;">
                        <?php //bloginfo('name'); ?>
                            <span style="font-weight: 600;">Andre</span><span style="font-weight: 200;">Seidel</span>
                    </a>
                    <br/>
                    <span style="font-weight: 400"><?php bloginfo('description'); ?></span>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<?php wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'menu'            => '',
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'nav navbar-nav navbar-right main-nav',
                    'menu_id'         => '321',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                ) ); ?>

			</div>
		</div>
	</div>

