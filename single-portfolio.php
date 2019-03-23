<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <?php if (!is_front_page() &&  function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
                        <h1><?php the_title()?></h1>
                        <?php the_content()?>
                        <?php wp_link_pages(); ?>
                    </article>
                    <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
                    <hr>
                    <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
                    <?php comments_template('/loops/comments.php'); ?>
                <?php endwhile; ?>

                <?php else : ?>
                    <?php get_template_part( 'loops/content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?>