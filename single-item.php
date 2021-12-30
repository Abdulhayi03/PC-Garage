<?php 
 $PROID =   $_GET['id']; 
$query = "SELECT * FROM `tblbrand` b , `tblproduct` p , `tblcategory` c
            WHERE b.`BRID`=p.`BRID` AND  p.`CATEGID` = c.`CATEGID`  AND p.`PROID`=" . $PROID;
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();


  foreach ($cur as $result) { 
   
 ?>

        <!-- Portfolio Item Row -->
   <form   method="POST" action="cart/controller.php?action=add">
        <div class="container mySpace">
        
        <div class="row">
        
            <div class="col-md-6 ">
                
                    <div class="col-sm-2 mySpace">
                          <img style="width:300px; margin-left:200px;" src="<?php echo web_root . 'admin/products/'.  $result->IMAGES;?>" alt="">
               
                    </div>
            </div>
            
            <h1>Product Details</h1>
            <div class="mySpace"></div>
            
            
            <div class="col">
              <input type="hidden" name="PROPRICE" value="<?php  echo $result->PRODISPRICE; ?>">
              <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

              <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">

                <ul>
                    <li><span style="font-weight:600;">Name</span> - <?php echo $result->PRODNAME; ?></li>
                    <p>_____________________________________</p>
                    <li><span style="font-weight:600;">Type</span> - <?php echo $result->CATEGORIES; ?></li>
                    <p>_____________________________________</p>
                    <li><span style="font-weight:600;">Brand</span> - <?php echo $result->BRNAME; ?></li>
                    <p>_____________________________________</p>
                    <li><span style="font-weight:600;">Description</span> - <?php echo $result->PRODESC; ?></li>
                    <p>_____________________________________</p>

                    <li><span style="font-weight:600;">Price</span> - Rs. <?php echo $result->PROPRICE; ?></li>

                    
                </ul>

                 <button  type="submit" name="btnorder"  class="btn btn-default" 
                 style="margin-left:50%; 
                        width:200px; 
                        color:#fff;
                        background-color:#1d2735;"
                 > Add to cart</button>
            </div>%
<?php } ?>       
        </div></div>
        <!-- /.row -->
</form>

<?php 
$query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
            WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND `CATEGORIES`='" . $result->CATEGORIES . "' limit 4";
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList(); 
?>
        <div class="container mySpace">
        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
            <h2 class="title text-center">Related Products</h2>
            </div>
<?php

  foreach ($cur as $result) { 

?>
            <div class="col-sm-3">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                    <a href="<?php echo 'index.php?q=single-item&id='.$result->PROID.''?>">

                      <img src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                      <h4 style="color:#232f3e; font-weight:600;"><?php  echo    $result->PRODNAME; ?></h4>
                      </a>
                      <p style="margin-top:2px;color:gray; font-size:10px;"><?php  echo $result->PRODESC; ?></p>

                      <h5 style="margin-top:2px;color:black; font-weight:600;">Rs. <?php  echo $result->PROPRICE; ?></h5>
                      <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                    </div>
                    
                </div>
                
              </div>
            </div>

<?php } ?>
        </div>
        </div>
        <div class="mySpace"></div>
