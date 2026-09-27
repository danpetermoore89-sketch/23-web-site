<?php
/**
 * Runtime assertions executed inside clean WordPress Playground instances.
 *
 * @package TwentyThreeWeb
 */

if ( ! defined( 'ABSPATH' ) ) {
	require_once '/wordpress/wp-load.php';
}

$twentythree_web_results = array(
	'wordpress' => get_bloginfo( 'version' ),
	'php'       => PHP_VERSION,
	'passed'    => array(),
	'failed'    => array(),
);

/**
 * Record a runtime assertion.
 *
 * @param bool   $condition Whether the assertion passed.
 * @param string $message   Human-readable assertion label.
 * @return void
 */
function twentythree_web_test_assert( $condition, $message ) {
	global $twentythree_web_results;
	$bucket = $condition ? 'passed' : 'failed';
	$twentythree_web_results[ $bucket ][] = $message;
}

/**
 * Collect names from a parsed block tree.
 *
 * @param array<int, array<string, mixed>> $blocks Parsed blocks.
 * @param string[]                         $names  Collected names.
 * @return void
 */
function twentythree_web_collect_blocks( $blocks, &$names ) {
	foreach ( $blocks as $block ) {
		if ( ! empty( $block['blockName'] ) ) {
			$names[] = $block['blockName'];
		}
		if ( ! empty( $block['innerBlocks'] ) ) {
			twentythree_web_collect_blocks( $block['innerBlocks'], $names );
		}
	}
}

$theme  = wp_get_theme();
$parent = $theme->parent();

twentythree_web_test_assert( 'twentythree-web' === get_stylesheet(), '23 Web child theme is active' );
twentythree_web_test_assert( 'twentythree-theme' === get_template(), 'Template header resolves the 23 Theme parent' );
twentythree_web_test_assert( '23 Web' === $theme->get( 'Name' ) && '0.1.0' === $theme->get( 'Version' ), 'Child theme identity and version are correct' );
twentythree_web_test_assert( $parent && '23 Theme' === $parent->get( 'Name' ), 'Parent theme is installed and recognised' );
twentythree_web_test_assert( wp_is_block_theme(), 'Active child is recognised as a block theme' );
twentythree_web_test_assert( defined( 'TWENTYTHREE_CORE_VERSION' ) && '0.2.0' === TWENTYTHREE_CORE_VERSION, '23 Core 0.2.0 is active' );

foreach ( array( 'index', 'page', 'single' ) as $fallback_slug ) {
	$path = get_template_directory() . '/templates/' . $fallback_slug . '.html';
	twentythree_web_test_assert( is_readable( $path ), 'Parent fallback template is readable: ' . $fallback_slug );
	$fallback_template = get_block_template( 'twentythree-web//' . $fallback_slug, 'wp_template' );
	twentythree_web_test_assert( $fallback_template instanceof WP_Block_Template && $fallback_slug === $fallback_template->slug, 'WordPress resolves parent fallback template: ' . $fallback_slug );
}
twentythree_web_test_assert( is_readable( get_stylesheet_directory() . '/templates/front-page.html' ), 'Child front-page template is readable' );
twentythree_web_test_assert( is_readable( get_stylesheet_directory() . '/parts/header.html' ) && is_readable( get_stylesheet_directory() . '/parts/footer.html' ), 'Branded header and footer overrides are readable' );
$front_template = get_block_template( 'twentythree-web//front-page', 'wp_template' );
twentythree_web_test_assert( $front_template instanceof WP_Block_Template && 'front-page' === $front_template->slug, 'WordPress resolves the child front-page template' );

$theme_json = json_decode( file_get_contents( get_stylesheet_directory() . '/theme.json' ), true );
twentythree_web_test_assert( is_array( $theme_json ) && 3 === $theme_json['version'], 'theme.json parses as version 3' );
$expected_palette = array(
	'black'     => '#09080a',
	'white'     => '#ffffff',
	'off-white' => '#f7f5f7',
	'grey-700'  => '#555158',
	'grey-300'  => '#d6d5d7',
	'mint'      => '#61ebb6',
	'orchid'    => '#dd75e7',
);
$actual_palette = array();
foreach ( $theme_json['settings']['color']['palette'] as $colour ) {
	$actual_palette[ $colour['slug'] ] = strtolower( $colour['color'] );
}
twentythree_web_test_assert( $expected_palette === $actual_palette, 'Brand palette matches the approved exact values' );

foreach ( array( 'space-grotesk-latin.woff2', 'source-sans-3-latin.woff2', 'source-sans-3-italic-latin.woff2', 'OFL-Space-Grotesk.txt', 'OFL-Source-Sans-3.txt' ) as $font_asset ) {
	twentythree_web_test_assert( is_readable( get_stylesheet_directory() . '/assets/fonts/' . $font_asset ), 'Font asset is bundled: ' . $font_asset );
}

