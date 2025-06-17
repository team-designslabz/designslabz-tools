<?php
class Designslabz_Admin_Footer {

    /**
     * Constructor that hooks into admin_menu to modify the admin footer.
     */
    public function __construct() {
        add_action( 'admin_menu', [ $this, 'customize_admin_footer' ] );
    }

    /**
     * Customizes the WordPress admin footer.
     */
    public function customize_admin_footer() {
        // Change the footer text to include the custom message
        add_filter( 'admin_footer_text', function() {
            return 'Powered by WordPress | Made by <a href="https://www.designslabz.com/" target="_blank">DesignsLabz</a>';
        });

        // Display WordPress version (e.g., Version 6.6.2)
        add_filter( 'update_footer', function( $text ) {
            return 'Version ' . get_bloginfo( 'version' );
        }, 9999);
    }
}
