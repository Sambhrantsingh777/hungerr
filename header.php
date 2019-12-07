<?php
session_start();
ob_start();
$register_error=False;
$db_ini = parse_ini_file("db.ini");
?>

<head>
    <title>Hungerr.in</title>
    <meta chaRs.et="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="google-signin-client_id" content="975596800062-g7bjc9g8gpcpj3tbqfdblla62sl2qr4h.apps.googleusercontent.com" >
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="icon" type="image/png" href="images/favicon.PNG"/>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">    
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
  <body class="animsition" data-spy="scroll">

    <nav class="navbar navbar-expand-lg navbar-dark site_navbar site-navbar-light" id="site-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="img-fluid logo_hunger" src="images/favicon.PNG" alt="IMG-LOGO"></a>
        <button class="menu_btn px-2 border-0 text-white bg-transparent" type="button">
          <span class="oi oi-menu"></span>
        </button>

        <div class="design_menu" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="index.php#section-offer" class="nav-link">OfferS</a></li>
            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
           
            <li class="nav-item"><?php authStatus();?></li>
          </ul>
        </div>
      </div>
    </nav>
        

<!-- Login Modal-->
    <div class="modal fade" id="regsiter_login" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
           <form method="post" class="cutomer_form login_form">   
          <h3 class="text-center text-dark">Customer Login</h3>
          
        <div class="row justify-content-center">
          
         <div class="col-lg-6 col-sm-9 align-item-center site-animate">                                   
          <div class="form-group">
                  <label class="mb-0">Email ID / Mobile No.</label>
                <input name="username" type="text" class="form-control" required="" placeholder="Email/Phone"
 oninvalid="this.setCustomValidity('Email OR Mobile number is required!!.')"
 oninput="setCustomValidity('')" autofocus>  
            </div>
           <div class="form-group">
                  <label class="mb-0">Password</label>
                <input name="pswd" type="password" class="form-control" required="" placeholder="Password"
 oninvalid="this.setCustomValidity('Password field cannot be empty!!')"
 oninput="setCustomValidity('')" autofocus>  
            </div>                 

          <button type="submit" class="btn btn-logo btn-sm btn-block">Login</button>
          <button id="signUpLink" type="button" class="btn btn-success btn-sm btn-block div10">New Registration</button>
          <div class="g-signin2 btn btn-primary-reg btn-lg btn-block" data-onsuccess="onSignIn"></div>                   
            </div>
            
        </div>
               </form>
          
              <form method="post" class="cutomer_form login_form" style="display:none">
                <h3 class="text-center text-dark">Customer Registration</h3>

                <div class="row justify-content-center">

                    <div class="col-sm-9 align-item-center site-animate">
                        <div class="form-row">
                            <div class="col-sm-6 form-group">
                                <label class="mb-0">Name</label>
                                <input name="name" type="text" class="form-control text-capitalize" required="" placeholder="Name"
 oninvalid="this.setCustomValidity('Name field cannot be empty!!.')"
 oninput="setCustomValidity('')">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="mb-0">Mobile No.</label>
                                <input name="phone" type="text" class="form-control" onkeypress="return event.charCode >=48 && event.charCode <=57" required="" placeholder="Mobile No."
 oninvalid="this.setCustomValidity('Mobile Number is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 form-group">
                                <label class="mb-0">Email ID</label>
                                <input name="email" type="text" class="form-control" required="" placeholder="Email"
 oninvalid="this.setCustomValidity('Email is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                            <!-- <div class="col-sm-3 col-6 form-group">
                                <label class="mb-0">State</label>
                                <select class="form-control">
                                    <option>Delhi</option>
                                    <option>Haryana</option>
                                    <option>UP</option>
                                      
                                </select>
                            </div>
                            <div class="col-sm-3 col-6 form-group">
                                <label class="mb-0">City</label>
                                <select class="form-control">
                                    <option>Pitampura</option>
                                    <option>Rohini</option>
                                    <option>Dwarka</option>
                                      
                                </select>
                            </div> -->
                            <div class="col-sm-6 form-group">
                                <label class="mb-0">Password</label>
                                <input name="password" type="password" class="form-control" required="" placeholder="Password"
 oninvalid="this.setCustomValidity('Password is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 form-group">
                                <label class="mb-0">Confirm Password</label>
                                <input name="cnfpassword" type="password" class="form-control" required="" placeholder="Confirm Password"
 oninvalid="this.setCustomValidity('Password is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="custom-checkbox">
                              <input type="checkbox" class="custom-control" name="conditions" class="form-control" required=""
 oninvalid="this.setCustomValidity('You must agree our terms and conditions to proceed!!')"
 oninput="setCustomValidity('')">
                              <label>I agree to Hungers's 
                                  <span>
                                  <a  href="terms_condition.php" class="text-dark terms"><b>Terms of Service, Privacy Policy and Content Policies</b>
                                      </a>
                                      </span></label>
                            </div>
                        <button type="submit" class="btn btn-logo btn-sm btn-block">Register</button>
                        <button type="button" class="btn btn-success btn-sm btn-block div10">Already Have An Account</button>
                   

                    </div>

                </div>
            </form>
        </div>
        </div>
        </div>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="js/modernizr.js"></script>  
    <script>
      function passwordError(){
        alert("Error:- Password does not match.");
        return false;
      }
      function phoneError(){
        alert("Error:- Invalid phone number.");
        return false;
      }
      function emailError(){
        alert("Error:- Invalid Email address.");
        return false;
      }
      function modal(){
          var span = document.getElementsByClassName("close")[0];
          // Get the modal
          var modal = document.getElementById('error_Modal');
          // When the user clicks the button, open the modal
          modal.style.display = "block";
          function redirect(){window.location.href="index.php";} 
          span.onclick = function() {
            redirect();
          }
          setTimeout(redirect, 3000);
        }

    </script>
 
   <!--#######################################-->
   <!--##  GOOGLE LOGIN  PROCESS            ##-->
   <!--#######################################-->
   
    <script type="text/javascript">
        function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
          if(profile){
              $.ajax({
                    type: 'POST',
                    url: 'login_pro.php',
                    data: {id:profile.getId(), name:profile.getName(), email:profile.getEmail()}
                }).done(function(data){
                    console.log("google logged in");
                    if(!window.location.hash) {
                        window.location = window.location + '#logged_in';
                        window.location.reload();
                    }
                }).fail(function() { 
                    alert( "Posting failed." );
                });
          }
        }
        function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
        });
        auth2.disconnect().then(function () {
          console.log('User disconnected out.');
        });
        }
    </script>
    </div> 
    <?php

