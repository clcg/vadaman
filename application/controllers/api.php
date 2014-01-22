<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class API extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('api_model');
  }

  /**
   * Index
   *
   * @author  Nikhil Anand, Sean Ephraim, Zachary Ladlie
   * @access  public
   * @return  string  API search results
   */
  public function index() {
    if ( ! empty($_GET)) {
      // Prevent XSS
      $_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
      return $this->api_model->api_bootstrap($_GET);
    } 
    else {
      // No parameters given
      header('Content-type: text/plain');
      print "How may I help you?";
      exit(10);
    }
  }
}




