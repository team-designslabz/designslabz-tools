<?php
class DesignsLabz_Upload_Size_Limiter {

   /**
	 * Constructor — Hooks upload limiter and UI size display.
	 */
	public function __construct() {
		// Apply limit to Media Library uploads
		add_filter('wp_handle_upload_prefilter', [$this, 'limit_upload_size']);

		// Change UI message (shows 32MB instead of default server limit)
		add_filter('upload_size_limit', [$this, 'adjust_ui_upload_limit']);
	}

	/**
	 * Enforces 32MB upload limit for Media Library uploads.
	 *
	 * @param array $file File upload array.
	 * @return array Modified file array with error message if over limit.
	 */
	public function limit_upload_size($file) {
		$limit_in_mb = 32;
		$limit_bytes = $limit_in_mb * 1024 * 1024;

		error_log("[Upload Limiter] File: {$file['name']} | Size: {$file['size']} bytes");

		if ($file['size'] > $limit_bytes) {
			error_log("[Upload Limiter] Rejected: File exceeds 32MB limit");
			$file['error'] = 'File size exceeds the 32MB limit.';
		}

		return $file;
	}

	/**
	 * Updates the UI max file size message in Media Library.
	 *
	 * @return int Upload size limit in bytes.
	 */
	public function adjust_ui_upload_limit() {
		return 32 * 1024 * 1024; // 32MB in bytes
	}
}

// Instantiate the limiter
new DesignsLabz_Upload_Size_Limiter();
