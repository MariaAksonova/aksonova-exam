<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aksonova-exam
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<div class="container">
			<div class="main-footer row">
				<div class="site-description col-md-6 col-xs-12">
					<h2>Contact Us:</h2>
					<p>It is a long established fact that a reader will be distracted by
						the readable content of a page when looking at its layout.</p>
					<span class="phone"><?php echo get_theme_mod('phone'); ?></span>
					<span class="address"><?php echo get_theme_mod('address'); ?></span>
				</div>
				<div class="contact-form col-md-6 col-xs-12">
					<?php $recent = new WP_Query("pagename=footer-form"); while($recent->have_posts()) : $recent->the_post();?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="logo-footer">
		<?php the_custom_logo(); ?>
	</div>
	<div class="last-footer">
		<p>© 2015  All Rights Reserved.</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
