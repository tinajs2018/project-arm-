<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function realestate_agent_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style( 'google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'realestate_agent_enqueue_google_fonts' );

if (!function_exists('realestate_agent_enqueue_scripts')) {

	function realestate_agent_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('realestate-agent-style', get_stylesheet_uri(), array() );

		wp_style_add_data('realestate-agent-style', 'rtl', 'replace');

		wp_enqueue_style(
			'realestate-agent-media-css',
			get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'realestate-agent-woocommerce-css',
			get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'realestate-agent-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'realestate-agent-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$realestate_agent_css = '';

		if ( get_header_image() ) :

			$realestate_agent_css .=  '
				.top-header {
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'realestate-agent-style', $realestate_agent_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'realestate-agent-style',$realestate_agent_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'realestate_agent_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('realestate_agent_after_setup_theme')) {

	function realestate_agent_after_setup_theme() {

		if ( ! isset( $realestate_agent_content_width ) ) $realestate_agent_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'realestate-agent' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'width' => 1920,
			'height' => 100
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'realestate_agent_after_setup_theme', 999 );

}
require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
require get_template_directory() .'/core/includes/meta-data.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/**------------------------------------------------------------------------------------------
 * Enqueue theme logo style.
 */
function realestate_agent_logo_resizer() {

    $realestate_agent_theme_logo_size_css = '';
    $realestate_agent_logo_resizer = get_theme_mod('realestate_agent_logo_resizer');

	$realestate_agent_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($realestate_agent_logo_resizer).'px !important;
			width: '.esc_attr($realestate_agent_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'realestate-agent-style',$realestate_agent_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'realestate_agent_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function realestate_agent_global_color() {

    $realestate_agent_theme_color_css = '';
    $realestate_agent_copyright_bg = get_theme_mod('realestate_agent_copyright_bg');

	$realestate_agent_theme_color_css = '
    .copyright {
			background: '.esc_attr($realestate_agent_copyright_bg).';
		}
	';
    wp_add_inline_style( 'realestate-agent-style',$realestate_agent_theme_color_css );
    wp_add_inline_style( 'realestate-agent-woocommerce-css',$realestate_agent_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'realestate_agent_global_color' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('realestate_agent_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function realestate_agent_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'realestate-agent');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'realestate-agent'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'realestate-agent'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'realestate-agent' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'realestate-agent'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for realestate_agent_comment()

if (!function_exists('realestate_agent_widgets_init')) {

	function realestate_agent_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','realestate-agent'),
			'id'   => 'realestate-agent-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'realestate-agent'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','realestate-agent'),
			'id'   => 'realestate-agent-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'realestate-agent'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'realestate_agent_widgets_init' );

}

function realestate_agent_get_categories_select() {
	$teh_cats = get_categories();
	$results;
	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
	if (isset($teh_cats[$i]))
  		$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

 // Change number or products per row to 3
add_filter('loop_shop_columns', 'realestate_agent_loop_columns');
if (!function_exists('realestate_agent_loop_columns')) {
	function realestate_agent_loop_columns() {
		$columns = get_theme_mod( 'realestate_agent_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'realestate_agent_per_page', 20 );
function realestate_agent_per_page( $cols ) {
  	$cols = get_theme_mod( 'realestate_agent_product_per_page', 9 );
	return $cols;
}

// Add filter to modify the number of related products
add_filter( 'woocommerce_output_related_products_args', 'realestate_agent_products_args' );
function realestate_agent_products_args( $args ) {
    $args['posts_per_page'] = get_theme_mod( 'custom_related_products_number', 6 );
    $args['columns'] = get_theme_mod( 'custom_related_products_number_per_row', 3 );
    return $args;
}

function realestate_agent_remove_sections( $wp_customize ) {
	$wp_customize->remove_control('display_header_text');
	$wp_customize->remove_setting('display_header_text');
}
add_action( 'customize_register', 'realestate_agent_remove_sections');

add_action( 'wp_enqueue_scripts', 'realestate_agent_load_dashicons_front_end' );
	function realestate_agent_load_dashicons_front_end() {
		wp_enqueue_style( 'dashicons' );
}

add_action('after_switch_theme', 'realestate_agent_setup_options');
function realestate_agent_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

?>
