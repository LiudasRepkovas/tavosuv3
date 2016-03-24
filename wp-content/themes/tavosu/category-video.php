<?php
get_header();

while(have_posts()):?>

    <?php the_post(); ?>
    <div class="row video">
        <?php the_content(); ?>
    </div>

<?php endwhile;
get_footer();


