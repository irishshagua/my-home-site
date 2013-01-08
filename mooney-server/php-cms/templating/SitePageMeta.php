<?php

include 'Page.php';

class SitePageMeta {
  public static function get_site_pages() {
    $index = new Page('index', 'Home');
    $family = new Page('family', 'Family');
    $photography = new Page('photography', 'Photography');
    $blog = new Page('blog', 'Blog');
    $accounts = new Page('accounts', 'Accounts');

    $projects = new Page('#', 'Projects');
    $proj_accounts = new Page('proj_accounts', 'Accounts');
    $proj_freedom_travel = new Page('freedom_travel_android_app', 'Freedom Travel');
    $proj_zombies = new Page('zombies', 'Zombies');
    $proj_pubs = new Page('pub_list', 'Drinking');
    $projects->add_child($proj_accounts);
    $projects->add_child($proj_freedom_travel);
    $projects->add_child($proj_zombies);
    $projects->add_child($proj_pubs);

    $contact = new Page('contact', 'Contact Us');

    $SITE_PAGES = array();
    array_push($SITE_PAGES, $index, $family, $photography, $blog, $accounts, $projects, $contact);

    return $SITE_PAGES;
  }
}
?>
