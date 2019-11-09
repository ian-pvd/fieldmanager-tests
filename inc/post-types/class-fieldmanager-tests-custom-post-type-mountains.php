<?php
/**
 * Mountains Custom Post Type
 *
 * @package Fieldmanager_Tests
 */

/**
 * Mountains Custom Post Type class.
 */
class Fieldmanager_Tests_Custom_Post_Type_Mountains {

	/**
	 * Create the post type.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'create_post_type' ] );
	}

	/**
	 * Define Mountain custom post type.
	 */
	public function create_post_type() {
		$labels = [
			'name'                  => _x( 'Mountains', 'Post Type General Name', 'fieldmanager-tests' ),
			'singular_name'         => _x( 'Mountain', 'Post Type Singular Name', 'fieldmanager-tests' ),
			'menu_name'             => __( 'Mountains', 'fieldmanager-tests' ),
			'name_admin_bar'        => __( 'Mountain', 'fieldmanager-tests' ),
			'archives'              => __( 'Item Archives', 'fieldmanager-tests' ),
			'attributes'            => __( 'Mountain Attributes', 'fieldmanager-tests' ),
			'parent_item_colon'     => __( 'Parent Item:', 'fieldmanager-tests' ),
			'all_items'             => __( 'All Mountains', 'fieldmanager-tests' ),
			'add_new_item'          => __( 'Add A New Mountain', 'fieldmanager-tests' ),
			'add_new'               => __( 'Add Mountain', 'fieldmanager-tests' ),
			'new_item'              => __( 'New Item', 'fieldmanager-tests' ),
			'edit_item'             => __( 'Edit Mountain', 'fieldmanager-tests' ),
			'update_item'           => __( 'Update Item', 'fieldmanager-tests' ),
			'view_item'             => __( 'View Item', 'fieldmanager-tests' ),
			'view_items'            => __( 'View Items', 'fieldmanager-tests' ),
			'search_items'          => __( 'Search Item', 'fieldmanager-tests' ),
			'not_found'             => __( 'Not found', 'fieldmanager-tests' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'fieldmanager-tests' ),
			'featured_image'        => __( 'Photo of Mountain', 'fieldmanager-tests' ),
			'set_featured_image'    => __( 'Add photo of mountain', 'fieldmanager-tests' ),
			'remove_featured_image' => __( 'Remove photo of mountain', 'fieldmanager-tests' ),
			'use_featured_image'    => __( 'Use as photo of mountain', 'fieldmanager-tests' ),
			'insert_into_item'      => __( 'Insert into item', 'fieldmanager-tests' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'fieldmanager-tests' ),
			'items_list'            => __( 'Items list', 'fieldmanager-tests' ),
			'items_list_navigation' => __( 'Items list navigation', 'fieldmanager-tests' ),
			'filter_items_list'     => __( 'Filter items list', 'fieldmanager-tests' ),
		];

		$args = [
			'label'               => __( 'Mountain', 'fieldmanager-tests' ),
			'description'         => __( 'Information on individual mountain summits.', 'fieldmanager-tests' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'          => [],
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		];

		register_post_type( 'mountains', $args );

	}
}

$custom_post_type_mountains = new Fieldmanager_Tests_Custom_Post_Type_Mountains();
