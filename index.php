<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();?>

<main class="main-content">

    <?php if (have_posts()) :

        while (have_posts()) : the_post();?>

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <article id="post-<?php the_ID();?>" <?php post_class();?>>
                            <h1><?php the_title();?></h1>

                            <div class="entry-content">
                                <?php the_content();?>
                            </div><!-- entry-content -->
                        </article>
                    </div>

                    <div class="col-md-3">
                        <aside class="sidebar">
                            <?php get_sidebar();?>
                        </aside>
                    </div>
                </div><!-- row -->
            </div><!-- container -->

        <?php endwhile;
    endif;?>

</main>


<?php get_footer();