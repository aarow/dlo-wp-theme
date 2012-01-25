<?php
/**
 * Template Name: Home Page
 *
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

<section id="welcome">
	<h2>We build rockets...<br /> er rather websites</h2>
	<p><em>Design Lift-Off</em> is just a fancy store front for my design services. My name is <em>Aaron Neville</em> and I design web sites and graphics—and I love it. Yah, I know that the rocket analogy is a little corny, but all business analogies are. Besides, rockets are cool.</p>
	<a href="#process" title="Process" class="localLink btn_launch" id="btn_process">
		<em>Launch Sequence</em>
		<span>See The Process</span>
	</a>
</section><!-- end welcome -->

<section id="work" class="section_box">
	<div class="section_header">
		<h2>Previous Work</h2>
	</div>
	
	<div class="section_body">
		<p>
			<!-- link to work -->
			<a href="index.php?page_id=20" title="Previous Work">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_sample.png" alt="Previous Work" class="figure" />
			</a>
		</p>
	</div>
</section><!-- end work -->

<section id="process" class="section_box">
	<div class="section_header">
		<h2>The Process</h2>
		<p>A standard outline for the web design process</p>
	</div>
	<div class="section_body">
		<a href="index.php?page_id=83" class="process_link" title="The Process">
		<ul>
			<li class="process_step">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_process-1.png" alt="" class="figure" />
				<h3>Plan</h3>
				<p>Work with client to determine goals. Research audience, software, and resources. Document project, roles, copyright, and financial points.</p>
			</li>
			<li class="process_step">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_process-2.png" alt="" class="figure" />
				<h3>Design</h3>
				<p>Mock-up project elements and begin review and approval cycle. Prepare pages for development by implementing graphic designs with HTML and CSS.</p>
			</li>
			<li class="process_step">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_process-3.png" alt="" class="figure" />
				<h3>Develop</h3>
				<p>Modify pages as templates and load them in to a content management system (CMS). Fill CMS with content. Begin testing, verifying links and functionality.</p>
			</li>
			<li class="process_step">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/fig_process-4.png" alt="" class="figure" />
				<h3>Launch</h3>
				<p>Focus upon the finer details in the revision process. Ensure that site is live. Further testing and final checks. Present to client and assist with promotion as required.</p>
			</li>
		</ul>
		</a>
	</div>
	
</section><!-- end process -->

</section><!-- end body_wrapper -->

<?php get_footer(); ?>