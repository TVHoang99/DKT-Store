<ul class="list-unstyled level1">
      <?php 
            $categories = $this->modelListCategories();
       ?>
       <?php foreach($categories as $rows): ?>
      <li><a href="index.php?controller=products&action=categories&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php 
                  //lay cac danh muc con
                  $categoriesSub = $this->modelListCategoriesSub($rows->id);
             ?>
             <?php foreach($categoriesSub as $rowsSub): ?>
            <li style="padding-left:20px;"><a href="index.php?controller=products&action=categories&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
            <?php endforeach; ?>
      <?php endforeach; ?>
</ul>