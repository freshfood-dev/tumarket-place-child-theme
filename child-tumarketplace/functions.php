<?php 
	/*Load scripts and styles*/
	add_action( 'wp_enqueue_scripts', 'child_tumarketplace_enqueue_styles' );
	
	function child_tumarketplace_enqueue_styles() {
 		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 		wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css'); 
 		wp_enqueue_style( 'font-awesome-css', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css'); 
 		wp_enqueue_script('jquery');
 		wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '',true);
 		?>
 			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 		<?php 
 	}

 	
 	/**
 		* Add a sidebar.
 	*/
	function child_tumarketplace_widgets_init() {
	    if ( function_exists('register_sidebar') ) {
		    $sidebar1 = array(
		        'before_title' => '<h5 class="footer__navigaton__title">',
		        'after_title' => '</h5>',
		        'before_widget' => '<div id="%1$s" class="widget %2$s footer__navigation__content">',
				'after_widget'  => '</div>',        
		        'name'=>__( 'Footer Widget-1', 'textdomain' ),  
			); 
			$sidebar0 = array(
		        'before_title' => '<h5 class="footer__navigaton__title">',
		        'after_title' => '</h5>',
		        'before_widget' => '<div id="%1$s" class="widget %2$s footer__navigation__content">',
				'after_widget'  => '</div>',        
		        'name'=>__( 'Footer Widget-0', 'textdomain' ),  
		    );  
		    $sidebar2 = array(
		        'before_title' => '<h5 class="footer__navigaton__title">',
		        'after_title' => '</h5>',        
		        'before_widget' => '<div id="%1$s" class="widget %2$s footer__navigation__content">',
        		'after_widget' => '</div>',
		        'name'=>__( 'Footer Widget-2', 'textdomain' ),  
		    );
		    $sidebar3 = array(
		        'before_title' => '<h5 class="footer__navigaton__title">',
		        'after_title' => '</h5>',
		        'before_widget' => '<div id="%1$s" class="widget %2$s footer__navigation__content">',
				'after_widget'  => '</div>',        
		        'name'=>__( 'Footer Widget-3', 'textdomain' ),  
		    );
		    $sidebar4 = array(
		        'before_title' => '<h5 class="footer__navigaton__title">',
		        'after_title' => '</h5>',
		        'before_widget' => '<div id="%1$s" class="widget %2$s footer__navigation__content">',
				'after_widget'  => '</div>',        
		        'name'=>__( 'Footer Widget-4', 'textdomain' ),  
		    );
		     
		    register_sidebar($sidebar1);
		    register_sidebar($sidebar2);
		    register_sidebar($sidebar3);
			register_sidebar($sidebar4);
			register_sidebar($sidebar0);
		}
	}
	add_action( 'widgets_init', 'child_tumarketplace_widgets_init' );

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}
	
 ?>