$registry = WP_Block_Patterns_Registry::get_instance();
$pattern  = $registry->get_registered( 'twentythree-web/homepage-starter' );
twentythree_web_test_assert( is_array( $pattern ) && ! empty( $pattern['content'] ), 'Homepage starter pattern is registered and insertable' );
$pattern_content = is_array( $pattern ) ? $pattern['content'] : '';
$sections        = parse_blocks( $pattern_content );
$sections        = array_values(
	array_filter(
		$sections,
		static function ( $block ) {
			return ! empty( $block['blockName'] );
		}
	)
);
twentythree_web_test_assert( 9 === count( $sections ), 'Homepage starter contains nine complete top-level sections' );
$all_sections_locked = true;
foreach ( $sections as $section ) {
	if ( 'core/group' !== $section['blockName'] || 'contentOnly' !== ( $section['attrs']['templateLock'] ?? '' ) ) {
		$all_sections_locked = false;
	}
}
twentythree_web_test_assert( $all_sections_locked, 'Every homepage section protects its internal layout with contentOnly locking' );

$admin_users = get_users( array( 'role' => 'administrator', 'number' => 1 ) );
$admin_id    = $admin_users ? $admin_users[0]->ID : wp_create_user( 'qa-admin', wp_generate_password(), 'qa-admin@example.test' );
( new WP_User( $admin_id ) )->set_role( 'administrator' );
wp_set_current_user( $admin_id );

foreach ( array( 'Home', 'Work', 'Services', 'Care', 'Contact', 'Privacy Policy', 'Cookie Policy' ) as $page_title ) {
	$page_id = wp_insert_post(
		array(
			'post_title'  => $page_title,
			'post_name'   => sanitize_title( $page_title ),
			'post_status' => 'publish',
			'post_type'   => 'page',
		)
	);
	if ( 'Home' === $page_title ) {
		$home_id = $page_id;
	}
}
wp_update_post( array( 'ID' => $home_id, 'post_content' => $pattern_content ) );
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $home_id );

$upload = wp_upload_bits( '23-web-wordmark-compact.png', null, file_get_contents( get_stylesheet_directory() . '/assets/brand/23-web-wordmark-compact.png' ) );
$logo_id = 0;
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
twentythree_web_test_assert( $logo_id > 0 && has_custom_logo(), 'Site Logo asset can be uploaded and configured' );
$icon_upload = wp_upload_bits( 'site-icon-512.png', null, file_get_contents( get_stylesheet_directory() . '/assets/brand/site-icon-512.png' ) );
$icon_id     = 0;
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
twentythree_web_test_assert( $icon_id > 0 && $icon_id === (int) get_option( 'site_icon' ), 'Square monogram can be configured as the Site Icon' );

$header_markup = file_get_contents( get_stylesheet_directory() . '/parts/header.html' );
$footer_markup = file_get_contents( get_stylesheet_directory() . '/parts/footer.html' );
twentythree_web_test_assert( false !== strpos( $header_markup, '<!-- wp:site-logo' ), 'Header uses the Site Logo block' );
twentythree_web_test_assert( false !== strpos( $header_markup, '<!-- wp:navigation' ) && false !== strpos( $header_markup, '/contact/' ), 'Header contains responsive navigation and contact action' );
twentythree_web_test_assert( false !== strpos( $footer_markup, 'Services' ) && false !== strpos( $footer_markup, 'Navigate' ) && false !== strpos( $footer_markup, 'West Yorkshire' ), 'Footer contains required information columns and location' );
$rendered_header = do_blocks( $header_markup );
$rendered_footer = do_blocks( $footer_markup );
twentythree_web_test_assert( false !== strpos( $rendered_header, 'custom-logo' ) && false !== strpos( $rendered_header, 'wp-block-navigation' ), 'Configured logo and navigation render in the header' );
twentythree_web_test_assert( false !== strpos( $rendered_footer, 'hello@23web.co.uk' ) && false !== strpos( $rendered_footer, 'wp-block-navigation' ), 'Contact and navigation render in the footer' );

$override_marker = 'QA database template override';
$override_id     = wp_insert_post(
	array(
		'post_type'    => 'wp_template',
		'post_name'    => 'front-page',
		'post_title'   => 'Front Page',
		'post_status'  => 'publish',
		'post_content' => '<!-- wp:paragraph --><p>' . $override_marker . '</p><!-- /wp:paragraph -->',
	)
);
wp_set_object_terms( $override_id, 'twentythree-web', 'wp_theme' );
$stored_override = get_block_template( 'twentythree-web//front-page', 'wp_template' );
twentythree_web_test_assert( $stored_override instanceof WP_Block_Template && 'custom' === $stored_override->source && false !== strpos( $stored_override->content, $override_marker ), 'Database-stored template override takes precedence for Administrators' );
wp_delete_post( $override_id, true );

