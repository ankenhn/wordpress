<?php
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 3/29/14
 * Time: 9:16 PM
 */
get_header();

if ( is_single() ) :
    the_title( '<h1 class="entry-title">', '</h1>' );
else :
    the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
endif;


    edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
    comments_template();
}

?>

<?php get_footer();