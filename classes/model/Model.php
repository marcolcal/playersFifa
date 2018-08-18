<?php
/**
 * 
 */
class Model 
{
	protected $id;
	protected $conn;

	function __construct()
	{
		global $conn;
		$this->conn = $conn;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
}