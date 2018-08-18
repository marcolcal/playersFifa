<?php
/**
 * 
 */
class PlayerModel extends Model{
	private $name;
	private $shirtNumber;
	private $team;
	private $image;
	private $position;
	private $amountDue;
	private $leagueCategoryId;
	
	function __construct($id, $name, $shirtNumber, $team, $image, $position, $amountDue)
	{
		$this->id = $id;
		$this->name = $name;
		$this->shirtNumber = $shirtNumber;
		$this->team = $team;
		$this->image = $image;
		$this->position = $position;
		$this->amountDue = $amountDue;
	}

	//Setters and getters
	function setName($name){
		$this->name = $name;
	}

	function getName(){
		return $this->name;
	}

	function setShirtNumber($shirtNumber){
		$this->shirtNumber = $shirtNumber;
	}
	function getShirtNumber(){
		return $this->shirtNumber;
	}
	function setTeam($team){
		$this->team = $team;
	}
	function getTeam(){
		return $this->team;
	}
	function setImage($image){
		$this->image = $image;  
	}
	function setPosition($position){
		$this->position = $postion;
	}
	function getPosition(){
		return $this->position;
	}
	function setAmountDue($amountDue){
		$this->amountDue = $amountDue;
	}
	function getAmountDue(){
		return $this->amountDue;
	}
	function setLeagueCategoryId($leagueCategoryId){
		$this->leagueCategoryId = $leagueCategoryId;
	}
}


?>