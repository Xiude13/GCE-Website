<?php
/* 
Template Name: Form
*/
?>
<?php get_header(); ?>
<?php get_template_part('includes/section','nav');?>

<!-- App Form Hero -->
	<section class="fb_area">
		<div class="fbcontainer">
			<div class="info"><h3>Please download and complete the form specific to your municipality, then forward it via email to ssegapps@greencapeengineering.com. Should your municipality not be listed, please fill out the form below.</h3></div>
				<div class="fbuttons">
					<div class="fb1">
						<a href="<?php echo get_template_directory_uri() . '/files/City of Cape Town Application Form.pdf'; ?>"><button>City of Cape Town</button></a>
					</div>
					<div class="fb2">
					<a href="<?php echo get_template_directory_uri() . '/files/Swartland-Municipality-Embedded-Generation-Application-Form.pdf'; ?>"><button>Swartland</button></a>
					</div>
					<div class="fb3">
					<a href="<?php echo get_template_directory_uri() . '/files/Stellenbosch-Municipality-Embedded-Generation-Application-Form.pdf'; ?>"><button>Stellenbosch</button></a>
					</div>
					<div class="fb4">
					<a href="<?php echo get_template_directory_uri() . '/files/Overstrand-Municipality-Embedded-Generation-Application-Form.pdf'; ?>"><button>Overstrand</button></a>
					</div>
					<div class="fb5">
					<a href="<?php echo get_template_directory_uri() . '/files/Eskom Application Form.pdf'; ?>"><button>Eskom</button></a>
					</div>
					<div class="fb6">
					<!-- <a href="<?php echo get_template_directory_uri() . ''; ?>"><button>Other</button></a> -->
				</div>
			</div>
			<div class="sseg-form-input">
				<?php
					if (have_posts()) {
						// Display content for posts
						while (have_posts()) {
							the_post();
							// Display post content
							
							the_content();
						}
					} else {
						// Display content for no posts
						echo '<p>No posts are available.</p>';
					}
				?>
			</div>
		</div>
	</section>
<!-- End App Form Hero -->



<?php get_footer(); ?>