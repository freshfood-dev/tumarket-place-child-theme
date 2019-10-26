<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <?php if ( has_post_thumbnail() ) {?>
            <div class="col-lg-5 col-md-5 col-sm-12 order-lg-2 order-md-2">
                <?php the_post_thumbnail( 'full' );?>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 order-lg-1 order-md-1">
                <?php if ( twentynineteen_can_show_post_thumbnail() ) : ?>
                    <header class="entry-header">
                        <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
                    </header>
                <?php endif; ?>
                    <div class="entry-content">
                            <?php
                            the_content();

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
                                    'after'  => '</div>',
                                )
                            );
                        ?>
                    </div><!-- .entry-content -->
            </div>
        <?php } else {?>
            <div class="col-lg-12 col-md-12 col-sm-12 order-lg-1 order-md-1">
                <header class="entry-header">
                    <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
                </header>
                <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
                                'after'  => '</div>',
                            )
                        );
                    ?>
                </div><!-- .entry-content -->
            </div> 
        <?php }?>
        <div class="col-lg-12 col-md-12 col-sm-12 order-lg-12 order-md-12">
            <?php if ( get_edit_post_link() ) : ?>
                <footer class="entry-footer">
                    <?php
                    edit_post_link(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </footer><!-- .entry-footer -->
            <?php endif; ?>                        
        </div> 
    </div>                       
</article><!-- #post-<?php the_ID(); ?> -->
