 <section class="cat-slider">
     <div class="container">
         <div class="row">
             <div class="col-md-8 ">
                 <div>
                     <span><?php _e("Tags", "cat"); ?></span>
                     <h2 class="slider-title text-capitalize">
                         <?php single_cat_title(); ?>
                     </h2>
                     <div class="slider-subtitle  ">
                         <?php echo category_description(); ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>