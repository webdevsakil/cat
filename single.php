<?php get_header(); ?>
<main>

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
<?php while(have_posts()):
    the_post();
?>
                            <article>
                                <div class="single-post-title">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="post-meta">
                                    <ul class="d-flex justify-content-center">
                                        <li class="date"><?php echo esc_html(get_the_date()); ?></li>
                                        <li class="text">in</li>
                                        <li class="cats">

                                            <?php the_category(); ?>
                                        </li>
                                        <li>
                                            <?php the_author_posts_link(); ?>
                                        </li>
                                    </ul>
                                </div>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnails mt-5 mb-5">
                                        <?php
                                        the_post_thumbnail("large", array("class" => 'img-fluid'));
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <!-- post content -->
                                <div class="px-2">
                                    <?php the_content(); ?>
                                </div>
                                <div class="pages mt-35 ms-2">

                                    <?php wp_link_pages(); ?>
                                </div>
                                <!-- post tags -->
                                <div class="ms-1">
                                    <div class="post-tags d-flex align-items-center">
                                        <div>
                                            <span><?php _e("Post Tags: ", "cat"); ?></span>
                                        </div>
                                        <div class="tags">
                                            <?php the_tags("", "", ""); ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- author meta -->
                                <div class="mt-70 d-flex align-items-center author-meta border p-3">
                                    <div>
                                        <!-- <img src="assets/img/author/author.webp" alt="image"> -->
                                        <?php echo get_avatar(get_the_author_meta("ID"), get_the_ID()); ?>
                                    </div>
                                    <div class="ms-4">
                                        <h2>
                                            
                                            <?php
                                            $cat_author_id = get_the_author_meta('ID');
                                            echo get_the_author_meta("display_name",$cat_author_id); ?>
                                        </h2>
                                        <p><?php echo get_the_author_meta("description",$cat_author_id); ?></p>
                                    </div>
                                </div>
                                <!-- post pagination -->
                                <div class="d-flex  mt-50 post-pagination">
                                    <div class="me-5">
                                        <span class="prev-text">
                                            <?php _e("previous post", "cat"); ?>
                                        </span>

                                        <h4 class="text-capitalize">
                                            <?php previous_post_link(); ?>
                                        </h4>

                                    </div>
                                    <div class="ms-5">
                                        <span class="next-text">
                                            <?php _e("next post", 'cat'); ?>
                                        </span>

                                        <h4 class="text-capitalize">
                                            <?php next_post_link(); ?>
                                        </h4>

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