// ######################
   ##  LOGIN PROCESS   ##
   ######################

if (isset($_POST["username"]) && isset($_POST["pswd"])){
  $username=check_input($_POST["username"]);
  $pswd=check_input($_POST["pswd"]);
  // echo $username;
    $con = mysqli_connect($db_ini["host"], $db_ini["username"], $db_ini["password"], $db_ini["database"]);
    // if($con){echo "connected";}
    $sqlCommand = "SELECT * FROM cx_userinfo WHERE Email='".mysqli_real_escape_string($con, $username)."' OR Phone='".mysqli_real_escape_string($con, $username)."'";
    $query=mysqli_query($con,$sqlCommand);
    $result = mysqli_fetch_assoc($query);
    if (password_verify($_POST['pswd'], $result['Password']))
    {
    $_SESSION['Name'] = $result['Name'];
    $_SESSION['Email'] = $result['Email'];
    $_SESSION['Phone'] = $result['Phone'];
    exit(header('Location:index.php'));
    }
    else{
       echo '<div id="error_Modal" class="modal">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>Incorrect username or password.<center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
    }
    if(mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
    }
  }
      ?>
    <?php
// ##############################
//                              #
//     Customer REGISTRATION    #
//                              #
// ##############################


// ####################################
   ##  REGISTER VALIDATION PROCESS   ##
   ####################################

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["password"]) && isset($_POST["cnfpassword"])){
  if ($_POST["password"]!=$_POST["cnfpassword"]){
    echo '<script type="text/javascript">',
     'passwordError();',
     '</script>';
     $register_error=True;
  }
  if (!preg_match("/^[6-9]{1}[0-9]{9}$/",$_POST["phone"])){
    echo '<script type="text/javascript">',
    'phoneError();',
    '</script>';
     $register_error=True;
  }
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    echo '<script type="text/javascript">',
     'emailError();',
     '</script>';
     $register_error=True;
  }

