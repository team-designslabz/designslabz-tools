<?php
class Designslabz_Change_Howdy {

	/**
	 * Constructor that hooks into the gettext filter to change the "Howdy" text.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'init_hooks' ] );
	}

	/**
	 * Hook into gettext and admin_bar_menu actions.
	 */
	public function init_hooks() {
		add_filter( 'gettext', [ $this, 'change_howdy_text' ], 10, 3 );
	}

	/**
	 * Change "Howdy" to "Logged in as" in the admin bar.
	 *
	 * @param string $translated_text The translated text.
	 * @param string $text The original text.
	 * @param string $domain The text domain.
	 * @return string Modified text.
	 */
	public function change_howdy_text( $translated_text, $text, $domain ) {
		// Target variations of the Howdy text with different formats
		if ( strpos( $text, 'Howdy' ) !== false ) {
			$translated_text = str_replace( 'Howdy,', 'Logged in as', $translated_text );
		}
		return $translated_text;
	}
}
