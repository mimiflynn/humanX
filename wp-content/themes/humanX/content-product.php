

 
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-summary row">
			<div class="span2 offset1">
				<?php //the_excerpt(); ?>
				<?
				$acf_image = get_field('image');
			      
			      $image = wp_get_attachment_image_src( $acf_image, 'full' );
			      
			      if ($acf_image) { ?>

			      	 
						<div class="field field-image"><img src="<?php echo $image[0]; ?>"></div>
					 
					

			        <?php
			      }
				?>
			</div>

			 
			 <div class="span8">

				<?php if ( is_sticky() ) : ?>
					<hgroup>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'hx' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<h3 class="entry-format"><?php _e( 'Featured', 'hx' ); ?></h3>
					</hgroup>
				<?php else : ?>
				<h3 class="entry-title"><?php the_title(); ?></h3>
				<?php endif; ?>



				<div class="field">Price: $<?php the_field('price'); ?></div>
				<div class="field">Rating: <?php the_field('rating'); ?></div>


						<?
			      $acf_url = get_field('purchase_url');


			      if ($acf_url) { ?>
						<div class="field"><a href="<?php the_field('purchase_url'); ?>" target="_new" class="btn btn-info">Buy This Safe Product Online</a>
						<a href="<?php the_field('purchase_url'); ?>" target="_new" class="btn">Share On Facebook</a>
					</div>
						  <?php
			      }
			      ?>
	      	 </div>
		</div><!-- .entry-summary -->
  </article><!-- #post-<?php the_ID(); ?> -->
    <hr>
