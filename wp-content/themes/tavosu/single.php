<?php
get_header();
while (have_posts()): the_post();?>
    <div class="row post single-work">
        <div class="attachments">
            <?php $attachments = new Attachments( 'attachments' ); ?>
            <?php if( $attachments->exist() ) : ?>
                <?php $first = false; ?>
                <?php while( $attachment = $attachments->get() ) : ?>
                    <?php if(!$first){
                        $first = $attachments->url('full');
                    }?>
                    <?php echo $attachments->image('full'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
    </div>
    <div class="hr row">
        <a title="Pin it!" class="post-pin-it" target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo $first?>&url=<?php the_permalink()?>&is_video=false&description=<?php the_tags()?>"></a>
    </div>

<?php
endwhile;
include "blocks.php";
get_footer();