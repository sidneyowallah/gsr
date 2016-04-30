<!-- <php get_template_part( 'header'); ?> -->

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$image = $image[0]; ?>
<?php else :
$image = get_bloginfo( 'stylesheet_directory') . '/images/gsr-splash.jpg'; ?>
<?php endif; ?>

<div class ="section">
  <div class="container-fluid gsr-callToAction">
    <div class="row ">
      <div class="container rmv-col-pdg">

        <div class="col-lg-7 col-md-12 gsr-callToAction-right">
        <div class="gsr-callToAction-image" style="background: url(<?php echo $image; ?>) no-repeat center center; background-size: contain;")></div>

        </div>
        <div class=" col-lg-5 col-md-12 col-sm-12 gsr-callToAction-left">
          <div class="row ">
            <div class="col-lg-12 col-md-12 gsr-callToAction-copy">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 gsr-callToAction-featured">
              <h2>Featured Interview</h2>
              <div class="gsr-callToAction-featuredPodcast center-block text-center" style="background: url('http://image.shutterstock.com/display_pic_with_logo/2991382/313286324/stock-vector-modern-flat-video-player-interface-vector-illustration-313286324.jpg') no-repeat center center; background-size: contain;">

                <?php $featured_interview = get_field( "featured_interview" ); ?>
                <?php if( $featured_interview ) {echo $featured_interview;} else { echo 'Featured Interview'; }  ?>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class ="section">
  <div class="container-fluid gsr-callToAction-border">
  </div>
</div>


<?php
 $postslist = get_posts('numberposts=1');
 foreach ($postslist as $post) :
    setup_postdata($post);
 ?>



<div class ="section">
  <div class="container-fluid">
    <div class="container">
      <div class="col-lg-7 col-md-12">
        <div class="row">
          <div class="col-md-3  col-xs-3  gsr-latestPost-profilePic" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center; background-size: contain;"> </div>

          <div class="col-md-9  col-xs-9  gsr-latestPost-title">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php $by_line = get_field( "by_line" ); ?>
            <p>by <span><?php if( $by_line ) {echo $by_line;} else { echo 'Globally Speaking Radio'; }  ?></span></p>
            <div class="gsr-latestPost-social">

            <i class="fa fa-linkedin" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-google-plus" aria-hidden="true"></i>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 rmv-col-pdg gsr-latestPost-copy">
            <?php the_content() ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 rmv-col-pdg gsr-latestPost-player-title">
            <h1>Listen to the COMPLETE EPISODE Below (00:35:12)</h1>
          </div>

          <div class="col-md-12 gsr-latestPost-player">
            <span class="glyphicon glyphicon-play"></span>
          </div>
        </div>



        <div class="row">
          <?php $download_link = get_field( "download_link" ); ?>
            <a href="<?php if( $download_link ) {echo $download_link;} else { echo '#'; }  ?>">
              <div class="col-md-4 col-sm-4 gsr-latestPost-buttons downloadBtn"><p>Download</p></div>
            </a>
          <?php $synopsis_link  = get_field( "synopsis_link" ); ?>
            <a href="<?php if( $synopsis_link ) {echo $synopsis_link;} else { echo '#'; }  ?>">
              <div class="col-md-4 col-sm-4 gsr-latestPost-buttons synopsisBtn"><p>Synopsis</p></div>
            </a>
          <?php $website_link  = get_field( "website_link" ); ?>
              <a href="<?php if( $website_link ) {echo $website_link;} else { echo '#'; }  ?>">
            <div class="col-md-4 col-sm-4 gsr-latestPost-buttons websiteBtn"><p>Website</p></div>
            </a>
        </div>

      </div>
       <?php endforeach ?>

      <div class="col-lg-5 col-md-12 gsr-chat-box">
      <div class="gsr-latestPost-message">
        <h1>Share Your Thoughts</h1>

        <?php comments_template('/templates/comments.php'); ?>

      </div>
      <div class="gsr-latestPost-sponsor center-block text-center">
            <h1>Sponsored by</h1>
            <span>Moravia</span>
      </div>

      </div>
    </div>
  </div>
</div>








