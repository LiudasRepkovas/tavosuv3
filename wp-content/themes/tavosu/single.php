<?php
get_header();
while (have_posts()): the_post();?>
    <div class="row post single-work">
        <div class="attachments">
            <?php
            $entries = get_post_meta( get_the_ID(), '_prefix_repeatable-group', true );

            foreach ( (array) $entries as $key => $entry ) {

                $img = $title = $desc = $caption = '';

                if ( isset( $entry['attachment_type'] ) )
                    $attachment_type = esc_html( $entry['attachment_type'] );

                if ( isset( $entry['embed'] ) )
                    $embed = str_replace("https://", "http://", $entry['embed'] );

                if ( isset( $entry['image'] ) ) {
                    $img = esc_html( $entry['image'] );
                }

                if($attachment_type == "embed"){
                    echo "<div class='iframe-wrap'>";
                    echo wp_oembed_get($embed);
                    echo "</div>";
                } else if($attachment_type == "image") {
                    echo ("<img src='" . $img . "'/>");
                }

            }
            ?>


        </div>
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
    </div>
    <div class="hr row">
        <a title="Pin it!" class="post-pin-it" target="_blank" ></a>
    </div>

<?php
endwhile;
include "blocks.php";
get_footer();