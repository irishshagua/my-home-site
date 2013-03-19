<?php include 'php-cms/templating/WebSiteTemplate.php' ?>

<!DOCTYPE HTML>
<html>
  <? echo WebSiteTemplate::get_basic_head(); ?>
<body>
  <div id="main">
    
    <? echo WebSiteTemplate::get_nav_bar('accounts'); ?>
    <ul class='toggle floatright'>
      <li class='selected'><a>Live</a></li>
      <li><a>Dev</a></li>
    </ul>
    <iframe id='accounts-instance' src="https://devaccounts-devmooneyserver.rhcloud.com/AccountsUI" height="800" width="100%"></iframe>
    
    <? echo WebSiteTemplate::get_footer_bar(); ?>
  
  </div>
  
  <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
  <script>
    $(document).ready(function() {
      accounts_instances = {
        'Live':'https://devaccounts-devmooneyserver.rhcloud.com/AccountsUI', 
        'Dev':'https://accounts-mooneyserver.rhcloud.com/AccountsUI'
      };

      $('ul.toggle li').click(function(event) {
        if ($(this).attr('class') == 'selected') return;
        
        // Remove selected css from all li's
        $(this).parent().find('li').each(function() {
            $(this).removeClass('selected');
        });
        
        // Add selected to clicked li
        $(this).addClass('selected');
        
        // Fire iFrame Reload
        $('#accounts-instance').attr('src', accounts_instances[$(this).text()]);
      });
    });
  </script>
</body>
</html>
