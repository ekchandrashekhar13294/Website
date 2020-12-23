<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Contact Us | Channel Manager | Hotel Distribution | Central Reservation System</title>
<meta name="keywords" content="" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/Fav-icon.ico">
<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 

<!-- Template's stylesheets -->
<link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="css/theme-default.css" type="text/css">
<link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="css/corporate.css" type="text/css">
<link rel="stylesheet" href="css/shortcodes.css" type="text/css">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" type="text/css" href="js/smart-forms/smart-forms.css">
<link rel="stylesheet" href="css/model.css" type="text/css">


<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Style Customizer's stylesheets -->

<link rel="stylesheet/less" type="text/css" href="less/skin.less">
<!-- Style Customizer's stylesheets END -->

<!-- Skin stylesheet -->

</head>
<body>
<!--<div class="over-loader loader-live">
  <div class="loader">
    <div class="loader-item style4">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div>
</div>-->
<!--end loading--> 
<div class="wrapper-boxed">
<div class="site-wrapper">
<!-- include header.php -->
<?php
include('header.php'); ?>

<!-- include header.php --> 
    
    <div class="clearfix"></div>
	 <div class="header-inner-tmargin">
    <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background:url(images/sliders/Slider-contact2.jpg);"><img class="nodisplay-image" src="images/sliders/Image-contactus.jpg" alt=""/> </div>
      </div>
      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
            <div class="header-inner less-height">
              <div class="overlay">
                <div class="text text-center">
                  <h3 class="uppercase text-white less-mar-1 title"> <br><br><br>Contact US</h3>
                 
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end header section -->
    
   <section>
     <!-- <div class="pagenation-holder">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4>Contact Us</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                
                <li class="current"><a href="contactus.html">Contact</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <div class="clearfix"></div>
    <!--end section-->
    


 <div class="parallax vertical-align" data-parallax-bg-image="images/sliders/Images-8.png" data-parallax-speed="0.9" data-parallax-direction="down">
   <div class="parallax-overlay bg-opacity-8">
          <div class="container sec-tpadding-3 sec-bpadding-3">
          <div class="row">
  
<div class="col-md-8">
            <div class="smartforms-modal-body">
                    <div class="smart-wrap">
                        <div class="smart-forms smart-container transparent wrap-full">
                            <div class="form-body no-padd">
                                <form method="post" action="php/smartprocess.php" id="smart-form">
                    
                        <div class="section">
                            <label class="field prepend-icon">
                                <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                                <span class="field-icon"><i class="fa fa-user"></i></span>  
                            </label>
                        </div><!-- end section -->
                        
                        <div class="section">
                            <label class="field prepend-icon">
                                <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                                <span class="field-icon"><i class="fa fa-envelope"></i></span>
                            </label>
                        </div><!-- end section -->
                
                
                <div class="section">
        <label class="field prepend-icon">
            <input type="tel" pattern="[6789][0-9]{9}"  name="telephone" id="telephone" class="gui-input" placeholder="Enter Telephone..." required>
            <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
        </label>
    </div><!-- end section -->
	
	  
                            

                        <div class="section">
                            <label class="field prepend-icon">
                                <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subjec">
                                <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                            </label>
                        </div><!-- end section -->
                        
                        <div class="section">
                            <label class="field prepend-icon">
                                <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                <span class="field-icon"><i class="fa fa-comments"></i></span>
                                <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span>   
                            </label>
                        </div><!-- end section -->
                        

                       <div class="result"></div><!-- end .result  section --> 
                                                                                                                    
                    <!-- end .form-body section -->
                    <div class="form-footer text-left">
                        <button type="submit" data-btntext-sending="Sending..." class="button btn-primary">Submit</button>
                        <button type="reset" class="button"> Cancel </button>
                    </div><!-- end .form-footer section -->
                </form>                                                                                   
                            </div><!-- end .form-body section -->
                        </div><!-- end .smart-forms section -->
                    </div><!-- end .smart-wrap section -->            
                </div><!-- end .smart-wrap section -->
            <!-- end .smart-forms section --> 
          </div>
          <!--end item-->
          
          <div class="col-md-4 text-left">
            <h2 class="uppercase text-white"><strong>Get in Touch</strong></h2>
            <br/>
            <h4 class="text-white">Address Info</h4>
            <h6 class="text-white">Sunglowsys Technologies Pvt. Ltd.</h6>
            <p class="text-white">Address: No.10, 2nd Floor, <br>MRA Building Roopena Agarhara, Bangalore-68 Karnataka, India</p>
            <br/>
            <p class="text-white">Phone: +91 9742 900 696</p>
            <p class="text-white">Email: info@sunglowsys.com</p>
          </div>
          <!--end item--> 
  


  </div>
      </div>
        </div>
    
</div>
<div class="clearfix"></div>
    <!-- end section -->


<!--<section>
      <div class="container-fluid">
        <div class="row">
          <div class="gmaps-holder-2">
            <div class="col-md-12 nopadding"> <br/>
              <div id="map_extended_full" class="map">
                <p>This will be replaced with the Google Map.</p>
              </div>
            </div>
          </div>
          <!--end item--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
    
 <!-- include footer.php -->     
			<?php include('footer.php'); ?>
		<!-- Closoing footer-.php-->
	</div>
		<!--end site wrapper--> 
</div>
		<!--end wrapper boxed--> 

		<!-- include footer-link.php -->     
		<?php include('footer-script.php'); ?>
		<!-- Closoing footer-link.php-->
				<div class="container">
  <div class="row text-center">
         <!-- <button data-toggle="modal" data-target="#modal-switch" class="btn btn-default">Open Modal Popup</button>-->
          <div id="modal-switch" tabindex="-1" role="dialog" aria-labelledby="modal-switch-label" class="modal fade in">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style = "background-color:#19334d">
                  <button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                   <div id="modal-switch-label" class="modal-title" style = "color:#fff" "font-size: 10px">Schedule Demo</div>
                </div>
                <div class="modal-body">
        
  <form method="post" action="thankyou.php"id="smart-form" class="form-container">
	<input type="text" name="Sendername" id="sendername" class="gui-input" placeholder="Name" required="" style="height: 31px;">

	<input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email Address" style="height: 31px;">
	
	<input type="text" name="propertyname" id="propertyname" class="gui-input" placeholder="Property Name" style="height: 31px;">

	<input type="text" name="propertyname" id="propertyname" class="gui-input" placeholder="Property Address" style="height: 31px;">
				
	<input type="pin" pattern="[123456789][0-9]{5}"  name="Pin" id="pin" class="gui-input" placeholder="Pin Code" required"" style="height: 31px;">

	<input type="tel" pattern="[6789][0-9]{9}"  name="telephone" id="telephone" class="gui-input" placeholder="Mob. Number..." required="" style="height: 31px;">
	
	<input type="text" name="product" id="product" class="gui-input" placeholder="Product Looking for..."  style="height: 31px;">
	
	<textarea type="text" class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Message"></textarea>
                                

    <button type="submit" class="btn">Submit</button>
	<p><br>Please Submit the form to get a call back from our expert</p>
  </form>
</div>
                </div>
              </div>
            </div>
          </div>

  </div>
  </div>

<div class="clearfix"></div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>
    