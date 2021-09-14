<?php

require_once "config_contact_us.php";

if(isset($_POST['submit'])){
    $F_Name=$_POST['F_Name'];
    $L_Name=$_POST['L_Name'];
    $Number=$_POST['Number'];
    $email=$_POST['email'];

    $insertquery = "INSERT INTO `contacts`(`F_Name`, `L_Name`, `Number`, `email`) VALUES ('$F_Name','$L_Name','$Number','$email')";
    
    $res = mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
            alert("data submitted succesfully")
        </script>
        <?php

    }
    else{
        ?>
        <script>
            alert("data not inserted")
        </script>
        <?php
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo_new.PNG" type="image/x-icon">
    <title>Coders Arena</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/contact_us.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dda7a08063.js" crossorigin="anonymous"></script>
    <style>
        .bg-primary{
    background: linear-gradient(to right,#fc00ff,#00dbde )!important;   
}
.form2 input[type=email]:not(.browser-default):focus:not([readonly]),.form2 input[type=text]:not(.browser-default):focus:not([readonly]){
      border-bottom: 2px solid #f50057;
      box-shadow:0 1px 0 0 white;
    }
    .form2 input[type=email]:not(.browser-default),.form2 input[type=text]:not(.browser-default){
      border-bottom: 1px solid #f50057;
    }
.page-footer {
    background: linear-gradient(to right,#fc00ff,#00dbde )!important;
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: 13px;
  }
    </style>
</head>
<body>

     <!--nav bar starting-->
     <nav class="bg-primary">
		<div class="container">
		 <div class="nav-wrapper">
			 <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		   <a href="#" class="brand-logo ">Coders Arena</a>
		   <ul id="nav-mobile" class="right hide-on-med-and-down">
			 <li><a href="index.html"><i class="material-icons left">home</i>Home</a></li>
			 <li><a href="courses.html"><i class="material-icons left">import_contacts</i>Courses</a></li>
			 <li><a href="about_us.html"><i class="material-icons left">info</i>About Us</a></li>
			 <li><a href="contact_us.php"><i class="material-icons left">call</i>Contact</a></li>
			 <li><a href="register.php"><i class="material-icons left">account_circle</i>Login/Sign-Up</a></li>
			 
		   </ul>
		 </div>
	 </div>
	   </nav>
 
	   <!--end of nav bar-->
 
	   <!--start of side nav bar for mobile-->
 
   <ul id="slide-out" class="sidenav">
	 <li><div class="user-view">
	   <div class="background">
		 <img src="images/side_bar_bg.jpg">
	   </div>
	   <a href="#user"><img class="circle" src="images/my_photo.png"></a>
	   <a href="#name"><span class="white-text name">Dwijsinh H Gohil</span></a>
	   <a href="dwijgohil24@gmail.com"><span class="white-text email">dwijgohil24@gmail.com</span></a>
	 </div></li>
	 <li><a href="index.html"><i class="material-icons left">home</i>Home</a></li>
			 <li><a href="courses.html"><i class="material-icons left">import_contacts</i>Courses</a></li>
			 <li><a href="about_us.html"><i class="material-icons left">info</i>About Us</a></li>
			 <li><a href="contact_us.php"><i class="material-icons left">call</i>Contact</a></li>
			 <li><a href="register.php"><i class="material-icons left">account_circle</i>Login/Sign-Up</a></li>
 
	 <li><div class="divider"></div></li>
	 <li><a class="subheader">Connect With Us</a></li>
	 <li><a class="waves-effect" href="https://www.youtube.com/channel/UCv-hJwt6dcm7YMVpFr2Sx_g">Our Youtube Channel</a></li>
   </ul>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/share.js"></script>
    <script src="js/type.js"></script>
    <script>
    $(document).ready(function(){
        $('.sidenav').sidenav();  
        M.Slider.init($('.slider'));
        M.Materialbox.init($('.materialboxed'));
        M.Parallax.init($('.parallax'));
      });</script>
    

    <!-- contact section starts  -->

    <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text"><b>Contact Us</b></h1>
        <div class="row center">
          <h5 class="header col s12">Connect with us and get regular updates</h5>
        </div>
        <div class="row center">
          <a href="#expert" id="download-button" class="btn-large waves-effect waves-light orange accent-3 white-text hoverable"><b>Call Now</b></a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="images/contactus1.jpg" ></div>
  </div>
  <br>
  <br>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="fa fa-phone"></i></h2>
            <h5 class="center orange accent-3 white-text" style="font-size:21px;padding:8px;"><b>CALL US</b></h5>

            <p class="light center" style="font-size:18px;"><b>999999999</b></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="fas fa-envelope"></i></h2>
            <h5 class="center orange accent-3 white-text" style="font-size:21px ;padding:8px;"><b>EMAIL</b></h5>

            <p class="light center" style="font-size:18px;"><b>contact@codersarena.com</b></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="fa fa-home"></i></h2>
            <h5 class="center orange accent-3 white-text" style="font-size:21px;padding:8px;"><b>VISIT US</b></h5>

            <p class="light center" style="font-size:18px;"><b>Dharmsinh Desai University, India</b></p>
          </div>
        </div>
      </div>

    </div>
  </div>

<!-- Get in touch section-->

  <div class="parallax-container valign-wrapper hide-on-small-only">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header right-align black-text "><b>Get In Touch With Our Experts</b></h2>
        <div class="row center">
          <h5 class="header col s12 black-text right-align">Get Advice From Experts For Industry Ready Course.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/contactus2.jpg" alt=""></div>
  </div>
  <div class="parallax-container valign-wrapper hide-on-med-and-up">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header center-align black-text " style="margin-top: -70px;"><b>Get In Touch With Our Experts</b></h2>
        <div class="row center">
          <h5 class="header col s12 black-text">Get Advice From Experts For Industry Ready Course.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/contactus2.jpg" alt=""></div>
  </div>
  <br>
  <br>

 <!-- form -->
  
<div class="container white z-depth-1 form2-out" id="expert">
  <div class="row hide-on-small-only">
    <h4 class="orange-text text-accent-3 col l6 m12"><b>Connect With Us</b></h4>
    <h4 class="orange-text text-accent-3 col l6 m12"><i class="material-icons" style="font-size: 35px;transform: translateY(5px);">telephone</i><b> 999999999</b></h4>
  </div>
  <div class="row hide-on-med-and-up">
  
    <h4 class="orange-text text-accent-3 col s12 center-align" style="border-top:1px grey solid;padding-top:5px;margin-top:0;"><i class="material-icons" style="font-size: 35px;transform: translateY(5px);">call</i><b> 9999999999</b></h4>
  </div>
  <br>
  <form method="post" action="">
    <div class="row">
      <div class="col l6 m12 s12">
        <div class="row">
            <div class="input-field col s12 form2">
              <input id="F_Name" name="F_Name" type="text" class="validate  orange-text text-accent-3" required>
              <label for="F_Name" class=" orange-text text-accent-3">First Name</label>
            </div>
            <div class="input-field col s12 form2">
              <input id="L_Name" name="L_Name" type="text" class="validate  orange-text text-accent-3" required>
              <label for="L_Name" class=" orange-text text-accent-3">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m12 s12 form2">
              <input id="Number" name="Number" type="text" class="validate  orange-text text-accent-3" pattern="[0-9]{10}" required>
              <label for="Number" class=" orange-text text-accent-3">Mobile No.</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m12 s12 form2">
              <input id="email" name="email" type="email" class="validate  orange-text text-accent-3" required>
              <label for="email" class=" orange-text text-accent-3">Email ID</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
              <button class="btn btn-large waves-effect waves-dark hoverable white black-text" name="submit" type="submit"  id="submit" style="margin-bottom: 20px;"><b>SUBMIT</b>
                <i class="material-icons right orange-text text-accent-3">send</i>
              </button>
            </div>
        </div>
      </div>
      <div class="col l6 hide-on-med-and-down">
        <div class="slider">
          <ul class="slides hoverable" style="width: 100%;"> 
            <li style="border:2px grey solid">  
              <img src="images/logo.png" style="width: 100%;">    
            </li>  
            <li style="border:2px grey solid">  
              <img src="images/course1.jpg" style="width: 100%;">   
            </li>    
          </ul>
        </div> 
      </div>

    </div>
  </form>
</div>  
    <!-- contact section ends -->

      <!--footer starts-->
    <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Made with <i class="material-icons ">favorite</i> by DWIJSINH H GOHIL</h5>
              <p class="grey-text text-lighten-4">DHARMSINH DESAI UNIVERSITY</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Follow Us On</h5>
              <ul>
                <li><a class="btn-floating red darken-3" href="https://www.youtube.com/channel/UCv-hJwt6dcm7YMVpFr2Sx_g"><i class="fab fa-youtube"></i></a> YOUTUBE</li>
                <br>
                <li><a class="btn-floating light-blue darken-3" href="https://www.linkedin.com/in/dwijsinh-h-gohil-2415521b9"><i class="fab fa-linkedin"></i> </a> Linkdin</li>
                <br>
                <li><a class="btn-floating black darken-3" href="https://www.instagram.com/dwijsinh_gohil/"><i class="fab fa-instagram"></i></a> INSTAGRAM</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2021 Coders Arena
          </div>
        </div>
      </footer>

      <!--footer ends here-->
</body>
</html>