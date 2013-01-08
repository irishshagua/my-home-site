<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>

<? echo WebSiteTemplate::get_basic_head(); ?>

<body>
  <div id="main">
    
    <? echo WebSiteTemplate::get_nav_bar('contact'); ?>

    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <a href="http://ie.linkedin.com/pub/brian-mooney/13/520/7aa">
            <img src="http://aux.iconpedia.net/uploads/1027281477.png" alt="Contact Through Linkedin"  height="100"/>
          </a>
          <h3>Linked In</h3>
        </div>

        <div class="sidebar">
          <a href="https://github.com/irishshagua">
            <img src="http://octodex.github.com/images/homercat.png" alt="Contact Through Github"  height="150"/>
          </a>
          <h3>Github</h3>
        </div>

        <div class="sidebar">
          <img src="http://aux4.iconpedia.net/uploads/987089190.png" alt="Contact Through Skype"  height="100"/>
          <h3>Skype</h3>
          <p>SkypeName: irishshagua</p>
        </div>

        <div class="sidebar">
          <a href="mailto:brian_satchwannabe@hotmail.com">
            <img src="http://cdn1.iconfinder.com/data/icons/defaulticon/icons/png/128x128/mail.png" alt="brian_satchwannabe@hotmail.com"  height="100"/>
          </a>
          <h3>Email</h3>
          <p>brian_satchwannabe@hotmail.com</p>
        </div>
      </div>

      <div class="content">
        <h1>Contact</h1>
        <p>Feel free to contact me if you like. I'm always happy to chat about interesting open source projects or photography or Zombie movies or anything really. 
           Contact details are in the right hand pane.</p>
      </div>
    </div>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>
  
  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
</body>
</html>
