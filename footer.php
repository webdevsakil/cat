  <!-- footer -->
  <footer>
      <div class="container  ">
          <div class="row">
              <div class="col-md-6 col-lg-3">
                  <div class="footer-item">
                      <div class="footer-title">
                          <h2>
                              <?php echo esc_html(get_theme_mod("footer-left-title-setting"), "quick links"); ?>
                          </h2>
                      </div>
                      <nav class="footer-menu">
                          <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-one'
                            ));
                            ?>
                      </nav>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="footer-item">
                      <div class="footer-title">
                          <h2>
                              <?php echo esc_html(get_theme_mod("footer-two-title-setting", "Archives")); ?>
                          </h2>
                      </div>
                      <nav class="footer-menu">
                          <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-two'
                            ));
                            ?>
                      </nav>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="footer-item">
                      <div class="footer-title">
                          <h2>
                              <?php echo esc_html(get_theme_mod("footer-three-title-setting", "Social")); ?>
                          </h2>
                      </div>
                      <nav class="footer-menu">
                          <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-three'
                            ));
                            ?>
                      </nav>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="footer-item">
                      <div class="footer-title">
                          <h2>
                              <?php echo esc_html(get_theme_mod("footer-four-title-setting"), "Cat Blog") ?>
                          </h2>
                      </div>
                      <nav class="footer-menu">
                          <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-four'
                            ));
                            ?>
                      </nav>
                  </div>
              </div>
          </div>
          <div class="copyright">
              <div class="row">
                  <div class="col-12 ">
                      <div class="d-flex justify-content-center">
                          <div class="me-2">
                              <p class="border-end pr-15">
                                  <?php echo wp_kses_post(get_theme_mod("copyright-text-setting", "&copy;©Copyright Cat Blog 2022")) ?>
                              </p>
                          </div>
                          <div>
                              <p class="text-capitalize">
                                  <?php echo esc_html(get_theme_mod("copyright-credit-setting", "site template by")) ?>
                                  <a href="
                                  <?php echo esc_url(get_theme_mod("copyright-author-url-setting", "#")); ?> " class="text-white" target="_blank">
                                      <?php echo esc_html(get_theme_mod("copyright-author-setting", "PlayWithCode")); ?>
                                  </a>
                              </p>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <?php wp_footer(); ?>
  </body>

  </html>