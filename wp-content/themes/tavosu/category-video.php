<?php
get_header();
echo "<div class='wrapper'>";
while(have_posts()):?>

    <?php the_post(); ?>
    <div class="row video">
        <?php the_content(); ?>
    </div>

<?php endwhile;
echo "</div>";
get_footer();


