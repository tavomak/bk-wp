<?php
    get_template_part('includes/header'); 
    bk_main_before();
?>

<main id="main" class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <header class="mb-4 border-bottom">
          <h1>
            <?php _e('Search Results for', 'bk'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;
          </h1>
        </header>
        <?php get_template_part('includes/loops/search-results'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>
