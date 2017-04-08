<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aksonova-exam
 */

get_header(); ?>

	<div class="page-title">
		<div class="container">
			<h2>Our Blog</h2>
		</div>
	</div>
	<div class="container main">
	<div id="primary" class="content-area col-md-8 col-sm-12">
		<main id="main" class="site-main" role="main">
			<div class="posts row">
				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?>
						<article class="post col-xs-12">
							<div class="single-post col-xs-12">
								<h2>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<div class="content col-xs-12">
									<?php the_content(); ?>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p>No posts found</p>
				<?php endif; ?>
			</div>
			<div class="comments">
				<div class="col-xs-12">
					<?php comments_template(); ?>
				</div>
			</div>
		</main>
	</div>

<?php
get_sidebar();
get_footer();
