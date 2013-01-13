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
</html>
