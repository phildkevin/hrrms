<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PageAdmin Extends CI_Controller{

		public function view($page){


			if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
			show_404();
			}else{

					if (!isset($this->session->userdata['user'])) {
						redirect(base_url());
					}else{
						$data['title'] = ucfirst($page);
						$data['page']  = $page;

						$this->load->view('templates/header-admin');
			      $this->load->view('admin/'.$page,$data);
			      $this->load->view('templates/footer-admin');

					}
			}

		}

}
 ?>
