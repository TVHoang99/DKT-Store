<?php 
	class HomeModel{
		//lay 6 ban ghi san pham noi bat
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}	
		//hien thi cac danh muc co san pham
		public function listCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id in (select category_id from products where categories.id = products.category_id) order by id desc");
			return $query->fetchAll();
		}	
		//hien thi cac san pham tuong ung voi category_id truyen vao
		public function listProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id=$category_id order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//lay cac tin tuc noi bat
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 0,8");
			return $query->fetchAll();
		}
	}
 ?>