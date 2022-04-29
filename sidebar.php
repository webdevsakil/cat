  <aside>
      <!-- categories widget -->
      <div class=" shadow-lg p-3 ">
          <?php if (is_active_sidebar("sidebar-1")) {
                dynamic_sidebar("sidebar-1");
            } ?>
      </div>

      <!-- tag widget -->
      <div class="latest-post shadow-lg p-3  mt-4 ">
     
          <?php 
          if(is_active_sidebar("sidebar-3")){
              dynamic_sidebar("sidebar-3");
          }
          ?>
      </div>
      <!-- Archive widget -->
      <div class="archive-widget shadow-lg p-3  mt-4 ">
          <?php if(is_active_sidebar("sidebar-2")){
              dynamic_sidebar("sidebar-2");
          } ?>
      </div>
  </aside>