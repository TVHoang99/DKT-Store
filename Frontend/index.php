<?php 
	//start session
	session_start();
	//load file Connection.php
	include "../Application/Connection.php";
	//---
	//lay bien controller truyen tu url
	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
	$action = isset($_GET["action"]) ? $_GET["action"] : "read";
	//ten class
	$classController = $controller."Controller";
	//ghep de thanh duong dan hoan thien cua file controller
	$fileController = "Controllers/".ucfirst($controller)."Controller.php";
	//ham ucfirst su dung de viet hoa ky tu dau tien. VD users thanh Users
	//VD: $fileController = "Controllers/UsersController.php";
	//---
	//neu khong co bien controller tuyen len url thi load LayoutTrangChu.php, neu co thi load LayoutTrangTrong.php
	if(isset($_GET["controller"]) == false)
		include "Views/LayoutTrangChu.php";
	else
		include "Views/LayoutTrangTrong.php";
 ?>