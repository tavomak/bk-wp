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
            <?php _e('Category: ', 'bk'); echo single_cat_title(); ?>
          </h1>
        </header>
        <?php get_template_part('include/loops/index-loop'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    bk_main_after();
    get_template_part('includes/footer'); 
?>
