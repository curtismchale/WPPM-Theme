<?php
/**
 * Footer template file
 *
 * The default footer for the theme. Is called by get_footer in other template files
 *
 * @package WPPM Theme
 * @copyright Copyright (C) 2013 Curtis McHale
 * @license http://www.gnu.org/copyleft/gpl.html GPL
 *
 * @since 0.1
 */
?>
<div class="clear"></div>

		<footer>

			<p class="copyright">&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?></p>

			<p class="wordpress-info"><?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a> | <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.</p>

		</footer><!-- /footer -->

	<?php wp_footer(); ?>

	</body>

</html>