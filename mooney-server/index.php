<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>
  <? echo WebSiteTemplate::get_basic_head(); ?>

<body>
  <div id="main">
    
    <? echo WebSiteTemplate::get_nav_bar('index'); ?>
    
    <!-- Rolling Image Nav Bar For Home Page -->
    <div id="site_content">
      <ul id="images">
        <li>
	  <a href="photography">
            <img src="http://photos5.pix.ie/83/DB/83DB5C4DEB9E483D8B728CC5A588A150-500.jpg" width="600" height="300" alt="photography" />
            <span>Photography</span>
          </a>
        </li>
        <li>
	  <a href="projects">
	    <img src="http://photos4.pix.ie/D4/56/D45636B010E440328E2D3E24D37870B9-0000316128-0003119645-00825L-90D09636F23B475A9FB7B0C692B1DD32.jpg" width="600" height="300" alt="code" />
            <span>Projects</span>
	  </a>
	</li>
        <li>
	    <a href="pub_list">
		<img src="http://photos2.pix.ie/1A/A6/1AA6DD188F3F46D6BA5C4FE216CCFC63-500.jpg" width="600" height="300" alt="pubs" />
		<span>Pub List</span>
	    </a>
	</li>
        <li>
	    <a href="blog">
		<img src="http://photos4.pix.ie/70/10/701022C242BB447A87D431F1A0954F62-500.jpg" width="600" height="300" alt="blog" />
		<span>Blog</span>
	    </a>
	</li>
        <li>
	    <a href="android">
		<img src="http://photos4.pix.ie/AC/C0/ACC00C2B866B4601B49255219CFE41FB-0000316128-0003119644-00614L-49C87930D7A94DAB9E4DFB2DBFD5D7E4.jpg" width="600" height="300" alt="android" />
		<span>Android</span>
	    </a>
	</li>
        <li>
	    <a href="family">
		<img src="http://photos3.pix.ie/81/6E/816E639DB4304BD0908D27CFD2A74DC6-500.jpg" width="600" height="300" alt="family" />
		<span>Family</span>
	    </a>
	</li>
      </ul>

    <!-- Page Content -->
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Cool News</h3>
          <h4>Ubuntu For Phones</h4>
          <p>Ubuntu has decided to launch in phones...<br /><a href="#">Read More</a></p>
        </div>

	<div class="sidebar">
          <h4>First App Release</h4>
          <p>
	      <a href="http://www.freedomtravel.ie">Freedom Travel</a> deal app has been published to the Android market...<br />
              <a href="#">Read More</a>
          </p>
        </div>
      </div>

      <div class="content">
        <h1>Welcome to my home website</h1>
	  <p>This is basically just a playground for messing around with things. Its very much a <i>Work In Progress</i>, hence the shitness.</p>
      </div>
    </div>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>
  
  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
</body>
</html>
