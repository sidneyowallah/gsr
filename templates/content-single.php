<div class ="section">
  <div class="container-fluid">
    <div class="container">
      <div class="col-lg-12 col-md-12">
        <div class="row">

          <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
              <header>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <!-- <?php get_template_part('templates/entry-meta'); ?> -->
              </header>
              <div class="entry-content">
                <?php the_content(); ?>
              </div>
              <footer>
                <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
              </footer>
              <?php comments_template('/templates/comments.php'); ?>
            </article>
          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
</div>

