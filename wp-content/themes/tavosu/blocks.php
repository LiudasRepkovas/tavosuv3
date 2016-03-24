<div class="row work-blocks">
    <?php
    $args = array(
        'category_name' => 'work'
    );
    $the_query = new WP_Query( $args );

    if ($the_query->have_posts()):
        while ( $the_query->have_posts() ): $the_query->the_post();
            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ;?>
            <a href="<?php echo get_post_permalink()?>"  class="col-lg-4 work-block-wrap">
                <img src="<?php echo $feat_image ?>">
                <div class="title-wrap">
                    <span><?php the_title()?></span>
                </div>
            </a>

        <?php
        endwhile; // end while
    endif;
    ?>
</div>