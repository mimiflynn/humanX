  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'hx' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<h3 class="entry-format"><?php _e( 'Featured', 'hx' ); ?></h3>
				</hgroup>
			<?php else : ?>
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'hx' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<?
			$acf_image = get_field('image');
      if ($acf_image) { ?>
			<div class="field"><img src="<?php the_field('image'); ?>"></div>
        <?php
      }
			?>
			<div class="field">Price: $<?php the_field('price'); ?></div>
			<div class="field">Rating: <?php the_field('rating'); ?></div>
			<?
      $acf_url = get_field('purchase_url');
      if ($acf_url) { ?>
			<div class="field"><a href="<?php the_field('purchase_url'); ?>">Buy Online</a></div>
			  <?php
      }
      ?>
		</div><!-- .entry-summary -->
  </article><!-- #post-<?php the_ID(); ?> -->
