<?php
class Login_model extends CI_Model
{ 
	function __construct()
	{
		parent::__construct();
	}
	/** private start here */
	private function conditional()
	{
		$this->db->from("user");
		$this->db->join("privillage","user.id_privillage = privillage.id","left");
		$this->db->where("user.active = 1");
		$this->db->where("user.is_perkara = '1'");
	}
	
	private function get($boolean = true) 
	{
		$query = $this->db->get();
		if($boolean == true)
		{
			return $query;
		}else if($boolean == false)
		{
			return $this->db->last_query();
		}
	}
	// end Private
	/** public function here */
	public function checkLogin($username,$password)
	{
		$password = md5($password);
		$this->conditional();
		$this->db->where("user.username = '$username'");
		$this->db->where("user.password = '$password'");
		return $this->get();
	}
	// end Public
}