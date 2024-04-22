<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_realestate_agent_dismissed_notice_handler', 'realestate_agent_ajax_notice_handler' );

function realestate_agent_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function realestate_agent_deprecated_hook_admin_notice() {
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_realestate-agent-guide-page') {
             $realestate_agent_comments_theme = wp_get_theme(); ?>
            <div class="realestate-agent-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="realestate-agent-notice">
				<div class="realestate-agent-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'realestate-agent'); ?>">
				</div>
				<div class="realestate-agent-notice-content">
					<div class="realestate-agent-notice-heading"><?php esc_html_e('Thanks for installing ','realestate-agent'); ?><?php echo esc_html( $realestate_agent_comments_theme ); ?></div>
					<p><?php printf(__('In order to fully benefit from everything our theme has to offer, please make sure you visit our <a href="%s">For Premium Options</a>.', 'realestate-agent'), esc_url(admin_url('themes.php?page=realestate-agent-guide-page'))); ?></p>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'realestate_agent_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'realestate_agent_getting_started' );
function realestate_agent_getting_started() {
	add_theme_page( esc_html__('Get Started', 'realestate-agent'), esc_html__('Get Started', 'realestate-agent'), 'edit_theme_options', 'realestate-agent-guide-page', 'realestate_agent_test_guide');
}

function realestate_agent_admin_enqueue_scripts() {
	wp_enqueue_style( 'realestate-agent-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'realestate-agent-admin-script', get_template_directory_uri() . '/js/realestate-agent-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'realestate-agent-admin-script', 'realestate_agent_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'realestate_agent_admin_enqueue_scripts' );

if ( ! defined( 'REALESTATE_AGENT_DOCS_FREE' ) ) {
define('REALESTATE_AGENT_DOCS_FREE',__('https://www.misbahwp.com/docs/realestate-agent-free-docs/','realestate-agent'));
}
if ( ! defined( 'REALESTATE_AGENT_DOCS_PRO' ) ) {
define('REALESTATE_AGENT_DOCS_PRO',__('https://www.misbahwp.com/docs/realestate-agent-pro-docs','realestate-agent'));
}
if ( ! defined( 'REALESTATE_AGENT_BUY_NOW' ) ) {
define('REALESTATE_AGENT_BUY_NOW',__('https://www.misbahwp.com/themes/real-estate-agent-wordpress-theme/','realestate-agent'));
}
if ( ! defined( 'REALESTATE_AGENT_SUPPORT_FREE' ) ) {
define('REALESTATE_AGENT_SUPPORT_FREE',__('https://wordpress.org/support/theme/realestate-agent','realestate-agent'));
}
if ( ! defined( 'REALESTATE_AGENT_REVIEW_FREE' ) ) {
define('REALESTATE_AGENT_REVIEW_FREE',__('https://wordpress.org/support/theme/realestate-agent/reviews/#new-post','realestate-agent'));
}
if ( ! defined( 'REALESTATE_AGENT_DEMO_PRO' ) ) {
define('REALESTATE_AGENT_DEMO_PRO',__('https://www.misbahwp.com/demo/realestate-agent/','realestate-agent'));
}
if( ! defined( 'REALESTATE_AGENT_THEME_BUNDLE' ) ) {
define('REALESTATE_AGENT_THEME_BUNDLE',__('https://www.misbahwp.com/themes/wordpress-bundle/','realestate-agent'));
}

function realestate_agent_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( REALESTATE_AGENT_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'realestate-agent' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'realestate-agent' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( REALESTATE_AGENT_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'realestate-agent' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( REALESTATE_AGENT_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'realestate-agent' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','realestate-agent'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'realestate-agent'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-insidee">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'realestate-agent' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','realestate-agent'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( REALESTATE_AGENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'realestate-agent' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( REALESTATE_AGENT_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'realestate-agent' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( REALESTATE_AGENT_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'realestate-agent' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'realestate-agent' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $79."','realestate-agent'); ?></p>
					<p class="coupon"><?php esc_html_e('Exclusive Offer !! Get Our Theme Pack of 60+ WordPress Themes At 10% Off','realestate-agent'); ?><span class="coupon-code"><?php esc_html_e('"Themespack10"','realestate-agent'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( REALESTATE_AGENT_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'realestate-agent' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','realestate-agent'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','realestate-agent'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','realestate-agent'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','realestate-agent'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
