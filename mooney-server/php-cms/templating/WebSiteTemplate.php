<?php

include 'SitePageMeta.php';

class WebSiteTemplate {

  public static function get_basic_head() {
    $head = '<head>
               <title>Mooney Server</title>
               <meta name="description" content="Personal website for Brian Mooney" />
               <meta name="keywords" content="java, blog, mooney, automation" />
               <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  
               <link rel="stylesheet" type="text/css" href="css/style.css" />
  
               <!-- modernizr enables HTML5 elements and feature detects -->
               <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
             </head>';

    return $head;
  }

  public static function get_nav_bar($current_page) {
    
    $nav_bar =  '<header>
                  <div id="logo">
                    <div id="logo_text">
                      <h1><a href="index.html">Mooney<span class="logo_divider_colour"> {: </span>
		            <span class="logo_colour">Server</span>
	                  </a>
 	              </h1>
                      <h2>Blog, Experiment and Family Happiness</h2>
                    </div>
                  </div>
                  <nav>
                    <ul class="sf-menu" id="nav">
                 ';
   
    foreach (SitePageMeta::get_site_pages() as $page) {
      $nav_bar = WebSiteTemplate::add_menu_item($page, $current_page, $nav_bar);
    }
    
    $nav_bar = $nav_bar . '</ul></nav></header>';

    return $nav_bar;
  }

  /*
  * Recursive function to add nav menu items
  */
  private static function add_menu_item($page, $current_page, $nav_bar) {
    if ($page->has_children()) {
      $nav_bar = $nav_bar . '<li><a>' . $page->_display_name . '</a>';
      $nav_bar = $nav_bar . '<ul><li><a href="#"></a></li>';
      
      foreach($page->_child_pages as $child_page) {
        $nav_bar = WebSiteTemplate::add_menu_item($child_page, $current_page, $nav_bar);
      }
      
      $nav_bar = $nav_bar . '</ul></li>';
    } else {
      if (strcmp($page->_page_url, $current_page) == 0) {
        $nav_bar = $nav_bar . '<li class="selected"><a>'.$page->_display_name.'</a></li>';
      } else {
        $nav_bar = $nav_bar . '<li><a href="'.$page->_page_url.'">'.$page->_display_name.'</a></li>';
      }
    }

    return $nav_bar;
  }

  public static function get_footer_bar() {
    $footer =  '<footer>
                  <p><a href="http://www.css3templates.co.uk">Site Design By..</a>  |  Hosted by <a href="http://www.appfog.com/">AppFog</a></p>
                </footer>';

    return $footer;
  }

  /*
  * JS libs are placed below the footer to improve
  * page load performance.
  */
  public static function get_tail_loaded_js() {
    $tail_js =  '<script type="text/javascript" src="js/jquery.js"></script>
                 <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
                 <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
                 <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
                 <script type="text/javascript">
                   $(document).ready(function() {
                     $("#images").kwicks({
                       max : 600,
                       spacing : 2
                     });
                     $("ul.sf-menu").sooperfish();
                   });
                 </script>';

    return $tail_js;
  }
}
?>
