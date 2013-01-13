<?php get_header(); ?>
      <div id="body" class="content">
        <div id="main">
          <?php
          echo category_description();
          $cur_cat_id = "category_" . get_cat_id( single_cat_title("",false) );
          $acf_image = get_field('image', $cur_cat_id);
          $image = wp_get_attachment_image_src( $acf_image );
          ?>
          
          <div class="field"><img src="<?php echo $image[0]; ?>"></div>
          
          <section class="pane" id="category">
            <div class="posts">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php get_template_part( 'content', 'product' ); ?>
            <?php endwhile; else: ?>
            </div>
            <div class="warning">
              <p>Sorry, but you are looking for something that isn't here.</p>
            <?php endif; ?>
            </div>
          </section>
        </div>
      </div>
<?php get_footer(); ?>
