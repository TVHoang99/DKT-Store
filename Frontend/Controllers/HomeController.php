<?php 
	include "Models/HomeModel.php";
	class HomeController extends HomeModel{
		public function read(){
			//load view
			include "Views/HomeView.php";
		}
	}
 ?>