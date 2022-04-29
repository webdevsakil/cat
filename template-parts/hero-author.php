  <section class="cat-slider">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-md-2">
                  <div class="author d-md-flex align-items-center">
                      <div class="author-img px-5">
                          <!-- <img src="assets/img/author/author.webp" alt="author"> -->
                          <?php echo get_avatar(get_the_author_meta("ID"),get_the_ID()); ?>
                      </div>
                      <div class="author-meta px-5 px-md-0 mt-20 mt-md-0">
                          <div>
                              <h4 class="slider-title">
                                  <?php the_author(); ?>
                              </h4>
                          </div>
                          <div>
                              <p class="slider-desc">
                                  <?php  echo wpautop(get_the_author_meta('description')); ?>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>