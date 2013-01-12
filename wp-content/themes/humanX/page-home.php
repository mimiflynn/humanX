<?php get_header(); ?>
      <div id="body" class="content">
        <div id="main">
        <?php get_template_part('section', 'home'); ?>
        <?php get_template_part('section', 'products'); ?>
        <?php get_template_part('section', 'about'); ?>
        <?php get_template_part('section', 'jobs'); ?>
        <?php get_template_part('section', 'contact'); ?>
        <?php get_template_part('section', 'blog'); ?>
        </div>
      </div>
<?php get_footer(); ?>
