<?php
/**
 * Representative content used only by local browser QA.
 *
 * @package TwentyThreeWeb
 */

if ( ! defined( 'ABSPATH' ) ) {
	require_once '/wordpress/wp-load.php';
}

$admins   = get_users( array( 'role' => 'administrator', 'number' => 1 ) );
$admin_id = $admins ? $admins[0]->ID : wp_create_user( 'admin', 'password', 'admin@example.test' );
( new WP_User( $admin_id ) )->set_role( 'administrator' );
wp_set_current_user( $admin_id );

$pattern = WP_Block_Patterns_Registry::get_instance()->get_registered( 'twentythree-web/homepage-starter' );
if ( ! $pattern || empty( $pattern['content'] ) ) {
	throw new RuntimeException( 'Homepage pattern is unavailable.' );
}

$pages = array();
foreach ( array( 'Home', 'Work', 'Services', 'Care', 'Contact', 'Blog', 'Privacy Policy', 'Cookie Policy' ) as $page_title ) {
	$page_id = wp_insert_post(
		array(
			'post_title'   => $page_title,
			'post_name'    => sanitize_title( $page_title ),
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_content' => 'Home' === $page_title ? $pattern['content'] : '<!-- wp:paragraph --><p>QA content for ' . esc_html( $page_title ) . '.</p><!-- /wp:paragraph -->',
		)
	);
	$pages[ $page_title ] = $page_id;
}

wp_insert_post(
	array(
		'post_title'   => 'A QA journal post',
		'post_name'    => 'qa-journal-post',
		'post_status'  => 'publish',
		'post_type'    => 'post',
		'post_excerpt' => 'Representative excerpt used to inspect the inherited index template.',
		'post_content' => '<!-- wp:paragraph --><p>Representative post content used to inspect the inherited single template.</p><!-- /wp:paragraph -->',
	)
);

update_option( 'blogname', '23 Web' );
update_option( 'blogdescription', 'Websites that do the hard work.' );
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $pages['Home'] );
update_option( 'page_for_posts', $pages['Blog'] );

$manager_id = username_exists( 'qa-manager' );
if ( ! $manager_id ) {
	$manager_id = wp_create_user( 'qa-manager', 'password', 'qa-manager@example.test' );
}
( new WP_User( $manager_id ) )->set_role( 'twentythree_site_manager' );

$upload = wp_upload_bits( '23-web-wordmark-compact.png', null, file_get_contents( get_stylesheet_directory() . '/assets/brand/23-web-wordmark-compact.png' ) );
if ( empty( $upload['error'] ) ) {
	$logo_id = wp_insert_attachment(
		array(
			'post_mime_type' => 'image/png',
			'post_title'     => '23 Web',
			'post_status'    => 'inherit',
		),
		$upload['file']
	);
	update_post_meta( $logo_id, '_wp_attachment_image_alt', '23 Web' );
	set_theme_mod( 'custom_logo', $logo_id );
}

$icon_upload = wp_upload_bits( 'site-icon-512.png', null, file_get_contents( get_stylesheet_directory() . '/assets/brand/site-icon-512.png' ) );
if ( empty( $icon_upload['error'] ) ) {
	$icon_id = wp_insert_attachment(
		array(
			'post_mime_type' => 'image/png',
			'post_title'     => '23 Web Site Icon',
			'post_status'    => 'inherit',
		),
		$icon_upload['file']
	);
	update_option( 'site_icon', $icon_id );
}

$navigation_content = '';
foreach ( array( 'Work', 'Services', 'Care' ) as $label ) {
	$navigation_content .= sprintf(
		'<!-- wp:navigation-link {"label":"%1$s","type":"page","id":%2$d,"url":"%3$s","kind":"post-type"} /-->',
		esc_attr( $label ),
		(int) $pages[ $label ],
		esc_url( get_permalink( $pages[ $label ] ) )
	);
}
wp_insert_post(
	array(
		'post_title'   => 'Primary Navigation',
		'post_name'    => 'primary-navigation',
		'post_status'  => 'publish',
		'post_type'    => 'wp_navigation',
		'post_content' => $navigation_content,
	)
);

flush_rewrite_rules();
