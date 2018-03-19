<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard Extends CI_Controller{

public function view(){

			$this->load->view('templates/header-admin');
      $this->load->view('admin/dashboard');
      $this->load->view('templates/footer-admin');

		}

}
 ?>
