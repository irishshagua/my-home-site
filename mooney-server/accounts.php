<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>
  <? echo WebSiteTemplate::get_basic_head(); ?>
<body>
  <div id="main">
    
    <? echo WebSiteTemplate::get_nav_bar('accounts'); ?>
    <ul class='toggle'>
    	<li class='selected'><button>Live</button></li>
    	<li><button>Dev</button></li>
    </ul>
    <iframe id='accounts-instance' src="https://devaccounts-devmooneyserver.rhcloud.com/AccountsUI" height="800" width="100%"></iframe>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>
  
  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
  <script 
</body>
</html>
