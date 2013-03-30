<?php 
	include 'php-cms/templating/WebSiteTemplate.php';
	include 'php-cms/blog/BlogManager.php';
	
	$body = "";
	
	if ( isset( $_GET['entry'] ) ) {
		$body = BlogManager::get_specific_blog($_GET['entry']);
	} else {
		$body = BlogManager::get_top_blogs();
	}
?>

<!DOCTYPE HTML>
<html>
  <? echo WebSiteTemplate::get_basic_head(); ?>
  <body>
    <div id="main">
    
      <? echo WebSiteTemplate::get_nav_bar('blog'); ?>
    
      <div id="site_content">
        <div id="sidebar_container">
          <div class="sidebar">
            <h3>Previous Blog Entries</h3>
            <span>Need to actually do this... :)</span>
          </div>
        </div>
        
        <? echo $body; ?>
      </div>
    
      <? echo WebSiteTemplate::get_footer_bar(); ?>
  
    </div>
  
    <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
  </body>
</html>
