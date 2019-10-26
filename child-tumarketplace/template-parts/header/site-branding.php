<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div>

	<?php if ( has_custom_logo() ) : ?>
		<div><?php the_custom_logo(); ?></div>
	<?php endif; ?>
</div><!-- .site-branding -->
