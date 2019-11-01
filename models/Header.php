<?php
namespace Portal\Model\Header;

class Model
{
  public $template;
  public $data = array();

  public function __construct($route){
    global $portal;

    $current_page = (isset($route['controller']) ? $route['controller'] : ($route['page'] == '' ? 'home' : $route['page']));

    // Data to be passed to twig
    $this->data = array(
      'site_url' => $portal->site_url,
      'current_page' => $current_page,
      'logged_in' => $portal->logged_in
    );

    // Set template file
    $this->template = 'header.html.twig';

  }
}

?>
