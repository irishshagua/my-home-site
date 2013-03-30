<?php
	include ($_SERVER['DOCUMENT_ROOT'] . "/php-cms/templating/Notifications.php");
	
	BlogManager::$_path = $_SERVER['DOCUMENT_ROOT'] . "/proj/blog/entries/";
	
	class BlogManager {
		
		public static $_blogs_per_page = 3;
		public static $_path;
		public static $_new_blog_entries_file = "entries.data";
		
		/**
		 * This will return the page formatted blog entry
		 * If either the content for the blog or the associated
		 * meta data for the blog is not present, then this method
		 * redirect to the 404 page...
		 */
		public static function get_specific_blog($blog_name) {
			$content_file = self::$_path . "$blog_name.blog";
			$meta_file = self::$_path . "$blog_name.json";
			
			if ( !file_exists($content_file) ) {
				return Notification::show_error("Could not find blog entry [$blog_name]");
			}
			
			if ( !file_exists($meta_file) ) {
				return Notification::show_error("Could not find meta data associated with [$blog_name]");
			}
			
			return BlogManager::convert_filename_to_heading($blog_name) 
					. file_get_contents( $content_file );
		}
		
		/**
		 *
		 */
		public static function get_top_blogs() {
			$content = "";
			foreach ( BlogManager::get_top_blog_names() as $blog_entry ) {
				$content .= BlogManager::get_specific_blog($blog_entry);
			}
			
			return $content;
		}
		
		/**
		 *
		 */
		private static function get_top_blog_names() {
			return file(self::$_path . self::$_new_blog_entries_file);
		}
		
		private static function convert_filename_to_heading($blog_name) {
			return "<h2><a href='blog?entry=$blog_name'>" . ucwords(str_replace("_", " ", $blog_name)) . "</a></h2>";
		}
	}
?>
