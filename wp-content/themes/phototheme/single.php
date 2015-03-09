<?php get_header(); ?>

<main>
  <div class="container">

    <!-- <div class="content"> -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-meta">
              <?php hackeryou_posted_on(); ?>
            </div><!-- .entry-meta -->
          </header><!-- End .entry-header -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <footer class="entry-footer">
            <p>
              <?php hackeryou_posted_in(); ?>
            </p>
          </footer><!-- .entry-footer -->
        </article><!-- #post-## -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    <!-- </div> --> <!-- End .content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</main><!-- End main --> 

<?php get_footer(); ?>