<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	 public function __construct(){
		 parent::__construct();
		 $this->load->model('myModel');
		 $this->load->helper(array('form','url','file'));
		 $this->load->library('session');
	 }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('WelcomePage');
		$this->load->view('footer');
		
	}
	public function loadPanel()
	{
		
		$this->load->view('home');
	}
	public function loadAddReport()
	{
		$this->load->view('header_employee');
		$this->load->view('add_report');
		//$this->load->view('footer');
	}
	public function loadContactUs()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function insContactUs()
	{
		$name=$this->input->post('name');
		$subject=$this->input->post('subject');
		$email=$this->input->post('email');
		$message=$this->input->post('message');
		$userData=array('name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message);
		$res=$this->myModel->addContact($userData);
		if($res){
			echo "message send successfully";
		}
		else{
			echo "Error while sending message";
		}
	}
	public function loadAbout()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');

	}
	public function signEmployee()
	{
		$result=$this->myModel->getCompanyName();
		$data['result']=$result;
		$this->load->view('header');
		$this->load->view('register_employee',$data);
	
	}
	public function signCompany()
	{
		$this->load->view('header');
		$this->load->view('register_company');
		
	}
	public function loadEmployeeLogin()
	{
		$this->load->view('header');
		$this->load->view('login_employee');
	
	}
	public function loadCompanyLogin()
	{
		$this->load->view('header');
		$this->load->view('login_company');
	
	}
	
	public function isLoginEmployee()
	{
		$email=$this->input->post('employee_email');
		$password=$this->input->post('employee_password');
		$result=$this->myModel->loginEmployee($email,$password);
		if(count($result)>0)
		{
			foreach($result as $row)
			{
				$sessionArray=array(
				'employee_fname'=>$row->employee_fname,
				'employee_image'=>$row->employee_image);
		}
			$this->session->set_userdata($sessionArray);
			$this->employeeView();
			//$this->load->view('footer');
		
		}
		else
		{
			echo "Unsucceasful";
		}
	}
	public function employeeView()
	{
			$this->load->view('header_employee');
			$this->load->view('employee_Welcome');
	}
	public function isLoginCompany()
	{
		$email=$this->input->post('company_email');
		$password=$this->input->post('company_password');
		$result=$this->myModel->loginCompany($email,$password);
		if(count($result)>0)
		{
			foreach($result as $row)
			{
				$sessionArray=array(
				'company_name'=>$row->company_name,
			);
		}
			$this->session->set_userdata($sessionArray);
			$this->load->view('test');
		}
		else
		{
			echo "Unsucceasful";
		}
	}
	public function addEmployee()
	{
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$bdate=$this->input->post('bdate');
		$gender=$this->input->post('gender');
		$address=$this->input->post('address');
		$job_type=$this->input->post('job_type');
		$experience=$this->input->post('experience');
	
		$prev_job_at=$this->input->post('prev_job_at');
		$company_to_join=$this->input->post('company_to_join');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		$this->upload->do_upload('userfile');
		$image=$_FILES['userfile']['name']; 
	
	
		$userData=array('employee_fname'=>$fname,
		'employee_lname'=>$lname,
		'birth_date'=>$bdate,
		'employee_gender'=>$gender,
		'employee_address'=>$address,
		'job_type'=>$job_type,
		'employee_experience'=>$experience,
		'employee_image'=>$image,
		'prev_job_at'=>$prev_job_at,
		'company_to_join'=>$company_to_join,
		'employee_email'=>$email,
		'employee_password'=>$password);

		$res=$this->myModel->insEmployee($userData);
		if($res==true)
		{
		
			redirect('Welcome/loadEmployeeLogin');
		}
		else{
		echo "Error";
		}
	}
	public function addCompany()
	{
		$cname=$this->input->post('company_name');
		$country=$this->input->post('country');
		$state=$this->input->post('state');
		$city=$this->input->post('city');
		$date=$this->input->post('start_date');
		$company_type=$this->input->post('company_type');
		$range=$this->input->post('range');
		$email=$this->input->post('range');
		$password=$this->input->post('password');
		
		$userData=array('company_name'=>$cname,
		'country'=>$country,
		'state'=>$state,
		'city'=>$city,
		'start_date'=>$date,
		'company_type'=>$company_type,
		'company_rangeEmployees'=>$range,
		'company_email'=>$email,
		'company_password'=>$password);
		
		$res=$this->myModel->insCompany($userData);
		if($res==true)
		{
			redirect('Welcome/loadCompanyLogin');
		}
		else{
		echo "Error";
		}
	}
	public function addIncident()
	{
		$employee_id=$this->input->post('employee_id');
		$employee_name=$this->input->post('employee_name');
		$employee_email=$this->input->post('employee_email');
		$employee_contactNo=$this->input->post('employee_contactNo');
		$company_name=$this->input->post('company_name');
		$company_email=$this->input->post('company_email');
		$company_location=$this->input->post('company_location');
		$date_Incident=$this->input->post('date_Incident');
		$location_Incident=$this->input->post('location_Incident');
		$level_Incident=$this->input->post('level_Incident');
		$description_Incident=$this->input->post('description_Incident');
		$userData=array('employee_id'=>$employee_id,
		'employee_name'=>$employee_name,
		'employee_email'=>$employee_email,
		'employee_contactNo'=>$employee_contactNo,
		'company_name'=>$company_name,
		'company_email'=>$company_email,
		'company_location'=>$company_location,
		'date_Incident'=>$date_Incident,
		'level_Incident'=>$level_Incident,
		'location_Incident'=>$location_Incident,
		'description_Incident'=>$description_Incident);
		$res=$this->myModel->insIncidentReport($userData);
		if($res==true)
		{
			//redirect('Welcome/loadCompanyLogin');
			echo "successful submission";
		}
		else{
		echo "Error";
		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome/');
	}

}
