<?php use Roots\Sage\Titles; ?>
<!-- <php the_content(); ?> -->
<!-- <php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>-->

<div class ="section">
  <div class="container-fluid">
    <div class="row">
      <div class="container gsr-page">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        $image = $image[0]; ?>
        <?php else :
        $image = get_bloginfo( 'stylesheet_directory') . '/images/gsr-splash.jpg'; ?>
        <?php endif; ?>
        <!--img src="<= get_template_directory_uri(); ?>/dist/images/gsr-splash.jpg" width="100%" > -->
        <div class="col-md-5 gsr-page-title" style="background: url(<?php echo $image; ?>) no-repeat center center; background-size: contain;")>
          <h1><?= Titles\title(); ?></h1>
        </div>
        <div class="col-md-7 gsr-page-copy">
            <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
