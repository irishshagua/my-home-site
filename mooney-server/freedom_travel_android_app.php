<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>
  <? echo WebSiteTemplate::get_basic_head(); ?>
  <body>
    <div id="main">
    
      <? echo WebSiteTemplate::get_nav_bar('freedom_travel_android_app'); ?>
    
      <div id="site_content">
        <!-- Page Specific Content Goes Here -->
        <p>Some test content</p>
      </div>
    
      <? echo WebSiteTemplate::get_footer_bar(); ?>
  
    </div>
  
    <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
  </body>
</html>
