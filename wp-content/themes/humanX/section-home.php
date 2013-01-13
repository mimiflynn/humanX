          <section class="pane home" id="products">
           <hr>
            <article>
              <header>
                <h2><span>3. Make The Switch</span></h2>
                <p class="description">Choose From Our List of Top Rated Products</p>
              </header>
              <div class="main-content">
                
                <div class="row">
                
                  <?php 
                  $categories = get_categories(); 
                  foreach ($categories as $category) {
                    $cur_cat_id = "category_" . $category->cat_ID;
                    $acf_image = get_field('image', $cur_cat_id);
                    $image = wp_get_attachment_image_src( $acf_image );
                    ?>
                    <div class="product-category span6">
                      <a href="?cat=<?php echo $category->cat_ID ?>"><img src="<?php echo $image[0]; ?>"></a>
                      <h2><a href="?cat=<?php echo $category->cat_ID ?>"><?php echo $category->name ?></a></h2>
                    </div>
                  <?php
                  }
                  ?>
                 
                <div><!-- .row --> 

              </div>
            </article>
          </section>
