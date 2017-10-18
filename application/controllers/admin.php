<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
$this->load->Model("admin_model"); 
}
	public function index()
	{
		$this->load->view('admin/index');
	}
	public function adminlogin()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|unique');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/index');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if($this->admin_model->can_login($username,$password))
			{  
                     $session_data = array(  
                          'id'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'admin/dashboard');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid email and Password');  
                     redirect(base_url() . 'admin');  
                }  
		}
	}
	public function dashboard()
	{
		$data['result']=$this->admin_model->get_data();
		//print_r($data);exit;
		$this->load->view('admin/dashboard',$data);
	}
	function deletedata($id)  
      {  
          $this->admin_model->del_data($id);
          redirect(base_url() . 'admin/dashboard');
      } 
function editdata($id)  
      {  
          $data=$this->admin_model->getsep_data($id);
          $this->load->view('admin/edit',$data[0]);
      } 
      function update()  
      {  
      	$id=$this->input->post('id');
          $this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Contact', 'required|numeric|min_length[9]|max_length[12]');
		if ($this->form_validation->run() == FALSE)
		{
			 redirect(base_url() . 'admin/editdata/'.$id);
		}
		else
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$address=$this->input->post('address');
			$data = array("name" =>$name,"email" =>$email,"mobile" =>$mobile,"address" =>$address);  
			$this->admin_model->update_data($data,$id);
				$this->session->set_flashdata('success', 'Updated Successfully');
				//echo "hi";
				redirect(base_url() . 'admin/editdata/'.$id);
			
		}
      } 
	function logout()  
      {  
           $this->session->unset_userdata('id');  
         redirect(base_url() . 'admin'); 
      }  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */