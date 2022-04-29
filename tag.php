<?php get_header(); ?>
<main>
    <!-- slider -->
    <?php get_template_part("./template-parts/hero-tag"); ?>
    <!-- main content -->
    <?php
    $cat_col = "col-lg-12";
    if (is_active_sidebar("sidebar-1") || is_active_sidebar("sidebar-2") || is_active_sidebar("sidebar3")) {
        $cat_col = "col-lg-9";
    }

    ?>
    <section class="mt-80 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12 <?php echo $cat_col; ?> ">
                    <!-- posts -->
                    <div <?php post_class(); ?>>
                        <div class="row g-2">
                            <!-- single post -->
                            <?php while (have_posts()) :
                                the_post();
                            ?>
                                <article class="col-lg-4 col-md-6">
                                    <div class="single-post shadow-lg rounded-1  p-3 pb-4">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="thumbnail">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail("medium", array("class" => "img-fluid")); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="post-content mb-20 mt-20">
                                            <div class="post-title">
                                                <a href="<?php the_permalink(); ?>">
                                                    <h3><?php the_title(); ?></h3>
                                                </a>
                                            </div>
                                            <div class="post-excerpt">
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="<?php the_permalink(); ?>" class="btn-cat">
                                                <?php _e("Read More", 'cat'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>


                        </div>
                    </div>
                    <!-- pagination -->
                    <div class="row">
                        <div class="col-12 mt-70 ">
                            <div class="pagination">

                                <?php
                                cat_pagination();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- sidebar -->
                <?php if (is_active_sidebar("sidebar-1") || is_active_sidebar("sidebar-2") || is_active_sidebar("sidebar3")) : ?>
                    <div class="col-12 col-lg-3">
                        <?php get_sidebar(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>