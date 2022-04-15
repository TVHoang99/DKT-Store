<!-- hot news -->
        <div class="home-blog">
          <h2 class="title"> <span>Tin tức</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-sidebar"> 
              <?php foreach($data as $rows): ?>
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="../Assets/Upload/News/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                    <p class="desc">
                    <p><?php echo $rows->description; ?></p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news -->
            <?php endforeach; ?>
            </div>
          </div>
        </div>
        <!-- end hot news -->