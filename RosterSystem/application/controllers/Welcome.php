<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	 public function __construct(){
		 parent::__construct();
		 $this->load->model('MyModel');
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
	public function loadRosterPage()
	{
		$this->load->view('header_employee');
		$this->load->view('roster_page');
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
		$res=$this->MyModel->addContact($userData);
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
		$result=$this->MyModel->getCompanyName();
		$data['result']=$result;
		$this->load->view('header');
		$this->load->view('register_employee',$data);
	
	}
	public function signCompany()
	{
		$data['country'] = $this->MyModel->fetch_country();
		$this->load->view('header');
		$this->load->view('register_company',$data);
		
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
		$result=$this->MyModel->loginEmployee($email,$password);
		if(count($result)>0)
		{
			foreach($result as $row)
			{
				$sessionArray=array(
				'employee_id'=>$row->employee_id,
				'employee_fname'=>$row->employee_fname,
				'employee_image'=>$row->employee_image,
				'employee_lname'=>$row->employee_lname);
		}
			$this->session->set_userdata($sessionArray);
			$this->employeeView();
			//$this->load->view('footer');
		
		}
		else
		{
			echo "Invalid Login Id or Password";
		}
	}
	public function employeeView()
	{
			$this->load->view('header_employee');
			$this->load->view('employee_Welcome');
	}
	public function companyView()
	{
			$this->load->view('header_company');
			$this->load->view('company_Welcome');
	}
	public function isLoginCompany()
	{
		$email=$this->input->post('company_email');
		$password=$this->input->post('company_password');
		$result=$this->MyModel->loginCompany($email,$password);
		if(count($result)>0)
		{
			foreach($result as $row)
			{
				$sessionArray=array(
				'company_name'=>$row->company_name,
			);
		}
			$this->session->set_userdata($sessionArray);
			$this->companyView();
		}
		else
		{
			echo "Invalid Login Id or Password";
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
		'employee_password'=>base64_encode($password));

		$res=$this->MyModel->insEmployee($userData);
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
		$company_type=$this->input->post('company_type');
		$range=$this->input->post('range');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		
		$userData=array('company_name'=>$cname,
		'country'=>$country,
		'state'=>$state,
		'city'=>$city,
		'company_type'=>$company_type,
		'company_rangeEmployees'=>$range,
		'company_email'=>$email,
		'company_password'=>base64_encode($password));
		
		$res=$this->MyModel->insCompany($userData);
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
		$res=$this->MyModel->insIncidentReport($userData);
		if($res==true)
		{
			//redirect('Welcome/loadCompanyLogin');
			echo "successful submission";
		}
		else{
		echo "Error";
		}

	}
	
	public function loadViewReport()
	{
		$company_name=$this->session->userdata('company_name');
		$result=$this->MyModel->getReports($company_name);
		$data['result']=$result;
		
		$this->load->view('header_company');
		$this->load->view('view_report',$data);
	}
	public function loadEmployees()
	{
		$company_name=$this->session->userdata('company_name');
		$result=$this->MyModel->getEmployees($company_name);
		$data['result']=$result;
		
		$this->load->view('header_company');
		$this->load->view('view_Employees',$data);
	}
	public function loadFeedback()
	{
		$this->load->view('header_employee');
		$this->load->view('feedback');
	}
	/*public function addFeedback()
	{
		
	}*/
	
	public function loadProfile()
	{
		$this->load->model('MyModel');
		$id=$this->input->get('employee_id');
		$data['res']=$this->MyModel->getEmployeeById($id);
		$this->load->view('header_employee');
		$this->load->view('setting_employee',$data);
		
	}
	public function EditProfile()
	{
		$this->load->model('MyModel');
		$id=$this->input->get('employee_id');
		$data['res']=$this->MyModel->getEmployeeById($id);
		$this->load->view('header_employee');
		$this->load->view('edit_employee',$data);
	}
	public function updateProfile()
	{
			
		
		$employee_id=$this->input->post('employee_id');
		$employee_fname=$this->input->post('employee_fname');
		$employee_lname=$this->input->post('employee_lname');
		$birth_date=$this->input->post('birth_date');
		$employee_address=$this->input->post('employee_address');
		$employee_gender=$this->input->post('employee_gender');
		$employee_email=$this->input->post('employee_email');
		$employee_password=$this->input->post('employee_password');
	
		$userData=array('employee_id'=>$employee_id,'employee_fname'=>$employee_fname,'employee_lname'=>$employee_lname,'birth_date'=>$birth_date,'employee_address'=>$employee_address,'employee_gender'=>$employee_gender);

		if($this->MyModel->updateEmployee($userData,$employee_id))
		{
			$this->session->set_flashdata('updated','Your profile information has been updated!');
			$this->employeeView();
		}
		else
		{
			echo "error";
		}
	}
	public function updateEmployeeImage()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		$this->upload->do_upload('userfile');
		$image=$_FILES['userfile']['name']; 
		$employee_id=$this->input->post('employee_id');
		$userData=array('employee_id'=>$employee_id,'employee_image'=>$image);

		if($this->MyModel->updateEmployee($userData,$employee_id))
		{
			redirect('/Welcome/employeeView');
		}
		else
		{
			echo "error";
		}
	}
	public function EditEmployeeImage()
	{
		$this->load->model('MyModel');
		$id=$this->input->get('employee_id');
		$data['res']=$this->MyModel->getEmployeeById($id);
		$this->load->view('header_employee');
		$this->load->view('edit_employee_image',$data);
	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome/');
	}
	 
	 public function fetch_state()
	 {
	  if($this->input->post('country_id'))
	  {
	   echo $this->MyModel->fetch_state($this->input->post('country_id'));
	  }
	 }

	 function fetch_city()
	 {
	  if($this->input->post('state_id'))
	  {
	   echo $this->MyModel->fetch_city($this->input->post('state_id'));
	  }
	 }
	 public function loadRosterCompany()
	 {
		 $this->load->view('header_company');
		 $this->load->view('add_roster');
	 }
	 public function allocateRoster()
	 {
		 $this->load->model('MyModel');
		$id=$this->input->get('employee_id');
		$data['res']=$this->MyModel->getEmployeeById($id);
		$this->load->view('header_company');
		$this->load->view('add_roster',$data);
	
	 }
	 public function addRoster()
	 {
		 $company_name=$this->input->post('company_name');
		 $employee_fname=$this->input->post('employee_fname');
		 $employee_lname=$this->input->post('employee_lname');
		 $roster_title=$this->input->post('roster_title');
		 $roster_description=$this->input->post('roster_description');
		 $date=$this->input->post('date');
		 $location=$this->input->post('location');
		 $status=0;
		 
		 $userData=array('company_name'=>$company_name,'employee_fname'=>$employee_fname,'employee_lname'=>$employee_lname,'roster_title'=>$roster_title,'roster_description'=>$roster_description,'date'=>$date,'location'=>$location);

		if($this->MyModel->insertRoster($userData))
		{
			echo "Roster Allocated";
		}
		else
		{
			echo "error";
		}
	 }
	  public function loadRosterEmployee()
	 {
		 $this->load->model('MyModel');
		$id=$this->input->get('employee_id');
		$data['result']=$this->MyModel->getRosterById($id);
		$this->load->view('header_employee');
		$this->load->view('load_rosters',$data);
	
	 }
	 public function updateStatusAccept()
	 {
		 $roster_id=$this->input->get('id');
		 $status=2;
		 $userData=array('id'=>$roster_id,'status'=>$status);
		 if($this->MyModel->updateStatus($roster_id,$userData))
		 {
			 echo "Accepted";
		 }
		 else
		 {
			 echo "error";
		 }
	 }
	public function updateStatusDecline()
	{
		 $roster_id=$this->input->get('id');
		 $status=3;
		 $userData=array('id'=>$roster_id,'status'=>$status);
		 if($this->MyModel->updateStatus($roster_id,$userData))
		 {
			 echo "Declined";
		 }
		 else
		 {
			 echo "error";
		 }
	}

}
