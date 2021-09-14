<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
            mysqli_stmt_close($stmt);
        }
    }

// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

 //Check for confirm password field
//if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
//   $password_err = "Passwords should match";
//}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username,password) VALUES (?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: signup_course.html");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
        mysqli_stmt_close($stmt);  
    }
    
    
}
mysqli_close($conn);
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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dda7a08063.js" crossorigin="anonymous"></script>
    
    <style>
      input{
        margin-bottom: 20px;
        font-size:18px;
      }
      input[type=submit]{
      width: 30%;
      margin-left: 100px;
      background: linear-gradient(to right,#fc00ff,#00dbde );
      color: black;
      border-radius: 5px;
}
    </style>
    
</head>
<body>
 <!--nav bar starting-->

 <nav class="bg-primary">
       <div class="container">
        <div class="nav-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <a href="#" class="brand-logo ">SIGN-UP</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.html"><i class="material-icons left">home</i>Home</a></li>
            <li><a href="courses.html"><i class="material-icons left">import_contacts</i>Courses</a></li>
            <li><a href="about_us.html"><i class="material-icons left">info</i>About Us</a></li>
            <li><a href="contact_us.php"><i class="material-icons left">call</i>Contact</a></li>
        
            
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

    <li><div class="divider"></div></li>
    <li><a class="subheader">Connect With Us</a></li>
    <li><a class="waves-effect" href="https://www.youtube.com/channel/UCv-hJwt6dcm7YMVpFr2Sx_g">Our Youtube Channel</a></li>
  </ul>
 
      <!--end of side nav bar for mobile-->

      <!--starting of js-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/share.js"></script>
    <script src="js/type.js"></script>
    <script>
    $(document).ready(function(){
        $('.sidenav').sidenav();  
        M.Slider.init($('.slider'));
        M.Materialbox.init($('.materialboxed'));
      });</script>

<div style="display: flex; align-items: center;"class="container">
    <div class="col l6 hide-on-med-and-down">
    <div class="row">
  <img style="width: 50%; padding-right: 10px;" src="images/register.svg" alt="">
  </div>
  </div>
  <div class="row">
    <form action="" method="post" class="col s12">
      <h3 class="center">SIGN-UP</h3>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input style="padding-right:30px;" name="username" id="username" type="text" class="form-control" required>
          <label for="username">UserName</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input style="padding-right:30px;" name="password" id="password" type="password" class="form-control" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input style="padding-right:30px;" name="confirm_password" id="confirm_password" type="password" class="form-control" required>
          <label for="confirm_password">Confirm_Password</label>
        </div>
      </div>
      <div class="row">
            <div class="col s12">
              <button class="btn btn-large waves-effect waves-dark hoverable white black-text" name="submit" type="submit"  id="submit" style="margin-bottom: 20px;"><b>SUBMIT</b>
                <i class="material-icons right orange-text text-accent-3">send</i>
              </button>
            </div>
        </div>
    </form>
    <p>**Sign UP To See Our Exclusive Video Content**</p> 
  </div>
</div>

</body>