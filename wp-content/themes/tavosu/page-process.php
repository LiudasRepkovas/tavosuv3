<?php
get_header();
while (have_posts()):?>
    <div class="row post process">
        <?php
        the_post();
        the_content();
        ?>
    </div>
<?php endwhile;
get_footer();