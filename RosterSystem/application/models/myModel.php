<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class myModel extends CI_Model{
	
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
		$this->db->where('employee_password',$password);
		$result=$this->db->get('employee_mst');
		return $result->result();
	}
	public function loginCompany($email,$password)
	{
		$this->db->where('company_email',$email);
		$this->db->where('company_password',$password);
		$result=$this->db->get('company_mst');
		return $result->result();
	}
	public function insHouse($userData)
	{
		$this->db->insert('house_mst',$userData);
		return true;
	}
	public function insRoom($userData)
	{
		$this->db->insert('room_mst',$userData);
		return true;
	}
	public function insDevice($userData)
	{
		$this->db->insert('device_mst',$userData);
		return true;
	}
	public function getCompanyName()
	{
		$result=$this->db->get('company_mst');
		return $result;
	}
	public function insIncidentReport($userData)
	{
		$this->db->insert('tbl_AddIncident',$userData);
		return true;
	}
}
?>