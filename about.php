	<?php /* Template Name: About Template */ ?>
	<?php get_header(); ?>

	<main class="py-4 my-4">
	    <section class="px-lg-2">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-10 offset-lg-1">
	                    <div>
	                        <div>
	                            <h2 class="text-center page-title"><?php the_title(); ?></h2>
	                        </div>

	                        <?php if (has_post_thumbnail()) : ?>
	                            <div class="my-5">
	                                <?php the_post_thumbnail("large", array("class" => "img-fluid")); ?>
	                            </div>
	                        <?php endif; ?>

	                        <!-- conent -->
	                        <div class="content">
	                            <?php the_content(); ?>
	                        </div>
	                    </div>
	                </div>

	            </div>
	        </div>

	        </div>
	    </section>
	    <section>
	        <!-- widgets area -->
	        <div class="container">
	            <div class="row mt-30 px-lg-5 ">
	                <div class="col-lg-10 offset-lg-1">
	                    <div class="row">
	                        <div class="col-md-6">
	                            <?php
                                if (is_active_sidebar("about-text-one-widget")) {
                                    dynamic_sidebar("about-text-one-widget");
                                }
                                ?>
	                        </div>
	                        <div class="col-md-6">
	                            <?php
                                if (is_active_sidebar("about-text-two-widget")) {
                                    dynamic_sidebar("about-text-two-widget");
                                }
                                ?>
	                        </div>
	                        <div class="col-md-6">
	                            <?php
                                if (is_active_sidebar("about-text-three-widget")) {
                                    dynamic_sidebar("about-text-three-widget");
                                }
                                ?>
	                        </div>
	                        <div class="col-md-6">
	                            <?php
                                if (is_active_sidebar("about-text-four-widget")) {
                                    dynamic_sidebar("about-text-four-widget");
                                }
                                ?>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

	</main>
	<!-- main content -->



	<?php get_footer(); ?>