<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('index');
	}
	public function blank(){
		$this->load->view('blank');
	}
	public function buttons(){
		$this->load->view('buttons');
	}
	public function flot(){
		$this->load->view('flot');
	}
	public function forms(){
		$this->load->view('forms');
	}
	public function grids(){
		$this->load->view('grids');
	}
	public function icons(){
		$this->load->view('icons');
	}
	public function morris(){
		$this->load->view('morris');
	}
	public function notifications(){
		$this->load->view('notifications');
	}
	public function panelswells(){
		$this->load->view('panelswells');
	}
	public function typography(){
		$this->load->view('typography');
	}
	public function tables(){
		$this->load->view('tables');
	}
	public function login(){
		$this->load->view('login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
