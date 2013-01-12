<?php get_header(); ?>
      <div id="body" class="content">
        <div id="main">
          <section class="pane" id="single">
            <div class="posts">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php get_template_part( 'content-single', get_post_format() ); ?>
            <?php endwhile; else: ?>
            </div>
            <div class="warning">
              <p>Sorry, but you are looking for something that isn't here.</p>
            <?php endif; ?>
            </div>
            <aside>
              <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Blog Sidebar') ) : else : ?>
              <?php endif; ?>
            </aside>
          </section>
        </div>
      </div>
<?php get_footer(); ?>
