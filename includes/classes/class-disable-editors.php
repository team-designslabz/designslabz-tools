<?php
class Designslabz_Disable_Editors {

	/**
	 * Constructor that disables the theme and plugin file editors.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'disable_file_editors' ] );
	}

	/**
	 * Disables the theme and plugin file editors.
	 */
	public function disable_file_editors() {
		// Disable the theme and plugin editors but allow file uploads and updates
		if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
			define( 'DISALLOW_FILE_EDIT', true );
		}
	}
}
