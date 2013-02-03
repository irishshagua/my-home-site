<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>
  <? echo WebSiteTemplate::get_basic_head(); ?>
  <body>
    <div id="main">
    
      <? echo WebSiteTemplate::get_nav_bar('projects'); ?>
    
      <div id="site_content">
        <!-- Page Specific Content Goes Here -->
        <p>This is a list of the projects that I'm messing around with. They range from the silly, to the.. eh... sillyer.</p>
        <h4>Projects</h4>
        <p>
            <ul>
                <li>
                    <h5><a href="proj_accounts.php">Accounts</a></h5>
                    <details>This is a home accounts application built with JEE technologies.</details>
                </li>
                <li>
                    <h5><a href="freedom_travel_android_app.php">Android App</a></h5>
                    <details>A <i>Deals of the Week</i> Android App for my sisters travel agency (<a href="http://www.freedomtravel.ie">Freedom Travel</a>)</details>
                </li>
                <li>
                    <h5><a href="pub_list.php">Drinking</a></h5>
                    <details>A listing of all the pubs that me and Kev (弟弟) have done in Dublin. Using <a href="http://www.openstreetmap.org/">OSM</a> for the maps</details>
                </li>
                <li>
                    <h5><a href="zombies.php">Zombies</a></h5>
                    <details>Some testing of the canvas element. A stupid zombie game...</details>
                </li>
                <li>
                    <h5><a href="https://github.com/irishshagua/holiday-tracker">Timesheets</a></h5>
                    <details>Practicing <a href="http://www.scala-lang.org/">Scala</a> by trying to implement a holiday tracking web app using the <a href="http://www.playframework.org/">Play framework</a></details>
                </li>
            </ul>
        </p>
      </div>
    
      <? echo WebSiteTemplate::get_footer_bar(); ?>
  
    </div>
  
    <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
  </body>
</html>
