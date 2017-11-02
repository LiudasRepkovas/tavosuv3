<?php
get_header();
$isWorkPage = true;
while (have_posts()): the_post();?>
    <div class="row post single-work">
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <div class="attachments">
            <?php
            $entries = array_reverse ( get_post_meta( get_the_ID(), '_prefix_repeatable-group', true )  );

            foreach ( (array) $entries as $key => $entry ) {


                $img = $image_text = $title = $desc = $caption = '';

                if ( isset( $entry['attachment_type'] ) )
                    $attachment_type = esc_html( $entry['attachment_type'] );

                if ( isset( $entry['embed'] ) )
                    $embed = str_replace("https://", "https://", $entry['embed'] );

                if ( isset( $entry['image'] ) ) {
                    $img = esc_html( $entry['image'] );
                }

                if ( isset( $entry['image_text'] ) ) {
                    $image_text = esc_html( $entry['image_text'] );
                }


                if($attachment_type == "embed"){
                    echo "<div class='iframe-wrap'>";
                    echo wp_oembed_get($embed);
                    echo "</div>";
                } else if($attachment_type == "image") {
                    echo ("<div class='image'>");
                        if( isset($image_text)  && $image_text != ''){
                            echo ("<span class='image-text'>" . $image_text . "</span>");
                        }  
                        echo ("<img src='" . $img . "'/>");
                    echo ("</div>");
                }

            }
            ?>


        </div>
<!--        --><?php //edit_post_link(); ?>
    </div>
    <div class="hr row">
        <?php
            $entries = get_post_meta( get_the_ID(), '_prefix_post_additional_info_field', true );
            echo "<span class='post_info_cmb_string'>" . $entries . "</span>"
        ?>
        <!--<a title="Pin it!" class="post-pin-it" target="_blank" ></a>-->
    </div>

<?php
endwhile;
include "blocks.php";
get_footer();