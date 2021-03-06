<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

  function __constuct() {
    parent::__constuct();
  }

  /**
   * Cannot Contain
   *
   * Checks if the user input contains a specified string.
   *
   * @author  Sean Ephraim
   * @access  public
   * @param   string The contents of the HTML input.
   * @param   string The parameter passed when this rule is set.
   * @return  boolean
   */
  function cannot_contain($str, $field){
    $this->CI->form_validation->set_message('cannot_contain', "%s cannot contain the text \"" . $field . "\".");
    if(stristr($field, $str) === FALSE) {
      return FALSE;
    }
    return TRUE;
  }
}

// END MY Form Validation Class

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */
