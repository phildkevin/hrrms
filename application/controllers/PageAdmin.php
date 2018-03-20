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

						switch ($page) {
							case 'dashboard':
								$data['icon'] = "fa fa-fw fa-dashboard";
								break;
							case 'setup':
								$data['icon'] = "fa fa-fw fa-cogs";
								break;
							case 'reservation':
								$data['icon'] = "fa fa-fw fa-calendar-check-o";
								break;
							case 'rooms':
								$data['icon'] = "fa fa-fw fa-bed";
								break;
						}

						$this->load->view('templates/header-admin',$data);
			      $this->load->view('admin/'.$page,$data);
			      $this->load->view('templates/footer-admin');

					}
			}

		}

}
 ?>
