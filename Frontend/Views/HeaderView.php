<header id="header">
<!-- top header -->
<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
      <?php if(isset($_SESSION["customerName"]) == false): ?>
        <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register">Đăng ký</a> </div>
      <?php else: ?>
        <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="#"><?php echo $_SESSION["customerName"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- end top header --> 
<!-- middle header -->
<div class="mid-header">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.html"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
    <div class="col-xs-12 col-sm-12 col-md-6 header-search"> 
      <script type="text/javascript">
          function smartSearch() {
              document.getElementById("box-smart-search").setAttribute("style","display:block;");
              //---
              //lay gia tri cua id=key
              var key = document.getElementById("key").value;
              $("#box-smart-search ul").empty();
              //alert("SmartSearch.php?key="+key);
              //---
              $.ajax({
              url: "SmartSearch.php?key="+key,
              success: function( result ) {
                //clear cac gia tri trong the ul truoc khi append                
                $("#box-smart-search ul").append(result);
              }
            });
              //---
          }
          function stopSmartSearch(){
              //document.getElementById("box-smart-search").setAttribute("style","display:none;");
          }
      </script> 
      <!--<form method="post" id="frm" action="">-->
      <div style="margin-top:25px;" id="box-search">
        <input type="text" autocomplete="off" onkeyup="smartSearch();" onblur="stopSmartSearch();" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
        <button style="margin-top:-10px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
        <!-- smart search -->
        <div id="box-smart-search">
          <ul>            
          </ul>
        </div>
        <style type="text/css">
          #box-search{position: relative;}
          #box-smart-search{position: absolute; z-index: 10; width: 550px; background: white; display: none; height: 500px; overflow: scroll;}
          #box-smart-search ul{
            padding:0px; margin:0px; list-style: none;            
          }
          #box-smart-search img{width: 70px;}
          #box-smart-search ul li{
            border-bottom: 1px solid #dddddd;
          }
        </style>
        <!-- /smart search -->
      </div>
      <!--</form>--> 
    </div>
    <?php if(isset($_SESSION["cart"])): ?>
      <?php 
          //tinh so luong san pham trong gio hang
          $numberProduct = 0;
          foreach($_SESSION["cart"] as $product){
            $numberProduct++;
          }
       ?>
    <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
      <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count"> <?php echo $numberProduct; ?> </span> sản phẩm <i class="fa fa-caret-down"></i></a>
        <div class="content-mini-cart">
          <div class="has-items">
            <ul class="list-unstyled">
              <?php foreach($_SESSION["cart"] as $product): ?>
              <li class="clearfix" id="item-1853038">
                <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"> <img alt="<?php echo $product['name']; ?>" src="../Assets/Upload/Products/<?php echo $product['photo']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive"> </a> </div>
                <div class="info">
                  <h3><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
                  <p><?php echo $product['number']; ?> x <?php echo number_format($product['price']); ?>₫</p>
                </div>
                <div> <a href="index.php?controller=cart&action=remove&id=<?php echo $product['id']; ?>"> <i class="fa fa-times"></i></a> </div>
              </li>
              <?php endforeach; ?>
            </ul>
            <a href="/Cart/Checkout" class="button">Thanh toán</a> </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
<!-- end middle header --> 
<!-- bottom header -->
<div class="bottom-header">
  <div class="container">
    <div class="clearfix">
      <ul class="main-nav hidden-xs hidden-sm list-unstyled">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li class="has-submenu"> <a href="/collections/all"> <span>Sản phẩm</span><i class="fa fa-caret-down" style="margin-left: 5px;"></i> </a>
          <?php 
              //Load MVC bang tay
              //include file controller
              include "Controllers/MenuCategoryController.php";
              //tao object cua class
              $obj = new MenuCategoryController();
              //goi den ham ben trong class
              $obj->read();
           ?>
        </li>
        <li><a href="index.php?controller=cart&action=read">Giỏ hàng</a></li>
        <li><a href="index.php?controller=news&action=read">Tin tức</a></li>
        <li><a href="index.php?controller=contact&action=read">Liên hệ</a></li>
      </ul>
      <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
      <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="index.php?controller=tintuc">Tin tức</a></li>
        <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- end bottom header -->
</header>