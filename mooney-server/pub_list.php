<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>

<? echo WebSiteTemplate::get_basic_head(); ?>

<body>
  <div id="main">
    
    <? echo WebSiteTemplate::get_nav_bar('pub_list'); ?>
    
    
    <div id="site_content">
    	<iframe src="proj/pubs/map.html" width="100%" height="500px"></iframe>
        <p>This is a simple map to keep track of the pubs that me and my brother have drank in, in Dublin. 
    	It is our stupid belief that we will one day get them all.</p>
        <p>If you have trouble viewing the map, try this <a href="proj/pubs/map.html">link</a></p>
    </div>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>

  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
</body>
</html>
