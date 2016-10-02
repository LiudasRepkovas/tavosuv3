<?php
get_header();
while (have_posts()):?>
    <div class="row post page">
        <?php
        the_post();
        the_content();
        ?>
        <?php edit_post_link(); ?>
    </div>
<?php endwhile;
get_footer();