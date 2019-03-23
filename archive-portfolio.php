<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>

                <div class="row">
                    <?php if(have_posts()): while(have_posts()): the_post();?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <article role="article" id="post_<?php the_ID()?>">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>

                                <?php if (has_post_thumbnail()) { ?>
                                    <a class="portfolio-thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumbnail'); ?></a>
                                <?php } ?>
                            </article>
                        </div>
                    <?php endwhile; ?>
                </div><!-- /.row -->

                <?php if ( function_exists('brainworks_pagination') ) { brainworks_pagination(); } else if ( is_paged() ) { ?>
                    <ul class="pagination">
                        <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'brainworks')) ?></li>
                        <li class="newer"><?php previous_posts_link(__('Next', 'brainworks') . ' <i class="fa fa-arrow-right"></i>') ?></li>
                    </ul>
                <?php } ?>

                <?php else : ?>
                    <?php get_template_part( 'loops/content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?>