<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aksonova-exam
 */

get_header(); ?>

	<div class="page-title">
		<h2>Blog Posts</h2>
	</div>
	<div class="container main">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="posts row col-md-8 col-sm-12">
				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?>
						<article class="post col-md-6 col-xs-12">
							<div class="post-content">
								<div class="img-wrap">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full', 'class=img-responsive'); ?>
									</a>
								</div>
								<h2>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<div class="content">
									<?php the_excerpt(); ?>
								</div>
								<div class="info start-xs">
									<span class="time"><?php the_time('d,m,Y'); ?></span>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p>No posts found</p>
				<?php endif; ?>
				<div class="col-xs-12">
					<?php the_posts_pagination(['mid_size' => 2]);?>
				</div>
			</div>
		</main>
	</div>

<?php
get_sidebar();
get_footer();
