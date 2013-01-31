<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>

<? echo WebSiteTemplate::get_basic_head(null, array('css/jquery.lightbox-0.5.css')); ?>

<body>
  <div id="main">
    
    <? echo WebSiteTemplate::get_nav_bar('photography'); ?>
    
    <div id="site_content">
      <h2>Portfolio</h2>
      <div id="gallery">
        <ul>
          <li>
            <a href="http://photos5.pix.ie/60/CE/60CE205DA4DF4EC78410D6289637A1EF-640.jpg" title="Spotted Leopard at Washington Zoo">
              <img src="http://photos5.pix.ie/60/CE/60CE205DA4DF4EC78410D6289637A1EF-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href="http://photos4.pix.ie/2E/C7/2EC769F13F6B4E7EABD490E6CD241E16-640.jpg" title="A Swan by The Grand Canal">
              <img src="http://photos4.pix.ie/2E/C7/2EC769F13F6B4E7EABD490E6CD241E16-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href="http://photos3.pix.ie/79/33/7933BE1E89474646B096978EF5C1E8EC-640.jpg" title="Old Man Plays the Er Hu">
              <img src="http://photos3.pix.ie/79/33/7933BE1E89474646B096978EF5C1E8EC-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href="http://photos2.pix.ie/4F/CE/4FCE8653A00A4AB381933920F4778C1C-640.jpg" title="Guitars and Er Hu">
              <img src="http://photos2.pix.ie/4F/CE/4FCE8653A00A4AB381933920F4778C1C-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href="http://photos5.pix.ie/A3/E0/A3E0C0D9736E499AA63FFFFFCA6B72E4-640.jpg" title="Philadelphia Town Hall">
              <img src="http://photos5.pix.ie/A3/E0/A3E0C0D9736E499AA63FFFFFCA6B72E4-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href="http://photos3.pix.ie/6D/0C/6D0C70F71CF2438DB11FA5C1E6D3970D-640.jpg" title="Ring of Kerry">
              <img src="http://photos3.pix.ie/6D/0C/6D0C70F71CF2438DB11FA5C1E6D3970D-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href="http://photos3.pix.ie/E0/D4/E0D4440822E24C1AB371AA80C6731708-640.jpg" title="Birds Nest Beijing">
              <img src="http://photos3.pix.ie/E0/D4/E0D4440822E24C1AB371AA80C6731708-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href=http://photos5.pix.ie/4E/C0/4EC0BDA0597743D491946417D6215EB2-640.jpg" title="Locked">
              <img src="http://photos5.pix.ie/4E/C0/4EC0BDA0597743D491946417D6215EB2-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href="http://photos3.pix.ie/81/6E/816E639DB4304BD0908D27CFD2A74DC6-640.jpg" title="Fruit And Wine">
              <img src="http://photos3.pix.ie/81/6E/816E639DB4304BD0908D27CFD2A74DC6-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
          <li>
            <a href="http://photos5.pix.ie/17/9B/179B5222817542348EFD62B8459C15DE-640.jpg" title="New York, New York">
              <img src="http://photos5.pix.ie/17/9B/179B5222817542348EFD62B8459C15DE-160.jpg" width="72" height="72" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </div>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>
  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
  <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $('#gallery a').lightBox();
    });
  </script>
</body>
</html>
