<?php

//shortcode_button
	function shortcode_button($atts, $content = null) {
	 extract( shortcode_atts( array(
	          'url' => '#',
	          'color' => ''
	), $atts ) );
	return '<a href="'.$url.'" class="section__button section__button--'.$color.' "><span>' . do_shortcode($content) . '</span></a>';
	}
	add_shortcode('button', 'shortcode_button');
//end shortcode_button






//options page
if( function_exists('acf_add_options_page') ) {

	$page = acf_add_options_page(array(
		'page_title' 	=> 'Configurações do site',
		'menu_title' 	=> 'Configurações',
		'menu_slug' 	=> 'theme-configuration',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));



}







// adicionar regra para o editor de editar o tema
$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );







/**
 * Rebuild the image tag with only the stuff I want
 */
class bwd_img_rebuilder
{
  public $caption_class   = 'wp-caption';
  public $caption_p_class = 'wp-caption-text';
  public $caption_id_attr = FALSE;
  public $caption_padding = 8; // Double of the padding on $caption_class

  public function __construct()
  {
    add_filter( 'img_caption_shortcode', array( $this, 'img_caption_shortcode' ), 1, 3 );
    add_filter( 'get_avatar', array( $this, 'recreate_img_tag' ) );
    add_filter( 'the_content', array( $this, 'the_content') );
  }

  public function recreate_img_tag( $tag )
  {
    // Supress SimpleXML errors
    libxml_use_internal_errors( TRUE );

    try
    {
      $x = new SimpleXMLElement( $tag );

      // We only want to rebuild img tags
      if( $x->getName() == 'img' )
      {
        // Get the attributes I'll use in the new tag
        $alt        = (string) $x->attributes()->alt;
        $src        = (string) $x->attributes()->src;
        $classes    = (string) $x->attributes()->class;
        $class_segs = explode(' ', $classes);

        // All images have a source
        $img = '<img src="' . $src . '"';

        // If alt not empty, add it
        if( ! empty( $alt ) )
        {
          $img .= ' alt="' . $alt . '"';
        }

        // Only alignment classes are allowed
        $allowed_classes = array(
          'alignleft',
          'alignright',
          'alignnone',
          'aligncenter'
        );

        if( in_array( $class_segs[0], $allowed_classes ) )
        {
          $img .= ' class="' . $class_segs[0] . '"';
        }

        // Finish up the img tag
        $img .= ' />';

        return $img;
      }
    }
    catch ( Exception $e ){}

    // Tag not an img, so just return it untouched
    return $tag;
  }

  /**
   * Search post content for images to rebuild
   */
  public function the_content( $html )
  {
    return preg_replace_callback(
      '|(<img.*/>)|',
      array( $this, 'the_content_callback' ),
      $html
    );
  }

  /**
   * Rebuild an image in post content
   */
  private function the_content_callback( $match )
  {
    return $this->recreate_img_tag( $match[0] );
  }

  /**
   * Customize caption shortcode
   */
  public function img_caption_shortcode( $output, $attr, $content )
  {
    // Not for feed
    if ( is_feed() )
      return $output;

    // Set up shortcode atts
    $attr = shortcode_atts( array(
      'align'   => 'alignnone',
      'caption' => '',
      'width'   => ''
    ), $attr );

    // Add id and classes to caption
    $attributes = '';

    if( $caption_id_attr && ! empty( $attr['id'] ) )
    {
      $attributes .= ' id="' . esc_attr( $attr['id'] ) . '"';
    }

    $attributes .= ' class="' . $this->caption_class . ' ' . esc_attr( $attr['align'] ) . '"';

    // Set the max-width of the caption
    $attributes .= ' style="max-width:' . ( $attr['width'] + $this->caption_padding ) . 'px;"';

    // Create caption HTML
    $output = '
      <div' . $attributes .'>' .
        do_shortcode( $content ) .
        '<p class="' . $this->caption_p_class . '">' . $attr['caption'] . '</p>' .
      '</div>
    ';

    return $output;
  }
}

$bwd_img_rebuilder = new bwd_img_rebuilder;








/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 */

if ( ! function_exists( 'theme_scripts' ) ) :
	function theme_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'foundation-stylesheet', get_template_directory_uri() . '/assets/css/foundation.min.css' );
	 wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/style.css' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required).
	wp_register_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr.js', array(), '2.8.3', false );


	// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required).
	wp_register_script( 'fastclick', get_template_directory_uri() . '/assets/js/vendor/fastclick.js', array(), '1.0.0', false );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	// If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88.
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
	wp_register_script( 'foundation', get_template_directory_uri() . '/assets/js/foundation.min.js', array('jquery'), '5.5.2', true );


