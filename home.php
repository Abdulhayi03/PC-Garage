<!--slider-->
<section id="slider">
    <div class="container ">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>

          </ol>
            
            <div class="carousel-inner">
              
                
                <div class="item active">
                  <img src="images/home/slider-image-01.jpg" class="girl img-responsive" alt="First slide" />
                </div>

                <div class="item">
                  <img src="images/home/slider-image-02.jpg" class="girl img-responsive" alt="Second slide" />
                </div>

                <div class="item">
                  <img src="images/home/slider-image-03.jpg" class="girl img-responsive" alt="Third slide" />
                </div>

                <div class="item">
                  <img src="images/home/slider-image-04.jpg" class="girl img-responsive" alt="Third slide" />
                </div>
              
              
              
              
            </div>
            
            
          </div>
          
        </div>
      </div>
    </div>
   </section>  <!--slider -->

  <section>
    <div class="container">
      <div class="row">
        <!-- <div class="col-sm-3">
          
        </div>
         -->
        <div class="col-sm-12 padding-right" id="featured">
          <div class="features_items mySpace"><!--features_items-->
            <h2 class="title text-center">Featured Products</h2>

            <?php

            $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
            WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 ";
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();
           
            foreach ($cur as $result) { 

              ?>
               <form   method="POST" action="cart/controller.php?action=add">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
            <div class=" col col-sm-3 mySpace">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <a href="<?php echo 'index.php?q=single-item&id='.$result->PROID.''?>">
                      <img src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                      
                      <h4 style="color:#232f3e; font-weight:600;"><?php  echo    $result->PRODNAME; ?></h4>
                      </a>

                      
                      <p style="margin-top:2px;color:gray; font-size:10px;"><?php  echo $result->PRODESC; ?></p>

                      <h5 style="margin-top:2px;color:black; font-weight:600;">Rs. <?php  echo $result->PRODISPRICE; ?></h5>

                      <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                    </div>
                    
                </div>
                
                
              </div>
            </div>
          </form>
          <?php  } ?>
            
          </div><!--products--> 

          <div class="features_items mySpace"><!--new arrivals-->
            <h2 class="title text-center">New Arrivals</h2>

            <?php

            $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
            WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 ORDER BY p.PROID DESC";
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();
           
            foreach ($cur as $result) { 

              ?>
               <form   method="POST" action="cart/controller.php?action=add">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
            <div class=" col col-sm-3 mySpace">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <a href="<?php echo 'index.php?q=single-item&id='.$result->PROID.''?>">
                      <img src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                      
                      <h4 style="color:#232f3e; font-weight:600;"><?php  echo    $result->PRODNAME; ?></h4>
                      </a>

                      
                      <p style="margin-top:2px;color:gray; font-size:10px;"><?php  echo $result->PRODESC; ?></p>

                      <h5 style="margin-top:2px;color:black; font-weight:600;">Rs. <?php  echo $result->PRODISPRICE; ?></h5>

                      <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                    </div>
                    
                </div>
                
                
              </div>
            </div>
          </form>
          <?php  } ?>
            
          </div><!--new arrivals--> 

          
          
          
          
        </div>
      </div>
    </div>
  </section>