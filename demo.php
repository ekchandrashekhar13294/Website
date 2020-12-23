<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Schedule Demo| Delivering Hospitality</title>
<meta name="keywords" content="" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/fav-icon.ico">
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


<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Style Customizer's stylesheets -->

<link rel="stylesheet/less" type="text/css" href="less/skin.less">
<!-- Style Customizer's stylesheets END -->

<!-- Skin stylesheet -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 650px;
  padding: 5px;
  background-color: #c8c8c8;
}

/* Full-width input fields */
.form-container input,textarea {
  width: 100%;
  padding: 8px;
  margin: 3px 0 6px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something 
.form-container input:focus {
  background-color: #ddd;
  outline: none;
}*/

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 1.2;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

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

<!-- include header.php --> 

<div class="clearfix"></div
 <section class="sec-padding">
  <div class="container">
  <div class="row text-center">
          <button data-toggle="modal" data-target="#modal-switch" class="btn btn-default">Open Modal Popup</button>
          <div id="modal-switch" tabindex="-1" role="dialog" aria-labelledby="modal-switch-label" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
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

	<textarea type="text" class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Message"></textarea>
                                

    <button type="submit" class="btn">Submit</button>
    <button type="reset" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>
                </div>
              </div>
            </div>
          </div>

  </div>
  </div>
  </section>
<div class="clearfix"></div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
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
		<!-- Closoing footer-.php-->
	</div>
		<!--end site wrapper--> 
</div>
</body>
</html>
    