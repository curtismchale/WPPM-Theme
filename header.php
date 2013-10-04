<?php
/**
 * Header file
 *
 * Default header file for the theme. Rendered by get_header.php
 *
 * @package WPPM Theme
 * @copyright Copyright (C) 2013 Curtis McHale
 * @license http://www.gnu.org/copyleft/gpl.html GPL
 *
 * @since 0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<title><?php wp_title(); ?></title>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />

	<link rel="image_src" link="<?php echo get_stylesheet_directory_uri(); ?>/screenshot.png" />

	<link rel="icon" type="image/png" link="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	<?php }?>

	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

</head>

<body <?php body_class(); ?> >