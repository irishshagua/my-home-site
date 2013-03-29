<?php
	class Notification {
		
		private static $INFO = "info_dialog_box";
		private static $ERROR = "error_dialog_box";
		
		/**
		 * Show an information dialog
		 */
		public static function show_info($msg) {
			return self::show(self::$INFO, $msg);
		}
		
		/**
		 * Show an error dialog
		 */
		public static function show_error($msg) {
			return self::show(self::$ERROR, $msg);
		}
		
		/**
		 * Build the notification div using the 
		 * appropriate css class and add the msg.
		 * The message can be formatted with 
		 * whatever html formatting is required.
		 */
		private static function show($type, $msg) {
			return "<div class='$type'>$msg</div>";
		}
	}
?>
