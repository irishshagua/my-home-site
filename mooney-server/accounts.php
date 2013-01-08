<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>
  <? echo WebSiteTemplate::get_basic_head(); ?>
<body>
  <div id="main">
    
    <? echo WebSiteTemplate::get_nav_bar('accounts'); ?>
    
    <iframe src="https://devaccounts-devmooneyserver.rhcloud.com/AccountsUI" height="800" width="100%"></iframe>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>
  
  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
</body>
</html>
