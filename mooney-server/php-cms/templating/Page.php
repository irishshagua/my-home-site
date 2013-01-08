<?php
class Page {

  public $_page_url;
  public $_display_name;
  public $_child_pages = array();

  public function __construct($page_url, $display_name) {
    $this->_page_url = $page_url;
    $this->_display_name = $display_name;
  }

  public function add_child($child_page) {
    array_push($this->_child_pages, $child_page);
  }

  public function has_children() {
    return count($this->_child_pages) > 0;
  }
}
?>
