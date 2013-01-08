<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>

<? echo WebSiteTemplate::get_basic_head(); ?>

<body>
  <div id="main">
    
    <? echo WebSiteTemplate::get_nav_bar('zombies'); ?>
    
    
    <div id="site_content">
      
      <div id="sidebar_container">
        <div class="sidebar">
          <a href="https://github.com/irishshagua/zombies">
            <img src="http://adam.sardar.me.uk/wp-content/uploads/2011/12/xcp-github-logo-460x327.png" alt="Zombie Library on Github"  height="100"/>
          </a>
          <h3>Zombie Code</h3>
        </div>
      </div>

      <div class="content">
        <p>This is a simple javascript game. It's basically just an experiment in how to use the HTML5 canvas tag. All the game logic is wrote in Javascript
           and the drawing is performed in a canvas element. At the moment, the game is pretty basic. You move your character (<i>The Hero</i>) with the arrow
           keys and try and stay away from the zombie. The longer you stay away from the zombie. The more points you get. Its just a base for the moment, but
           if I get a chance I'll try and expand it a little. You can visit the Git Hub page for the project if you want to see the code.
        </p>
        <iframe src="proj/zombies/zombies.html" width="600px" height="500px"></iframe>  
      </div>
    </div>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>
  
  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
</body>
</html>
