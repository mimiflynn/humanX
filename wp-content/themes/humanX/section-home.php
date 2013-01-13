



          <section class="pane home" id="products">
           
            <article>
              <header>
                <h2><span>Make The Switch</span></h2>
                <p class="description">Choose From Our List of Top Rated Products</p>
              </header>
              <div class="main-content">
<<<<<<< HEAD
                
                <div class="row">
                
                  <?php 
                  $categories = get_categories(array('hide_empty' => 0)); 
                  foreach ($categories as $category) {
                    $cur_cat_id = "category_" . $category->cat_ID;
                    $acf_image = get_field('image', $cur_cat_id);
                    $image = wp_get_attachment_image_src( $acf_image, 'full' );
                    ?>
                    <div class="product-category span6 <?php echo $category->slug ?>">
                      <a href="?cat=<?php echo $category->cat_ID ?>"><img src="<?php echo $image[0]; ?>"></a>
                      <h2><a href="?cat=<?php echo $category->cat_ID ?>"><?php echo $category->name ?></a></h2>
                    </div>
                  <?php
                  }
                  ?>
                 
                <div><!-- .row --> 
=======



              <div class="row">
                <div class="span6">
                  <div class="product-category">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/deodorant.jpg"></a>
                    <h2><a href="#">Deodorant</a></h2>
                  </div>
                  <div class="product-category">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shampoo.jpg"></a>
                    <h2><a href="#">Shampoo</a></h2>
                  </div>
                  <div class="product-category">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shaving-cream.jpg"></a>
                    <h2><a href="#">Shaving Cream</a></h2>
                  </div>
                </div><!-- .span --> 
              <div><!-- .row --> 


              <div class="row">
                <div class="span6">
                  <div class="product-category">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cleaner.jpg"></a>
                    <h2><a href="#">Multipurpose Cleaner</a></h2>
                  </div>
                  <div class="product-category">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/detergent.jpg"></a>
                    <h2><a href="#">Detergent</a></h2>
                  </div>
                </div><!-- .span --> 
              <div><!-- .row --> 

>>>>>>> b7332894982ce50979973f7377d0605cde2eabcc

              </div>
            </article>
          </section>
