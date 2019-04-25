<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class MyModel extends CI_Model{
	
	public function __construct()
	{
		$this->load->database();
		
	}

	public function insEmployee($userData)
	{
		$this->db->insert('employee_mst',$userData);
		return true;
	}
	public function addContact($userData)
	{
		$this->db->insert('tbl_contact',$userData);
		return true;
	}
	public function insCompany($userData)
	{
		$this->db->insert('company_mst',$userData);
		return true;
	}
	public function loginEmployee($email,$password)
	{
		$this->db->where('employee_email',$email);
		$this->db->where('employee_password',base64_encode($password));
		$result=$this->db->get('employee_mst');
		return $result->result();
	}
	public function loginCompany($email,$password)
	{
		$this->db->where('company_email',$email);
		$this->db->where('company_password',base64_encode($password));
		$result=$this->db->get('company_mst');
		return $result->result();
	}
	
	public function getCompanyName()
	{
		$result=$this->db->get('company_mst');
		return $result;
	}
	public function getReports($company_name)
	{
		
		$this->db->where('company_name',$company_name);
		$result=$this->db->get('tbl_addincident');
		return $result->result();
	}
	public function insIncidentReport($userData)
	{
		$this->db->insert('tbl_AddIncident',$userData);
		return true;
	}
	function fetch_country()
	{
		$this->db->order_by("country_name", "ASC");
		$query = $this->db->get("country");
		return $query->result();
	}
	 public function getEmployeeById($id)
   {
	   $this->db->where('employee_id',$id);
	   $res=$this->db->get('employee_mst');
	   return $res->result();
   }
    public function getRosterById($id)
   {
	   $this->db->where('employee_id',$id);
	   $res=$this->db->get('roster_mst');
	   return $res->result();
   }
   public function getEmployees($company_name)
   {
	   	$this->db->where('company_to_join',$company_name);
	   $res=$this->db->get('employee_mst');
	   return $res->result();
   }
   public function UpdateEmployee($userData,$employee_id)
   {
		$this->db->where('employee_id',$employee_id);
		$this->db->update('employee_mst',$userData);
		return true;
   }
   public function UpdateStatus($roster_id,$userData)
   {
	   $this->db->where('id',$roster_id);
	   $this->db->update('roster_mst',$userData);
	   return true;
   }
   public function insertRoster($userData)
   {
	   $this->db->insert('roster_mst',$userData);
	   return true;
   }
   

	 function fetch_state($country_id)
	 {
	  $this->db->where('country_id', $country_id);
	  $this->db->order_by('state_name', 'ASC');
	  $query = $this->db->get('state');
	  $output = '<option value="">Select State</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
	  }
	  return $output;
	 }

	 function fetch_city($state_id)
	 {
	  $this->db->where('state_id', $state_id);
	  $this->db->order_by('city_name', 'ASC');
	  $query = $this->db->get('city');
	  $output = '<option value="">Select City</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
	  }
	  return $output;
	 }
}
?>