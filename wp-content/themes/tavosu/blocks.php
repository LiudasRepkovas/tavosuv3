<div class="row work-blocks">
    <?php
    $args = array(
        'category_name' => 'work'
    );
    $the_query = new WP_Query( $args );

    if ($the_query->have_posts()):
        while ( $the_query->have_posts() ): $the_query->the_post();
            ;?>
            <a href="<?php echo get_post_permalink()?>"  class="col-lg-4 work-block-wrap">
                <img class="block-image" src="<?php the_post_thumbnail_url('thumbnail'); ?>" nopin = "nopin">
                <div class="title-wrap">
                    <span><?php the_title()?></span>
                </div>
            </a>

        <?php
        endwhile; // end while
    endif;
    ?>
</div>