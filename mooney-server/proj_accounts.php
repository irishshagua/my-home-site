<?php 
  include 'php-cms/templating/WebSiteTemplate.php';
  
  # Check the current build status
  $process = curl_init("https://gradletest-mooneyserver.rhcloud.com/job/Gradle_Accounts_build/lastBuild/api/json");
  curl_setopt($process, CURLOPT_USERPWD, "observer:83b6ec208dba4c8571410c7aed42c95e");
  curl_setopt($process, CURLOPT_TIMEOUT, 20);
  curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
  
  $json_response = json_decode(curl_exec($process));
  
  if ($json_response != null) {
    $build_url = $json_response->url;
    $last_built = $json_response->id;
    $build_result = $json_response->result;
  } else {
    $build_url = "";
    $last_built = "";
    $build_result = "ERROR";
  }
  
  if ($build_result === "SUCCESS") {
    $build_result = '<span style="color: #00ff00">SUCCESS</span>';
  } else {
    $build_result = '<span style="color: #ff0000">' . $build_result . '</span>';
  }
?>

<!DOCTYPE HTML>
<html>
  <? 
    $add_js_libs = array("http://code.jquery.com/jquery-1.9.1.js", "http://code.jquery.com/ui/1.10.1/jquery-ui.js");
    $add_css_libs = array("http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css");
    echo WebSiteTemplate::get_basic_head($add_js_libs, $add_css_libs); 
  ?>
  <body>
    <div id="ci-dialog" title="Accounts Build Status">
        <h4><a href="https://gradletest-mooneyserver.rhcloud.com/" target="_blank">Jenkins</a> Build Status</h4>
        <p><a href="<? echo $build_url ?>" target="_blank">Accounts Build</a>:
          <ul>
            <li>Status: <? echo $build_result ?></li>
            <li>Last Built: <? echo $last_built ?></li>
          </ul>
        </p>
    </div>
    <div id="main">
    
      <? echo WebSiteTemplate::get_nav_bar('proj_accounts'); ?>
    
      <div id="site_content">
        <!-- Page Specific Content Goes Here -->
        <p>This is a project to create a home accounts system. The app can be viewed <a href="/accounts">here</a> and is hosted on <a href="https://openshift.redhat.com">OpenShift</a>. The build system is currently controlled by <a href="https://gradletest-mooneyserver.rhcloud.com" target="_blank">Jenkins</a>. I'll update all this crap properly later...</p>
        
        <h3>Build Status</h3>
        <p id="check-build-btn" style="float: right; cursor: hand; cursor: pointer;">
          <img src="images/jenkins_link.png"/><br/>
          C.I. Build Status
        </p>
      </div>
    
      <? echo WebSiteTemplate::get_footer_bar(); ?>
  
    </div>
  
    <? echo WebSiteTemplate::get_tail_loaded_js(); ?>
    <script type="text/javascript">
      $(function() {
        $("#ci-dialog").dialog({
          autoOpen: false,
          modal: true,
          show: {
            effect: "highlight",
            duration: 2000
          },
          hide: {
            effect: "puff",
            duration: 700
          },
          buttons: {
            Ok: function() {
              $(this).dialog("close");
            }
          }
        });
        
        $("#check-build-btn").click(function() {
          $("#ci-dialog").dialog("open");
        });
      });
    </script>
  </body>
</html>