$manager_id = wp_create_user( 'qa-manager', wp_generate_password(), 'qa-manager@example.test' );
$manager    = new WP_User( $manager_id );
$manager->set_role( 'twentythree_site_manager' );
wp_set_current_user( $manager_id );
twentythree_web_test_assert( current_user_can( 'edit_post', $home_id ) && current_user_can( 'twentythree_manage_sections' ), '23 Site Manager can edit the homepage and approved sections' );
twentythree_web_test_assert( ! current_user_can( 'edit_theme_options' ) && ! current_user_can( 'twentythree_unlock_blocks' ), '23 Site Manager remains excluded from structural theme and lock controls' );

$context          = new WP_Block_Editor_Context( array( 'post' => get_post( $home_id ) ) );
$allowed          = apply_filters( 'allowed_block_types_all', true, $context );
$pattern_names    = array();
twentythree_web_collect_blocks( $sections, $pattern_names );
$disallowed_names = array_diff( array_unique( $pattern_names ), is_array( $allowed ) ? $allowed : array() );
twentythree_web_test_assert( empty( $disallowed_names ), '23 Core allows every block used by the homepage starter' );
$settings = apply_filters( 'block_editor_settings_all', array(), $context );
twentythree_web_test_assert( isset( $settings['canLockBlocks'] ) && false === $settings['canLockBlocks'], '23 Site Manager cannot unlock protected block structures' );

$edited_content = str_replace( 'Websites that do the hard work.', 'QA edited homepage heading.', $pattern_content );
$edited_content = str_replace( '/contact/', '/qa-contact/', $edited_content );
$edited_content = str_replace( 'Replace this placeholder with an image of the completed project.', 'QA project image alternative text.', $edited_content );
$edit_result    = wp_update_post( array( 'ID' => $home_id, 'post_content' => $edited_content ), true );
twentythree_web_test_assert( ! is_wp_error( $edit_result ) && false !== strpos( get_post_field( 'post_content', $home_id ), 'QA edited homepage heading.' ), '23 Site Manager can edit text, links and image alternative text' );

$reordered = array_values(
	array_filter(
		parse_blocks( get_post_field( 'post_content', $home_id ) ),
		static function ( $block ) {
			return ! empty( $block['blockName'] );
		}
	)
);
$first     = array_shift( $reordered );
$second    = array_shift( $reordered );
array_unshift( $reordered, $first );
array_unshift( $reordered, $second );
$reordered_content = serialize_blocks( $reordered );
wp_update_post( array( 'ID' => $home_id, 'post_content' => $reordered_content ) );
$after_reorder = array_values(
	array_filter(
		parse_blocks( get_post_field( 'post_content', $home_id ) ),
		static function ( $block ) {
			return ! empty( $block['blockName'] );
		}
	)
);
twentythree_web_test_assert( serialize_block( $after_reorder[0] ) === serialize_block( $second ), '23 Site Manager can reorder complete sections' );

array_pop( $after_reorder );
wp_update_post( array( 'ID' => $home_id, 'post_content' => serialize_blocks( $after_reorder ) ) );
$after_remove = array_values( array_filter( parse_blocks( get_post_field( 'post_content', $home_id ) ), static function ( $block ) { return ! empty( $block['blockName'] ); } ) );
twentythree_web_test_assert( 8 === count( $after_remove ), '23 Site Manager can remove a complete section' );
$locks_preserved = true;
foreach ( $after_remove as $section ) {
	if ( 'contentOnly' !== ( $section['attrs']['templateLock'] ?? '' ) ) {
		$locks_preserved = false;
	}
}
twentythree_web_test_assert( $locks_preserved, 'Internal layout protection survives content edits and section operations' );

wp_set_current_user( $admin_id );
twentythree_web_test_assert( current_user_can( 'edit_theme_options' ) && current_user_can( 'twentythree_unlock_blocks' ), 'Administrator retains structural and lock control' );

$rendered_content = do_blocks( $pattern_content );
twentythree_web_test_assert( false !== strpos( $rendered_content, 'Websites that do the hard work.' ) && false !== strpos( $rendered_content, 'Start a conversation' ), 'Homepage pattern renders its opening and closing content' );
twentythree_web_test_assert( false !== strpos( $rendered_content, 'project-placeholder.svg' ) && false !== strpos( $rendered_content, 'portrait-placeholder.svg' ), 'Editable image placeholders render from local theme assets' );

$twentythree_web_results['summary'] = sprintf(
	'%d passed, %d failed',
	count( $twentythree_web_results['passed'] ),
	count( $twentythree_web_results['failed'] )
);

$output_path = defined( 'TWENTYTHREE_WEB_QA_OUTPUT' ) ? TWENTYTHREE_WEB_QA_OUTPUT : sys_get_temp_dir() . '/twentythree-web-qa.json';
file_put_contents( $output_path, wp_json_encode( $twentythree_web_results, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

if ( $twentythree_web_results['failed'] ) {
	throw new RuntimeException( '23 Web runtime QA failed: ' . implode( '; ', $twentythree_web_results['failed'] ) );
}
