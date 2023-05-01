<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogIn extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function userLogIn()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|Valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('Home');
        }
        else
        {
			$this->load->model('user_Model');
			$result = $this->user_Model->signInUser();

			if($result != false){

				$user_data = array(
					'user_id'=>$result->id,
					'fname'=>$result->fName,
					'lname'=>$result->lName,
					'email'=>$result->email,
					'loggedin'=>TRUE

				);

				$this->session->set_userdata($user_data);
				$this->load->view('adminPage');

			}else{
				$this->session->set_flashdata('error','Wrong Email or Password');
				redirect('Home');
			}

        }

		// $this->load->view('adminPage');
	}
}
