<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


// Register Custom Post Type
function custom_projects() {

	$labels = array(
		'name'                  => _x( 'projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Project', 'text_domain' ),
		'archives'              => __( 'Project Archives', 'text_domain' ),
		'attributes'            => __( 'Project Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Project Item:', 'text_domain' ),
		'all_items'             => __( 'All Projects', 'text_domain' ),
		'add_new_item'          => __( 'Add New Project', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Project', 'text_domain' ),
		'edit_item'             => __( 'Edit Project', 'text_domain' ),
		'update_item'           => __( 'Update Project', 'text_domain' ),
		'view_item'             => __( 'View Project', 'text_domain' ),
		'view_items'            => __( 'View Project', 'text_domain' ),
		'search_items'          => __( 'Search Project', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Projects list', 'text_domain' ),
		'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter projects list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'projects',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'project', 'text_domain' ),
		'description'           => __( 'project description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'custom_projects', 0 );

function events_post_type() {

    $labels = array(
        'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Events', 'text_domain' ),
        'name_admin_bar'        => __( 'Events', 'text_domain' ),
        'archives'              => __( 'Events Archives', 'text_domain' ),
        'attributes'            => __( 'Events Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Event', 'text_domain' ),
        'all_items'             => __( 'All Parents', 'text_domain' ),
        'add_new_item'          => __( 'Add New Event', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Event', 'text_domain' ),
        'edit_item'             => __( 'Edit Event', 'text_domain' ),
        'update_item'           => __( 'Update Event', 'text_domain' ),
        'view_item'             => __( 'View Event', 'text_domain' ),
        'view_items'            => __( 'View Events', 'text_domain' ),
        'search_items'          => __( 'Search Event', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into event', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this event', 'text_domain' ),
        'items_list'            => __( 'Events list', 'text_domain' ),
        'items_list_navigation' => __( 'Events list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter events list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Event', 'text_domain' ),
        'description'           => __( 'Events Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'taxonomies'            => array( 'category', 'events' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'events', $args );

}
add_action( 'init', 'events_post_type', 0 );