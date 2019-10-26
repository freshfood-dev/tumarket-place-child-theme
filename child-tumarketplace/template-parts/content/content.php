<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="post-list-items">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php 
                if(has_post_thumbnail()){
                    twentynineteen_post_thumbnail('thumbnail'); 
                } else {
                    ?>
                        <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/no-image.jpg';?>" alt="">
                    <?php
                }
                
            ?>
            <header class="entry-header">
                <?php
                if (is_sticky() && is_home() && !is_paged()) {
                    printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'twentynineteen'));
                }
                if (is_singular()) :
                    the_title('<h1 class="entry-title">', '</h1>');
                else :
                    the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
                endif;
                ?>
            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    )
                );

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . __('Pages:', 'twentynineteen'),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php twentynineteen_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </article><!-- #post-<?php the_ID(); ?> -->
    </div>
</div>