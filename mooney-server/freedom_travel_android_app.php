<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>
  <? echo WebSiteTemplate::get_basic_head(); ?>
  <body>
    <div id="main">
    
      <? echo WebSiteTemplate::get_nav_bar('freedom_travel_android_app'); ?>
    
      <div id="site_content">
        <!-- Page Specific Content Goes Here -->
        <h3>Description</h3>
        <p><a href="http://www.freedomtravel.ie">Freedom Travel</a> is a travel agency that my sister runs. I promised her that I'd try and do her a phone app for
        her birthday present (cheap... I know!) and this is the end result. It's a <i>Deal of the Week</i> app. It is built mostly with HTML5 technologies so should
        in theory run on any smart phone, but I've only tested it so far on Android. Plus the launch code is Android specific so there would be some extra work
        required to actually et this working on other platforms but if I get the time, I'll look into getting it running on Firefox OS.</p>
        
        <h3>Technology</h3>
        <p>The UI is designed using HTML5 (currently uses JQuery Mobile UI for the widgets but I'm not happy with the transitions so this may change). The data store
        s a cloud based Mongo DB instance, <a href="https://mongolab.com/welcome/">Mongo Labs</a> are hosting that. There is more info on the tech side on the project
        <a href="https://github.com/irishshagua/freedom-travel-deals-app/wiki/Freedom-Travel-Deals-App">wiki</a> on github.</p>
        
        <h3>Downloads</h3>
        <h4>Deals Content Management System</h4>
        <a href="http://ubuntuone.com/6LVjHPEGNOFDTigXFNbBwp">Download CMS</a>
        
        <h4>Freedom Travel Deals Android App</h4>
        <a href="http://ubuntuone.com/4u4ZF9NnI86TiaVFkbWm0Y">Download App</a>
      </div>
    
      <? echo WebSiteTemplate::get_footer_bar(); ?>
  
    </div>
  
    <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
  </body>
</html>
