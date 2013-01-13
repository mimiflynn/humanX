  </div></div>
  <?php wp_footer(); ?>
  <footer class="footer-widgets">
    <div class="wrapper">
      <div class="widgetContainer">
        <h3>Twitter widget</h3>
      </div>
      <div class="widgetContainer">
        <h3>contact info</h3>
      </div>
      <div class="widgetContainer social-media">
        <h3>Social Media</h3>
        <?php wp_nav_menu( array( 'theme_location' => 'social-media' ) ); ?>
      </div>
    </div>
  </footer>
</body>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-dropdown.js"></script>

  <!-- clean this up, we don't need to install all of these --> 
   <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-transition.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-alert.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-modal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-dropdown.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-scrollspy.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-tab.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-tooltip.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-popover.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-button.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-collapse.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-typeahead.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap-affix.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/holder/holder.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/google-code-prettify/prettify.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/application.js"></script>
</html>
