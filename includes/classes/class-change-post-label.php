<?php
class Designslabz_Change_Post_Label {

	/**
	 * Constructor that hooks into the init action to modify the post type labels.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'change_post_labels' ] );
	}

	/**
	 * Change the labels of the 'post' post type to 'Blog Post' and 'Blog Posts'.
	 */
	public function change_post_labels() {
		global $wp_post_types;

		// Check if the 'post' post type is set
		if ( isset( $wp_post_types['post'] ) ) {
			// Modify the 'post' post type labels
			$wp_post_types['post']->labels->name = 'Blog Posts'; // Plural form
			$wp_post_types['post']->labels->singular_name = 'Blog Post'; // Singular form
			$wp_post_types['post']->labels->menu_name = 'Blog Posts'; // Menu label
			$wp_post_types['post']->labels->name_admin_bar = 'Blog Post'; // Admin bar label
			$wp_post_types['post']->labels->add_new = 'Add New Blog Post'; // Button for adding new
			$wp_post_types['post']->labels->add_new_item = 'Add New Blog Post';
			$wp_post_types['post']->labels->edit_item = 'Edit Blog Post';
			$wp_post_types['post']->labels->new_item = 'New Blog Post';
			$wp_post_types['post']->labels->view_item = 'View Blog Post';
			$wp_post_types['post']->labels->search_items = 'Search Blog Posts';
			$wp_post_types['post']->labels->not_found = 'No Blog Posts found';
			$wp_post_types['post']->labels->not_found_in_trash = 'No Blog Posts found in Trash';
		}
	}
}
