<div class="container-fluid gsr-float">
  <div class="container">
    <div class="row gsr-brand">
      <div class="col-md-6 gsr-logo">
        <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/gsr_logo_100.png" width="100%"></a>
      </div>


    </div>
    <div class="row">
      <header class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <nav class="collapse navbar-collapse" role="navigation">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
          endif;
          ?>
          <div class="col-md-12 gsr-social">
            <a href=""><i class="fa fa-rss" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
        </nav>
      </header>
    </div>
  </div>
</div>
