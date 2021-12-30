<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PC | Garage</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
 




 
<script type="text/javascript">
   

</script>
</head>

<body style="background-color:white" onload="totalprice()" >

  <header id="header"><!--header-->
    <!--header_top-->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <nav>
            <ul class="navbar-nav">
            <li class="li-item"><a href="<?php web_root?>index.php?q=about">About PC Garage</a></li>
            <li class="li-item"><a href="#">Feedback & Suggestions</a></li>
            <li class="li-item" style="margin-left:660px;"><a href="<?php web_root?>index.php?q=contact">Contact Us</a></li>
            <li class="li-item"><a href="#">FAQs</a></li>
            <li class="li-item"><a href="#">Policies</a></li>
            </ul>
          </nav>
         
        </div>
      </div>
    </div>
    
    
    <div class="header-middle"><!--header-middle-->
       <div class="container-fluid" > 
      <div class="container">
        <div class="row">
          <div class="col-md-3 clearfix">
            <div>
              <a class="logo" href="<?php echo web_root?>">PC <span>Garage</span>
              <p class="logo_text">The Computer Store</p>

            </a>
            </div> 
          </div>
          <div class="col-sm-6">
            <form action="<?php echo web_root?>index.php?q=product" method="POST" > 
              <div class="search_box">
                <input type="text" name="search" placeholder="Search Products"/>
                
              </div>
              
            </form>
            
          </div>
        
          <div class="col-md-3 clearfix">
            <div class="shop-menu clearfix pull-right">
              <ul class="nav navbar-nav">
                     
                <li><a style="color:#f69d18;" href="<?php echo web_root;?>index.php?q=cart"><span id="cart__total">
                <?php
                    if (isset($_SESSION['gcCart'])){
                      $count = @count($_SESSION['gcCart']);
                        echo '<span>'.$count.'</span>';
                      }else{
                        echo '';
                      }
                    
                    
                    ?>
                </span><i class="fa fa-shopping-cart"></i> Cart</a>
                    <ul role="menu" class="sub-menu" id="mini-cart">
                                    
                  
              <li style="display:block;padding:3px 10px;margin: 3px 0;">
                  <span style="margin-left:55px;">Shopping Cart</span>
                  
                  <li class="divider" style="width:220px;border-top:1px solid darkgray;"></li>
                  <span class="item" style="display:block;padding:3px 10px;margin: 3px 0;">
                    <span class="item-left" style="float:left;">
                        <img style="float:left;" src="" alt="" />
                        <span class="item-info" style="float:left;">
                            <span style="float:left;">Item name</span>
                            <span style="float:left;margin-left:26px;">23$</span>
                            <span style="float:left;margin-left:26px;">1</span>

                        </span>
                    </span>
                    <span class="item-right" style="float:right;">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                  </span>
              </li>
              <li class="divider"></li>
              <li>
                <button class="btn btn-xs btn-warning" style="width:180px;height:30px;">View Cart</button>
                <button class="btn btn-xs btn-success" style="margin-top:7px;width:180px;height:30px;">Checkout</button>
              </li> 
              </ul>
              </li>
                <?php if (isset($_SESSION['CUSID'] )) { ?>  
                  <li><a style="color:#f69d18;" href="<?php echo web_root?>index.php?q=profile"><i class="fa fa-user"></i> Account</a></li>     
                  <li><a style="color:#f69d18;" href="<?php echo web_root?>logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                <?php }else{ ?> 
                <li><a style="color:#f69d18;" data-target="#smyModal" data-toggle="modal"  href=""><i class="fa fa-lock"></i> Login</a></li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div></div>
    </div><!--/header-middle-->
  
    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu">
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="<?php echo web_root;?>" class="active">Home</a></li> 

                <li class="dropdown"><a href="#">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                       <?php 
                                            $mydb->setQuery("SELECT * FROM `tblcategory`");
                                            $cur = $mydb->loadResultList();
                                           foreach ($cur as $result) { 
                                       echo '<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li>';
                                        } ?> 
                                    </ul>
                                </li>

                               

                                      <?php 
                                            $mydb->setQuery("SELECT * FROM `tblcategory` LIMIT 7");
                                            $cur = $mydb->loadResultList();
                                           foreach ($cur as $result) { 
                                       echo '<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li>';
                                        } ?> 


               

              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->

 
   



          <?php 
            require_once $content; 
         ?> 





    
    
    <div class="footer-widget">
      <div class="container-fluid">
      <div class="container">
      <div class="row">
      <div class="col-md-3 clearfix">
            <div>
              <a class="logo" href="<?php echo web_root?>">PC <span>Garage</span>
              <p class="logo_text">The Computer Store</p>
              <p class="mySpace"style="font-size:10px; font-family:sans-serif; font-weight:200;">Welcome to PC Garage. Online Computer store in Pakistan. Buy Motherboards, Casings, Graphic Cards and Leds at best prices in Pakistan.</p>
            </a>
            </div>
            
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Service</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Online Help</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Change Location</a></li>
                <li><a href="#">FAQ’s</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Quick Shop</h2>
              <ul class="nav nav-pills nav-stacked">
                 <?php 
                      $mydb->setQuery("SELECT * FROM `tblcategory` LIMIT 6");
                      $cur = $mydb->loadResultList();
                     foreach ($cur as $result) {
                      echo '<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li>';
                      }
                  ?>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Policies</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privecy Policy</a></li>
                <li><a href="#">HR Record System</a></li>
                <li><a href="#">Point of Sales</a></li>
                <li><a href="#">Resevation System</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>About Shopper</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Store Location</a></li>
                <li><a href="#">Affillate Program</a></li>
                <li><a href="#">Copyright</a></li>
              </ul>
            </div>
          </div>
      
          
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
        <nav>
            <ul class="navbar-nav">
            <li class="li-item">Copyright © 2021 PC Garage. All Rights Reserved</li>
            <li class="li-item" style="margin-left:660px;">Design & Developed by <a href="https://findabdulhayi.web.app/"><span>Abdul Hayi</span></a></li>
            
            </ul>
          </nav>
          <p></a></span></p>
        </div>
      </div>
    </div>
    </div>
  </footer><!--/Footer-->

 <!-- modalorder -->
 <div class="modal fade" id="myOrdered">
 </div>


 <?php include "LogSignModal.php"; ?> 
<!-- end -->
 
    <!-- jQuery -->
    <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript --> 
    <!-- DataTables JavaScript -->
    <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/ekko-lightbox.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

   
<script src="<?php echo web_root; ?>js/jquery.scrollUp.min.js"></script>
<script src="<?php echo web_root; ?>js/price-range.js"></script>
<script src="<?php echo web_root; ?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo web_root; ?>js/main.js"></script> 

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
  <script src="js/contact.js"></script>

    <!-- Custom Theme JavaScript --> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
 <script type="text/javascript">
  $(document).on("click", ".proid", function () {
    // var id = $(this).attr('id');
      var proid = $(this).data('id')
    // alert(proid)
       $(".modal-body #proid").val( proid )

      });

</script>
 <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


      <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

<script type="text/javascript">


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
 

    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var BRGY = document.getElementById('BRGY').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&BRGY="+BRGY+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       
  </script>     
  <script src="js/scroll.js"></script>
</body>
</html>