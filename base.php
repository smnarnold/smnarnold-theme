<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html ⚡ <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div class="page-wrapper">
      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
      
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>

      <main class="main">
        <?php include Wrapper\template_path(); ?>
      </main><!-- /.main -->
      
      <?php if (Setup\display_sidebar()) : ?>
        <aside class="sidebar">
          <?php include Wrapper\sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>

      <?php if (Setup\display_footer()) :
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      endif; ?>
    </div>

    <amp-analytics type="googleanalytics">
      <script type="application/json">
        {
          "vars": {
            "account": "UA-37943713-5"
          },
          "triggers": {
            "trackPageview": {
              "on": "visible",
              "request": "pageview"
            }
          }
        }
      </script>
    </amp-analytics>
    
    <?php 
      get_template_part('templates/admin-script');
    ?>
  </body>
</html>
