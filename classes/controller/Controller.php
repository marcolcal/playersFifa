<?php
require_once('classes/model/Model.php');
/**
 * 
 */
class Controller 
{
	protected $conn;
	
	function __construct()
	{
		global $conn;
		$this->conn = $conn;
	}
}
?>