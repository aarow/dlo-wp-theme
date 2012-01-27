<?php
/**
 *
  * Template Name: Portfolio Page
 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<section id="body_wrapper">

<section id="content">
<article class="work">
	<h2>Previous Work</h2>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<ul class="product_list shadow-box-container">
			<?php
				$args = array( 'post_type' => 'portfolio-item' );
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post); 
			?> 
				<li class="portfolio-list-item clearfix">
					<header>
						<a href="<?php print_custom_field('link'); ?>">
							<div class="portfolio-list-thumb">
								<?php print_custom_field('image:to_image_tag','thumbnail'); ?>
							</div>
							<h3><?php the_title(); ?></h3>
							</h3>
						</a>
					</header>
					<section class="portfolio-list-content">
						<?php the_content(); ?>
					</section>
				</li>
			<?php endforeach; ?>
		</ul>
<?php endwhile; // end of the loop. ?>
</article>
</section>  <!-- end content -->

<aside id="sidebar">
<?php get_sidebar(); ?>
</aside>

</section>


<?php get_footer(); ?>