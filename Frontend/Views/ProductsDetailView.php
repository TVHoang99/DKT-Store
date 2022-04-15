<div class="product-detail" itemscope itemtype="http://schema.org/Product">
        <div class="top">
        <div class="row">
        <div class="col-xs-12 col-md-6 product-image">
        <div class="featured-image"> <img src="../Assets/Upload/Products/<?php echo $record->photo; ?>" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="../Assets/Upload/Products/<?php echo $record->photo; ?>" alt="<?php echo $record->name; ?>" /></div>
        </div>
        <div class="col-xs-12 col-md-6 info">
        <h1 itemprop="name"><?php echo $record->name; ?></h1>
        <p class="vendor"> Category:&nbsp; <span> <?php echo $this->modelGetCategory($record->category_id); ?> </span></p>
        <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span></span></p>
        <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price - ($record->price*$record->discount)/100); ?>₫ </span></span></p>
        </p>
        <a href="index.php?controller=cart&action=add&id=<?php echo $record->id; ?>" class="btn btn-primary">Cho vào giỏ hàng</a>
        <!-- rating -->
        <div style="border:1px solid #dddddd; margin-top: 15px;">
        <h4 style="padding-left: 10px;">Rating</h4>
        <table style="width: 100%;">
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"></td>
        <td><span class="label label-primary"><?php echo $this->star1($record->id); ?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"></td>
        <td><span class="label label-warning"><?php echo $this->star2($record->id); ?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"></td>
        <td><span class="label label-danger"><?php echo $this->star3($record->id); ?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"></td>
        <td><span class="label label-info"><?php echo $this->star4($record->id); ?> vote</span></td>
        </tr>
        <tr>
        <td style="width: 80%; padding-left: 10px;"><img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"> <img src="../Assets/Frontend/images/star.jpg"></td>
        <td><span class="label label-success"><?php echo $this->star5($record->id); ?> vote</span></td>
        </tr>
        </table>
        <br>
        </div>
        <!-- /rating -->
        </div>
        </div>
        </div>
        <div class="middle">
        <ul class="list-unstyled navtabs">
        <li><a href="#tab1" class="head-tabs head-tab1 active" data-src=".head-tab1" onclick="document.getElementById('tab1').setAttribute('style','display:block');document.getElementById('tab2').setAttribute('style','display:none');">Chi tiết sản phẩm</a></li>
        <li><a href="#tab2" class="head-tabs head-tab2" data-src=".head-tab2" onclick="document.getElementById('tab2').setAttribute('style','display:block');document.getElementById('tab1').setAttribute('style','display:none');">Cấu hình sản phẩm</a></li>
        </ul>
        <div class="tab-container">
        <div id="tab1">
                <!-- chi tiet -->
                <?php echo $record->description; ?>
                <?php echo $record->content; ?>
        </div>
        <div id="tab2" style="display: none;">
                <!-- cau hinh san pham -->
                <table class="table">
                <?php 
                   $parameters = $this->modelGetProductParameters($record->id);
                 ?>
                 <?php foreach($parameters as $rows): ?>
                   <tr>
                        <td><?php echo $rows->name; ?></td>
                   </tr>
                <?php endforeach; ?>
                </table>
                <!-- /cau hinh san pham -->
        </div>
        <!-- chi tiet -->
        </div>
        </div>
        </div>