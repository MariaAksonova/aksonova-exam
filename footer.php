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
					<p class="phone"><?php echo get_theme_mod('phone'); ?></p>
					<p class="address"><?php echo get_theme_mod('address'); ?></p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d10378.138724574892!2d32.0790955!3d49.4366106!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1491638372679" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
