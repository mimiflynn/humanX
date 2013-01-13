<?php get_header(); ?>
      <div id="body" class="content">
        <div id="main">
          <?php
          echo category_description();
          $cur_cat_id = "category_" . get_cat_id( single_cat_title("",false) );
          $acf_image = get_field('image', $cur_cat_id);
          $image = wp_get_attachment_image_src( $acf_image, 'full' );
          ?>
          
          <div class="field"><img src="<?php echo $image[0]; ?>"></div>
          
            <iframe src="http://player.vimeo.com/video/57323126?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/57323126">Baby Shampoo Clip</a> from <a href="http://vimeo.com/donhardy">Don Hardy</a> on <a href="http://vimeo.com">Vimeo</a>.</p>


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
