<?php
require_once('classes/model/LeagueCategoryModel.php');

class LeagueCategoryController extends Controller{

	public function __construct(){
		parent::__construct();
	}
	public function getAll(){
		$sql = "SELECT * FROM `leaguecategory`";
		$res = mysqli_query($this->conn, $sql);
		$categories =  array();
		if(mysqli_num_rows($res)>0){
			while ( $row = mysqli_fetch_object($res)) {
				$Category = new LeagueCategoryModel($row->id, $row->name, $row->description, $row->image, $row->parentId);	
				$categories[] = $Category;
			}
		}
		return $categories;
	}

	public function getById($id){
		$sql = "SELECT * FROM `leaguecategory` WHERE `id` =".$id;
		$res = mysqli_query($this->conn, $sql);
		$Category = false;
		if(mysqli_num_rows($res) > 0){
			$row = mysqli_fetch_object($res);
			$Category = LeagueCategoryModel($row->id, $row->name, $row->decription, $row->image, $row->parentId);
		}
		return $Category;
	}
}

?>