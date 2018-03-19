<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin Extends CI_Controller{

public function view(){


			if (isset($this->session->userdata['user'])) {
          redirect(base_url('admin/dashboard'));
      }else{
        $this->load->view('admin/login');
      }

		}

}
 ?>
