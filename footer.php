<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<footer id="footer_main">

<?php
	get_sidebar( 'footer' );
?>
		<div id="footer_nav">
			<ul>
				<?php 
					wp_list_pages('title_li=');
				?>
			</ul>
		</div>
		<div id="footer_contact">
			<h4>Contact</h4>
			<p>Send me a message or get in touch through other avenues.</p>
			<p><a class="iframe button round-rectangle" href="http://form.jotform.com/form/12073617758">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/icn_message.png" alt="" />
				<em>Send Message</em>
			</a>
			</p>
			<ul>
				<li><a href="#" class="button round-rectangle" title="Twitter" id="twitter">Twitter</a></li>
				<li><a href="#" class="button round-rectangle" title="Facebook" id="facebook">Facebook</a></li>
				<li><a href="#" class="button round-rectangle"  title="LinkedIn" id="linkedin">LinkedIn</a></li>
			</ul>
			
			<!--
			<p><a href="mailto:aaron@designliftoff.com">aaron@designliftoff.com</a></p>
			-->
		</div>

		<!--
		<div id="footer_form" class="contact_form">
			<form action="">
				<ul>
					<li><label for="name">Name</label><input type="text" id="name" /></li>
					<li><label for="email">Email</label><input type="text" id="email" /></li>
					<li><label for="message">Message</label><textarea id="message"></textarea></li>
					<li>
						<input type="submit" class="button" value="Send Message" />
					</li>
				</ul>
			</form>
		</div>
		-->
		
		<!--
		<div id="footer_form" class="contact_form">
			<a class="iframe button round-rectangle" href="http://form.jotform.com/form/12073617758">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/icn_message.png" alt="" />
				<p>Send Message</p>
			</a>
		</div>
		-->
		
		<div id="back_to_top_nav">
			<a href="#top" title="Back to Top" class="localLink btn_launch" id="btn_back_to_top">
				<span>Back to Top</span>
			</a>
		</div>
	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<script type="text/javascript">
	$(document).ready(function() {
		var faders = $('body.js').children('#top, #body_wrapper, #footer_main');
		i = 0;
	
		function fadeInEverything() {
			$(faders[i++]).fadeIn(500, arguments.callee);
		};
		fadeInEverything();
		
		$("a.iframe").fancybox({
			'width'				: 500,
			'height'			: 400,
			'transitionOut'		: 'fade',
			'type'				: 'iframe',
			'padding'			: 0,
			'scrolling'			: 'no',
			'centerOnScroll'	: true,
			'overlayShow'		: false
		});
	});
	
	$("a.localLink").click(function(event){
		//prevent the default action for the click event
		event.preventDefault();

		//get the full url - like mysitecom/index.htm#home
		var full_url = this.href;

		//split the url by # and get the anchor target name - home in mysitecom/index.htm#home
		var parts = full_url.split("#");
		var trgt = parts[1];

		//get the top offset of the target anchor
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;

		//goto that anchor by setting the body scroll top to anchor top
		$('html, body').animate({scrollTop:target_top}, 1000, 'swing');
	});
	
</script>

</body>
</html>