//   ###########################
//   ##       REGISTER        ##
//   ###########################

  if ($register_error==False){
    $name=check_input($_POST["name"]);
    $email=check_input($_POST["email"]);
    $phone=check_input($_POST["phone"]);
    $password=trim($_POST["password"]);
    $cnfpassword=trim($_POST["cnfpassword"]);
      $con = mysqli_connect($db_ini["host"], $db_ini["username"], $db_ini["password"], $db_ini["database"]);
      $sqlCommand = "SELECT * FROM cx_userinfo WHERE Email='".mysqli_real_escape_string($con, $email)."'";
      $query=mysqli_query($con,$sqlCommand);
      $result = mysqli_fetch_assoc($query);
      $sqlCommand2 = "SELECT * FROM cx_userinfo WHERE Phone='".mysqli_real_escape_string($con, $phone)."'";
      $query2=mysqli_query($con,$sqlCommand2);
      $result2 = mysqli_fetch_assoc($query2); 
      if (!is_null($result)){      
      // echo "found email";
      echo '<div id="error_Modal" class="modal" data-keyboard="true">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>The e-mail you entered is already registered with us, kindly enter another e-mail address or login.</center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
      }
      if (!is_null($result2)){      
      // echo "found phone";
      echo '<div id="error_Modal" class="modal" data-keyboard="true">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>The phone number you entered is already registered with us, kindly enter another phone number or try logging in with e-mail.</center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
      }
      if (is_null($result) && is_null($result2)){
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        // echo "Available";
        $sqlCommand = "INSERT INTO cx_userinfo VALUES(DEFAULT,'".mysqli_real_escape_string($con, $name)."','".mysqli_real_escape_string($con, $email)."','".mysqli_real_escape_string($con, $phone)."','".mysqli_real_escape_string($con, $hashed_password)."',DEFAULT,DEFAULT)";
        // echo $sqlCommand;
        $query=mysqli_query($con,$sqlCommand);
        // echo $query; 
        if ($query){
          echo '<div id="error_Modal" class="modal" data-keyboard="true">',
          '<!-- Modal content -->',
          '<div class="modal-content" style="color: green;">',
          '<span class="close">&times;</span>',
          '<center><p><span>You have successfully registered with us.<span><br><strong>Thank you for being a part of hungerrr...</center></strong><br></p>',
          '</div>',
          '<script type="text/javascript">',
          'modal();',
          '</script>';
          ######REDIRECT IF SIGNED IN############
          $_SESSION['Name'] = $name;
          $_SESSION['Email'] = $email;
          $_SESSION['Phone'] = $phone;
          if (!headers_sent()) {
            header("Location: index.php");
          exit();
          }
        }
      }
  // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
  }
  }
  }

  #############################
  #                           #
  #   AUTH FUNCTIONS          #
  #                           #
  #############################

  function UsernameHeader(){
    if (isset($_SESSION['Name']))
      {echo'<h2 class="site-heading site-animate mb-3">'.$_SESSION['Name'].'</h2>';}
      }
  function authStatus(){
    if (isset($_SESSION['Name']))
      {echo '<a class="nav-link" onclick="signOut()" href="'.htmlspecialchars($_SERVER['PHP_SELF']).'?logout=True">Logout</a>';}
    else
      {echo '<a href="" data-target="#regsiter_login" data-toggle="modal" target="_blank" class="nav-link" id="logInLink">Log in</a>';
      $notLoggedIN=True;}
    if (isset($_GET['logout']))
      {
      session_destroy();
      $_SESSION=array();
      header("Location:".htmlspecialchars($_SERVER['PHP_SELF']));
            }
      }

//########################
//#     UTIL FUNCTIONS   #
//#                      #
//########################

  function check_input($data)
    {
    trim($data);
    stripcslashes($data);
    htmlspecialchars($data);
    return $data;
    }
  ?>