//	wp_enqueue_style( 'owl-carousel-stylesheet', get_template_directory_uri() . '/assets/libs/owlcarousel2/assets/owl.carousel.css' );
//	wp_enqueue_style( 'owl-carousel-theme-stylesheet', get_template_directory_uri() . '/assets/libs/owlcarousel2/assets/owl.theme.default.min.css' );
// 	wp_register_script( 'owl-carousel', get_template_directory_uri() . '/assets/libs/owlcarousel2/owl.carousel.min.js', array('jquery'), '5.5.2', true );

	wp_register_script( 'owl-carousel', get_template_directory_uri() . '/assets/libs/owl-carousel/owl.carousel.min.js', array('jquery'), '5.5.2', true );

	wp_enqueue_style( 'owl-carousel-stylesheet', get_template_directory_uri() . '/assets/libs/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl-carousel-theme-stylesheet', get_template_directory_uri() . '/assets/libs/owl-carousel/owl.theme.css' );
	wp_enqueue_style( 'owl-carousel-transitions-stylesheet', get_template_directory_uri() . '/assets/libs/owl-carousel/owl.transitions.css' );


	wp_register_script( 'skrollr', get_template_directory_uri() . '/assets/libs/skrollr/skrollr.min.js', array('jquery'), '5.5.2', true );



	wp_register_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '5.5.2', true );


	// Enqueue all registered scripts.
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'fastclick' );
	wp_enqueue_script( 'jquery' );
	//wp_enqueue_script( 'skrollr' );
	wp_enqueue_script( 'foundation' );
	wp_enqueue_script( 'owl-carousel' );
	wp_enqueue_script( 'app' );

	}

	add_action( 'wp_enqueue_scripts', 'theme_scripts' );
endif;



if ( ! function_exists( 'login_page_styles' ) ) :
		function login_page_styles() {
		    wp_enqueue_style( 'login-page-styles', get_template_directory_uri() . '/assets/css/login-page.css' );
		}
		add_action( 'login_enqueue_scripts', 'login_page_styles' );
endif;




/* *************************************************************************** */

