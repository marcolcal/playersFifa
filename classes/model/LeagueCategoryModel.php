<?php

	/**
	 * 
	 */
	class LeagueCategoryModel extends Model
	{

		private $name;
		private $description;
		private $image;
		private $parentId;

		public function __construct($id, $name, $description, $image, $parentId)
		{
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->image = $image;
			$this->parentId = $parentId;
		}

		function setName($name){
			$this->name = $name;
		}
		function getname(){
			return $this->name;
		}
		function setDescription($description){
			$this->description = $description;
		}
		function getDescription(){
			return $this->description;
		}
		function setImage($image){
			$this->image = $image;
		}
		function getImage(){
			return $this->image;
		}
		function setParentId($parentId){
			$this->parentId = $parentId;
		}
		function getParentId(){
			return $this->parentId;
		}
	}

?>