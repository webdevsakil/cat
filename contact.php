	<?php /* Template Name: Contact Page Template */ ?>
	<?php get_header(); ?>
	<main class="py-5  bg-gray">
		<section class="py-5">
			<div class="container div row">
				<div class="col-lg-10 offset-lg-1">
					<!-- contact form -->
					<div class="row">
						<div class="col-lg-6">
							<div>
								<div>
									<h2 class="page-title">
										<?php echo esc_html(get_theme_mod("contact-title-setting", "Let's talk about everything!")); ?>
									</h2>
								</div>
								<div class="desc my-3">
									<p>
									<?php the_content(); ?>
									</p>
								</div>
								<div>
									<?php if(has_post_thumbnail()){
										the_post_thumbnail("large",array("class"=>'img-fluid'));
									} ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-1">
							
								<?php 
								echo do_shortcode(get_field("contact_form"));
								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>




	<?php get_footer(); ?>