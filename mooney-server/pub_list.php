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
        <p>A full listing of licenced premises in Dublin can be viewed on the <a href="http://www.revenue.ie/en/tax/excise/index.html" target="_blank">revenue</a> site. Download the Liquor Licences spreadsheet. Couple of interesting facts: 
            <ul>
                <li>Dublin has 667 licenced pubs of the national total of 6513 (10.24%)</li>
                <li>However, it has 19.4% of the total licences (inclusive of Hotel, Brewer, Boat, Plane, etc...)</li>
            </ul>
            That would kind of suggest that there is more even distribution of pubs in the country than hotels and restaurants....
        </p>
    </div>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>

  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
</body>
</html>
