          <section class="pane about team">
          <?php
            $about_id = 5;
            $about_page = get_post($about_id);
          ?>
            <article>
              <header>
                <h2><?php echo $about_page->post_title; ?></h2>
              </header>
              <div class="entry-content">
                <?php echo apply_filters('the_content', $about_page->post_content); ?>
              </div>
              <div class="team">
                <ul>
                <?php $leadership = new WP_Query(array('post_type' => 'bio', 'bio_tax' => 'leadership', 'orderby' => 'menu_order', 'posts_per_page' => 10)); ?>
                  <?php if (have_posts()) : while ( $leadership->have_posts() ) : $leadership->the_post(); ?>
                  <li class="leadership"> 
                    <img src="http://api.twitter.com/1/users/profile_image?screen_name=<?php echo get_post_meta( $id, 'bio_twitter', true ) ?>&size=normal" />
                    <div class="employee-info">
                      <div class="employee-name">
                        <?php the_title(); ?>
                        <span class='twitter-name'>@<a href="http://twitter.com/#!/<?php echo get_post_meta( $id, 'bio_twitter', true ); ?>" target="_blank"><?php echo get_post_meta( $id, 'bio_twitter', true ); ?></a></span>
                      </div>
                      <div class='job-title'><?php echo get_post_meta( $id, 'bio_title', true ); ?></div>
                      <div class="description"><?php the_content(); ?></div>
                    </div>
                  </li><!-- end Leadership -->
                  <?php endwhile; ?>
                  <?php endif; ?>
                  <?php $bio = new WP_Query(array('post_type' => 'bio', 'bio_tax' => 'specialists', 'orderby' => 'menu_order', 'posts_per_page' => 100)); ?>
                  <?php if (have_posts()) : while ( $bio->have_posts() ) : $bio->the_post(); ?>
                  <li class="specialists"> 
                    <img src="http://api.twitter.com/1/users/profile_image?screen_name=<?php echo get_post_meta( $id, 'bio_twitter', true ) ?>&size=normal" />
                    <div class="employee-info">
                      <div class="employee-name"><?php the_title(); ?></div>
                      <span class='twitter-name'>@<a href="http://twitter.com/#!/<?php echo get_post_meta( $id, 'bio_twitter', true ); ?>" target="_blank"><?php echo get_post_meta( $id, 'bio_twitter', true ); ?></a></span>
                    </div>
                  </li><!-- .entry-content -->
              <?php endwhile; ?>
                </ul>
              <?php else: ?>
              </div>
              <div class="warning">
                <p>Sorry, there are no Leadership at this time.</p>
              <?php endif; ?>
              </div>
            </article>
          </section>
