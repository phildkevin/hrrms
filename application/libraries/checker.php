<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checker {

  public function check($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = addslashes($data);

    return $data;
  }



}

?>