/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'add_menuclass' ) ) {
	function add_menuclass($ulclass) {
	    $find = array('/<a rel="button"/', '/<a title=".*?" rel="button"/');
	    $replace = array('<a rel="button" class="button"', '<a rel="button" class="button"');

	    return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu','add_menuclass' );
}



/* *************************************************************************** */




/*
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 */
if ( ! function_exists( 'theme_support' ) ) :
function theme_support() {

	// Add menu support
	add_theme_support( 'menus' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formarts support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

}

add_action( 'after_setup_theme', 'theme_support' );
endif;











/* *************************************************************************** */



/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */

register_nav_menus(array(
	'menuPrincipal' => 'Menu Principal', // Registers the menu in the WordPress admin menu editor.
	//'mobile-off-canvas' => 'Mobile',
));

/**
 * Left top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'menuPrincipal' ) ) {
	function menuPrincipal() {
	    wp_nav_menu(array(
	        'container' => false,                           // Remove nav container
	        'container_class' => '',                        // Class of container
	        'menu' => '',                                   // Menu name
	        'menu_class' => 'menu-principal',               // Adding custom nav class
	        'theme_location' => 'menuPrincipal',            // Where it's located in the theme
	        'before' => '',                                 // Before each link <a>
	        'after' => '',                                  // After each link </a>
	        'link_before' => '',                            // Before each link text
	        'link_after' => '',                             // After each link text
	        'depth' => 5,                                   // Limit the depth of the nav
	        'fallback_cb' => false,                         // Fallback function (see below)
	        //'walker' => new Foundationpress_Top_Bar_Walker(),
	    ));
	}
}


/* *************************************************************************** */

//remover  admin bar
show_admin_bar( false );



//remover itens da admin bar

function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('customize');            // Remove the  customize
    //$wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    //$wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    //$wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    //$wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    //$wp_admin_bar->remove_menu('new-content');      // Remove the content link
    $wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
    //$wp_admin_bar->remove_menu('my-account');       // Remove the user details tab
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );






/* *************************************************************************** */


/* Remove Settings and Posts Menu */
    add_action( 'admin_menu', 'my_remove_menu_pages' );
    function my_remove_menu_pages() {
        if (current_user_can('editor')) {           //se for um editor
          remove_menu_page('edit-comments.php');    // esconde comentarios
          remove_menu_page('edit.php');             // esconde posts
          remove_menu_page('index.php');             // esconde  deshboard
          remove_menu_page('tools.php');             // esconde  ferramentas
          remove_menu_page('themes.php');             // esconde  ferramentas
        }
    }





/* *************************************************************************** */


/* Liberar upload SVG */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');





?>



















<?php  /* ||||||||||||||||||| REGISTRA FUNÇÕS DO VIDEO |||||||||||||||||||  */



function blockVideoBackgroundType() {
	 $acfblockVideoBackgroundType = get_sub_field('acf_block_video__type_layout');
		if( !empty( $acfacfblockVideoBackgroundType) ): ?>
		  <?php echo  $acfacfblockVideoBackgroundType; ?>
		<?php endif;
}



		function videoCustomBackground() {
			$acfBlockVideoCustomBackground = get_sub_field('acf_block_video__custom_background');
			$acfBlockVideoCustomBackgroundColor = get_sub_field('acf_block_video__custom_background_color');
	    $acfBlockVideoCustomBackgroundImage = get_sub_field('acf_block_video__custom_background_image');

	     if( !empty($acfBlockVideoCustomBackground) ): ?>
			 		style="background: <?php echo $acfBlockVideoCustomBackgroundColor; ?> url(<?php echo $acfBlockVideoCustomBackgroundImage; ?>) ; "
	     <?php endif;
	  }



		function blockVideoTitle() {
      $acfBlockVideoTitle = get_sub_field('acf_block_video__title');
        if( !empty($acfBlockVideoTitle) ): ?>
        <h1 class="section__title">  <?php echo $acfBlockVideoTitle; ?>  </h1>
        <?php endif;
    }


     function blockVideoSubTitle() {
      $acfBlockVideoSubtitle = get_sub_field('acf_block_video__helpline');
        if( !empty($acfBlockVideoSubtitle) ): ?>
          <p class="lead"> <?php echo $acfBlockVideoSubtitle; ?>  </p>
        <?php endif;
     }

		 function blockVideoImageLegend() {
      $blockVideoImageLegend = get_sub_field('acf_block_video__image_legend');
        if( !empty($blockVideoImageLegend) ): ?>
					  <h3 class="section__subtitle-secondary"><?php echo $blockVideoImageLegend; ?></h3>
        <?php endif;
     }


		 function blockVideoImageThumb() {
	 		$acfBlockVideoImageThumb = get_sub_field('acf_block_video__image_thumb');
	 		 if( !empty($acfBlockVideoImageThumb) ): ?>
	 				style="background-image: url(<?php echo $acfBlockVideoImageThumb; ?>) ; "
	 		 <?php endif;
	 	}


		function blockVideoVideoTitle() {
      $acfBlockVideoVideoTitle = get_sub_field('acf_block_video__video_title');
        if( !empty($acfBlockVideoVideoTitle) ): ?>
          	<h2 id="modal-title" class="modal__conteudo--title"> <?php echo $acfBlockVideoVideoTitle; ?> </h2>
        <?php endif;
    }

		function blockVideoVideoDescription() {
      $acfBlockVideoVideoDescription = get_sub_field('acf_block_video__video_description');
        if( !empty($acfBlockVideoVideoDescription) ): ?>
            <?php echo $acfBlockVideoVideoDescription; ?>
        <?php endif;
    }

		function blockVideoVideoLink() {
      $acfBlockVideoVideoLink = get_sub_field('acf_block_video__video_link');
        if( !empty($acfBlockVideoVideoLink) ): ?>
            <?php echo $acfBlockVideoVideoLink; ?>
        <?php endif;
    }

/* ||||||||||||||||||| END REGISTRA FUNÇÕS DO VIDEO |||||||||||||||||||  */ ?>















<?php  /* ||||||||||||||||||| REGISTRA FUNÇÕES RECURSOS |||||||||||||||||||  */





function blockResourceBackgroundType() {
	 $acfblockResourceBackgroundType = get_sub_field('acf_block_resource__type_layout');
		if( !empty( $acfblockResourceBackgroundType) ): ?>
		  <?php echo  $acfblockResourceBackgroundType; ?>
		<?php endif;
}




function resourceCustomBackground() {
	$acfBlockResourceCustomBackground = get_sub_field('acf_block_resource__custom_background');
	$acfBlockResourceCustomBackgroundColor = get_sub_field('acf_block_resource__custom_background_color');
	$acfBlockResourceCustomBackgroundImage = get_sub_field('acf_block_resource__custom_background_image');
	 if( !empty($acfBlockResourceCustomBackground) ): ?>
			style="background: <?php echo $acfBlockResourceCustomBackgroundColor; ?> url(<?php echo $acfBlockResourceCustomBackgroundImage; ?>) ; "
	 <?php endif;
}



function blockResourceTitle() {
	$acfBlockResourceTitle = get_sub_field('acf_block_resource__title');
		if( !empty($acfBlockResourceTitle) ): ?>
		<h2 class="section__title--secondary"> <?php echo $acfBlockResourceTitle; ?> 	</h2>
 		<?php endif;
}

/*
function blockResourceListResourceVideoCarosel() {
	$acfBlockResourceListResourceVideo = get_sub_field('acf_block_resource__list_resource__video');
		if( !empty($acfBlockResourceListResourceVideo) ): ?>
		<h2 class="section__title--secondary"> <?php echo $acfBlockResourceListResourceVideo; ?> 	</h2>
 		<?php endif;
}

*/







/* ||||||||||||||||||| END REGISTRA FUNÇÕES RECURSOS |||||||||||||||||||  */ ?>
