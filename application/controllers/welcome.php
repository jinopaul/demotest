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

	function __construct() {
parent::__construct();
$this->load->Model("user_model"); 
}
	public function index()
	{
		$this->load->view('userend');
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('mobile', 'Contact', 'required|numeric|min_length[9]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm-password]');
		$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('userend');
		}
		else
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$password=md5($this->input->post('password'));
			$address=$this->input->post('address');
			$data = array("name" =>$name,"email" =>$email,"mobile" =>$mobile,"password" =>$password,"address" =>$address);  
			$this->user_model->insert_data($data);
				$this->session->set_flashdata('success', 'Registered Successfully');
				//echo "hi";
				 redirect(base_url() . ''); 
			
		}
	}
	public function login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/index');
		}
		else
		{
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			if($this->user_model->can_login($email,$password))
			{  
                     $session_data = array(  
                          'email'     =>     $email  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'welcome/profile');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid email and Password');  
                     redirect(base_url() . '');  
                }  
		}
	}
	public function profile()
	{
		$session_id = $this->session->userdata('email');
		$data=$this->user_model->get_data($session_id);
		$this->load->view('profile',$data[0]);
	}
	function logout()  
      {  
           $this->session->unset_userdata('email');  
         redirect(base_url() . ''); 
      } 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */