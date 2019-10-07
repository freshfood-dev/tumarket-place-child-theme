<?php 
	add_action( 'wp_enqueue_scripts', 'child_tumarketplace_enqueue_styles' );
	
	function child_tumarketplace_enqueue_styles() {
 		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 		wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css'); 
 		wp_enqueue_script('jquery');
 		wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '',true);
 		?>
 			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 		<?php 
 	}
    /*
 	*function child_tumarketplace_javascript() {
	 *   wp_enqueue_scripts('jquery');
	  *  ?>
	   * <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
		*<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  
	    <?php
	}
	add_action('wp_footer', 'child_tumarketplace_javascript'); 

	add_action('wp_head', 'child_tumarketplace_styles'); 

	function child_tumarketplace_styles() {
		?>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<?php 
	}
	*/
 ?>