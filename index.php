<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();?>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php 
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
                        <article id="post-<?php the_ID();?>" <?php post_class();?>>
                            <h1><?php the_title();?></h1>
                            <div class="entry-content">
                                <?php the_content();?>
                            </div>
                        </article>
            <?php 
                    endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();