<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
        <h1><?php _e('Category', 'brainworks'); ?>: <?php echo single_cat_title(); ?></h1>
        <hr>
        <?php get_template_part('loops/content-2', get_post_format()); ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
       <?php get_sidebar(); ?>
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
