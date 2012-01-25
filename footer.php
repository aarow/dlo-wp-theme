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
		<div id="footer_contact">
			<ul>
				<li><a href="https://twitter.com/#!/mrmustarde" class="button round-rectangle btn_footer" title="Twitter" id="twitter"><img src="<?php echo get_bloginfo('template_directory');?>/images/icn_twitter.png" alt="" /><span>Twitter</span></a></li>
				<li><a href="http://www.facebook.com/profile.php?id=100001090854741" class="button round-rectangle btn_footer" title="Facebook" id="facebook"><img src="<?php echo get_bloginfo('template_directory');?>/images/icn_facebook.png" alt="" /><span>Facebook</span></a></li>
				<li><a href="http://www.linkedin.com/in/aneville" class="button round-rectangle btn_footer"  title="LinkedIn" id="linkedin"><img src="<?php echo get_bloginfo('template_directory');?>/images/icn_linkedin.png" alt="" /><span>LinkedIn</span></a></li>
			</ul>
		</div>
		
		
		<div class="footer_bottom">
			<div id="back_to_top_nav">
				<a href="#top" title="Back to Top" class="localLink btn_launch" id="btn_back_to_top">
					<span>Back to Top</span>
				</a>
			</div>
			<div class="copyright">
				<span>&#169; 2012 Design Lift-Off</span>
			</div>
			<div id="footer_nav">
				<ul>
					<?php 
						wp_list_pages('title_li=');
					?>
				</ul>
			</div>
		</div>
	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		var faders = $('body.js').children('#top, #body_wrapper, #footer_main');
		i = 0;
	
		function fadeInEverything() {
			$(faders[i++]).fadeIn(500, arguments.callee);
		};
		fadeInEverything();
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