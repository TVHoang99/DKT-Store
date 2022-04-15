<?php 
	class MenuCategoryModel{
		//lay cac danh muc cap 0
		public function modelListCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			return $query->fetchAll();
		}
		//lay cac danh muc con
		public function modelListCategoriesSub($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			return $query->fetchAll();
		}
	}
 ?>