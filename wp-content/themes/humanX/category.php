<?php get_header(); ?>
    
          <?php
          $cur_cat_id = "category_" . get_cat_id( single_cat_title("",false) );
          $acf_image = get_field('image', $cur_cat_id);
          $image = wp_get_attachment_image_src( $acf_image, 'full' );
          ?>
          
          

          <div class="category-hero row">

            <div class="span2 icon">
              <div class="field"><img src="<?php echo $image[0]; ?>"></div>
            </div>

            <div class="span8">
              <h1><?php single_cat_title(); ?></h1>
              <p><?php echo category_description(); ?></p>
            </div>

          </div><!-- .category-hero -->



          <section class="pane" id="category">
            <div class="posts">
              <div class="row">
                

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <div class="span12">
                      <?php get_template_part( 'content', 'product' ); ?>
                    </div>
                  

                <?php endwhile; else: ?>
             
                    <div class="warning">
                      <p>Sorry, but you are looking for something that isn't here.</p>
                    </div>

                <?php endif; ?>
              
               
              </div><!-- .row --> 
            </div><!-- .posts --> 

          </section>


      </div><!-- .pane --> 



<?php get_footer(); ?>
