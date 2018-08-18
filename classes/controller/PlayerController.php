<?php
require_once('classes/model/PlayerModel.php');

class PlayerController extends Controller{
	public static $GOLIE = 1;
	public static $RIGHT_BACK = 2;
	public static $CENTER_BACK_ONE = 3;
	public static $CENTER_BACK_TWO = 4;
	public static $LEFT_BACK =  5;
	public static $RIGHT_MIDFIELD = 6;
	public static $CENTER_MIDFIELD = 7;
	public static $LEFT_MIDFIELD = 8;
	public static $RIGHT_FORWARD = 9;
	public static $CENTER_FORWARD = 10;
	public static $LEFT_FORWARD = 11;
	public static $POSITIONS  = array(
		1 =>'Golie' ,
		2=>'Right Back',
		3 =>'Center Back One',
		4 =>'Center Back Two',
		5 =>'Left back',
		6 =>'Right Midfield',
		7 =>'Center Midfiled',
		8 =>'Left midfield',
		9 =>'Right Forward',
		10 =>'Center Forward',
		11 =>'Left Forward'

	);



	public function __construct(){
		parent::__construct();
	}

	public function getAll(){
		$sql = "SELECT * FROM `player`";
		$res = mysqli_query($this->conn, $sql);
		$players = array();
		if (mysqli_num_rows($res)>0) {
			while ($row = mysqli_fetch_object($res)) {
				$Player = new PlayerModel($row->id, $row->name, $row->shirtNumber, $row->team, $row->image, $row->position, $row->amountDue);
			}
			return $players;
		}
	}
	public function getById($id){
		$sql = "SELECT * FROM `player` WHERE `id` =".$id;
		$res = mysqli_query($sql);
		$Player = false;
		if (mysqli_num_rows($res)>0) {
			$row = mysqli_fetch_object($res);
			$Player = new PlayerModel($row->id, $row->name, $row->shirtNumber, $row->team, $row->image, $row->position, $row->amountDue);
		}
		return $Player;

	}
	public function processForm(){
		if(!empty($_POST['action'])){
			if($_POST['action']=='Add'){
				$leagueCategoryId = $_POST['leagueCategoryId'];
				$name =$_POST['name'];
				$shirtNumber = $_POST['shirtNumber'];
				$team = $_POST['team'];
				$position = $_POST['position'];
				$amountDue = $_POST['amountDue'];
				$imageURL = $this->uploadImage();
				
			}else if($_POST['action']=='edit'){

			}
		}
	}
	public function uploadImage(){
		move_uploaded_file($_FILES['image']['tmp_name'], 'D:/wamp64/www/players/images/products/'.$_FILES['image']['name']);
	}

}



?>