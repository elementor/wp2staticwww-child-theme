<?php
/**
 * The functions.php file
 *
 * @package WP2StaticWWWChildTheme
 */

add_filter( 'wp_title', 'accessible_minimalism_wp_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function accessible_minimalism_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = 'WP2Static';
  }

  return $title;
}

function accessible_minimalism_display_latest_blog_posts() {
    // display recent Blog posts
    $the_query = new WP_Query(
        [ 
            'cat' => 2, 
            'posts_per_page' => 5 
        ]
     ); 

    var_dump($the_query);
          
    if ( $the_query->have_posts() ) {

        echo '<ul>';

        while ( have_posts() ) {
            the_post();

    ?>
           <li> 
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title('', ''); ?></a>

            <?php echo get_the_date(); ?>

            </li>
    <?php 
        } // end posts loop
    }

    echo '</ul>';
      
    // reset after custom WP_Query (needed?)
    wp_reset_postdata();

}
