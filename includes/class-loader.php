<?php
class Designslabz_Tools_Loader {

	/**
	 * Initializes the plugin by loading necessary classes.
	 */
	public static function init() {
		require_once plugin_dir_path( __FILE__ ) . 'classes/class-admin-footer.php';
		require_once plugin_dir_path( __FILE__ ) . 'classes/class-change-howdy.php';
		require_once plugin_dir_path( __FILE__ ) . 'classes/class-change-post-label.php';
		require_once plugin_dir_path( __FILE__ ) . 'classes/class-disable-editors.php';

		// Initialize plugin features
		new Designslabz_Change_Howdy();
		new Designslabz_Change_Post_Label();
		new Designslabz_Admin_Footer();
		new Designslabz_Disable_Editors();
	}
}
