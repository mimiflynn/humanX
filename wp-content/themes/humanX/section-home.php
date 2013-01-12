          <section class="pane home">
          <?php
            $home_id = 17;
            $home_page = get_post($home_id);
          ?>
            <article>
              <header>
                <h2><?php echo $home_page->post_title; ?></h2>
              </header>
              <div class="entry-content">
                <?php echo apply_filters('the_content', $home_page->post_content); ?>
              </div>
            </article>
          </section>
