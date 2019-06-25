<?php
session_start();
ob_start();
$register_error=False;
$db_ini = parse_ini_file("db.ini");
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
    <style>
        .site-navbar-light {
            background: #000 !important
        }
    </style>

    <section class="login_form d-flex align-items-center rv8" id="section-about">
        <div class="container">
            <form class="cutomer_form reg_form" method="post">
                <h3 class="text-center text-dark">Restaurant Registration</h3>

                <div class="row justify-content-center">

                    <div class="col-lg-6 col-sm-9 align-item-center site-animate">
                        <div class="form-row">
                              <div class="col-12 form-group">
                                <label class="mb-0">Name Of Restaurant</label>
                                <input name="restaurantName" type="text" class="form-control text-capitalize" required="" placeholder="Name of Restaurant"
 oninvalid="this.setCustomValidity('Restaurant name is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                            
                            <div class="col-sm-6 form-group">
                                <label class="mb-0">Your Name</label>
                                <input name="client_name" type="text" class="form-control text-capitalize" required="" placeholder="Your name"
 oninvalid="this.setCustomValidity('Your name is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                              <div class="col-sm-6 form-group">
                                <label class="mb-0">Designation</label>
                                <select name="Designation" class="form-control">
                                  <option>Manager</option>
                                  <option>Head</option>
                                  <option>Owner</option>             
                                  </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="mb-0">Mobile No.</label>
                                <input name="client_phone" type="text" class="form-control" onkeypress="return event.charCode >=48 && event.charCode <=57" required="" placeholder="Phone Number"
 oninvalid="this.setCustomValidity('Mobile Number is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                       
                            <div class="col-sm-6 form-group">
                                <label class="mb-0">Email ID</label>
                                <input name="client_email" type="text" class="form-control" required="" placeholder="E-Mail Address"
 oninvalid="this.setCustomValidity('Email ID is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                            <div class="col-4 form-group">
                                <label class="mb-0">State</label>
                                <select name="stateName" class="form-control" id="state" onchange="getCity()">
                                </select>
                            </div>
                            <div class="col-4 form-group">
                                <label class="mb-0">City</label>
                                <select name="cityName" class="form-control" id="city">
                                </select>
                            </div>
                              <div class="col-4 form-group">
                                <label class="mb-0">Pin Code</label>
                                <input name="PinCode" type="text" class="form-control" maxlength="6" onkeypress="return event.charCode >=48 && event.charCode <=57" placeholder="Pin Code">
                            </div>
                            <div class="col-12 form-group">
                                <label class="mb-0">Address Of Restaurant</label>
                                <textarea name="Address" class="form-control" rows="2" placeholder="Full Address for your Restaurant." required="" oninvalid="this.setCustomValidity('Address is required!!.')"
 oninput="setCustomValidity('')"></textarea>
                            </div>
                            <div class="col-sm-6 form-group">
                              <label class="mb-0">Password</label>
                              <input name="client_password" type="password" class="form-control" required="" placeholder="Password"
 oninvalid="this.setCustomValidity('Password is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                            <div class="col-sm-6 form-group">
                              <label class="mb-0">Confirm Password</label>
                              <input name="client_confirmed_password" type="password" class="form-control" required="" placeholder="Confirm Password"
 oninvalid="this.setCustomValidity('Password is required!!.')"
 oninput="setCustomValidity('')">
                            </div>
                        </div>

                        <div class="custom-checkbox">
                              <input type="checkbox" class="custom-control" required=""
 oninvalid="this.setCustomValidity('You must agree our terms and conditions to proceed!!')"
 oninput="setCustomValidity('')">
                              <label>I agree to Hungers's 
                                  <span>
                                  <a  href="terms_condition.php" class="text-dark terms"><b>Terms of Service, Privacy Policy and Content Policies</b>
                                      </a>
                                      </span></label>
                            </div>
                        <button type="submit" class="btn btn-logo btn-sm btn-block">Register</button>
                        <button id="login" type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#restro_login">Already Have An Account</button>
                      

                    </div>

                </div>
            </form>

            
        </div>
    </section>

    <div class="modal fade" id="restro_login" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
             
                <div class="modal-body">
                       <form class="member_form login_form" method="post">   
          <h3 class="text-center text-dark">Resturant Login</h3>
          
        <div class="row justify-content-center">
          
         <div class="col-lg-6 col-sm-9 align-item-center site-animate">
                                   
                      <div class="form-group">
                              <label class="mb-0">Email ID / Mobile No.</label>
                            <input name="client_username" type="text" class="form-control" autofocus required="" placeholder="Email/Phone"
 oninvalid="this.setCustomValidity('Email OR Mobile number is required!!.')"
 oninput="setCustomValidity('')">
                        </div>
                       <div class="form-group">
                              <label class="mb-0">Password</label>
                            <input name="client_pswd" type="password" class="form-control" autofocus required="" placeholder="Password"
 oninvalid="this.setCustomValidity('Password is required!!.')"
 oninput="setCustomValidity('')">
                        </div>                 
                   
                      <button type="submit" class="btn btn-logo btn-sm btn-block">Login</button>
                       <button type="button" class="btn btn-success btn-sm btn-block" onclick="window.open('registration.php','_self')">New Registration</button>
                                    
                  
            </div>        
       
               </div>
              
             
              
               </form>
                </div>

            </div>
        </div>
    </div>
    <script>
      getStates();
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
      function modal(page="registration.php"){
          var span = document.getElementsByClassName("close")[0];
          // Get the modal
          var modal = document.getElementById('error_Modal');
          // When the user clicks the button, open the modal
          modal.style.display = "block";
          function show_modal(){window.location.href=page;} 
          span.onclick = function() {
            show_modal();
          }
          setTimeout(show_modal, 3000);
        }

      function getStates(){ 
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else { // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
          var a=0;
          var options="";
          while(a<JSON.parse(this.responseText).length){
              options+='<option>'+JSON.parse(this.responseText)[a].region+'</option>';
              a++;
            }
          document.getElementById("state").innerHTML = options
          }
        }
        xmlhttp.open("GET","http://battuta.medunes.net/api/region/in/all/?key=e093106686ea761cb6c47042f8287ae2",true); //+str
        xmlhttp.send();
      }
      function getCity(){ 
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else { // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
          var a=0;
          var options="";
          while(a<JSON.parse(this.responseText).length){
              options+='<option>'+JSON.parse(this.responseText)[a].city+'</option>';
              a++;
            }
          document.getElementById("city").innerHTML = options
          }
        }
        xmlhttp.open("GET","http://geo-battuta.net/api/city/in/search/?region="+document.getElementById("state").value+"&key=e093106686ea761cb6c47042f8287ae2",true); //+str
        xmlhttp.send();
      }
    </script>
  <?php

// ######################
   ##  MODAL TRIGGER   ##
   ######################

if (isset($_GET["login"])){
  echo "<script>setTimeout(function(){ $('#login').click()}, 100);</script>";
}

// ##############################
//                              #
//    CLIENT REGISTRATION       #
//                              #
// ##############################

// ######################
   ##  LOGIN PROCESS   ##
   ######################

if (isset($_POST["client_username"]) && isset($_POST["client_pswd"])){
    $client_username=check_input($_POST["client_username"]);
    $client_pswd=check_input($_POST["client_pswd"]);
    $con = mysqli_connect($db_ini["host"], $db_ini["username"], $db_ini["password"], $db_ini["database"]);
    // if($con){echo "connected";}
    $sqlCommand = "SELECT * FROM client_userinfo WHERE Restaurant_ID='".mysqli_real_escape_string($con, $client_username)."' OR Phone='".mysqli_real_escape_string($con, $client_username)."' OR Email='".mysqli_real_escape_string($con, $client_username)."'";
    $query=mysqli_query($con,$sqlCommand);
    $result = mysqli_fetch_assoc($query);
    if (password_verify($_POST['client_pswd'], $result['Password']))
    {
    $_SESSION['Name'] = $result['Name'];
    $_SESSION['Email'] = $result['Email'];
    $_SESSION['Phone'] = $result['Phone'];
    $_SESSION['RID'] = $result['Restaurant_ID'];
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

// ####################################
   ##  REGISTER VALIDATION PROCESS   ##
   ####################################

if (isset($_POST["client_name"]) && isset($_POST["client_email"]) && isset($_POST["client_phone"]) && isset($_POST["client_password"]) && isset($_POST["client_confirmed_password"]) && isset($_POST["restaurantName"])&& isset($_POST["cityName"])&& isset($_POST["stateName"])&& isset($_POST["Address"])&& isset($_POST["restaurantName"])){
  if ($_POST["client_password"]!=$_POST["client_confirmed_password"]){
    echo '<script type="text/javascript">',
     'passwordError();',
     '</script>';
     $register_error=True;
  }
  if (!preg_match("/^[6-9]{1}[0-9]{9}$/",$_POST["client_phone"])){
    echo '<script type="text/javascript">',
    'phoneError();',
    '</script>';
     $register_error=True;
  }
  if (!filter_var($_POST["client_email"], FILTER_VALIDATE_EMAIL)){
    echo '<script type="text/javascript">',
     'emailError();',
     '</script>';
     $register_error=True;
  }

//   ###########################
//   ##       REGISTER        ##
//   ###########################

  if ($register_error==False){
    $client_name=check_input($_POST["client_name"]);
    $client_email=check_input($_POST["client_email"]);
    $client_phone=check_input($_POST["client_phone"]);
    $client_password=check_input($_POST["client_password"]);
    $client_confirmed_password=check_input($_POST["client_confirmed_password"]);
    $restaurantName=check_input($_POST["restaurantName"]);
    $Address=check_input($_POST["Address"]);
    $stateName=check_input($_POST["stateName"]);
    $cityName=check_input($_POST["cityName"]);

      $con = mysqli_connect($db_ini["host"], $db_ini["username"], $db_ini["password"], $db_ini["database"]);
      // if ($con){
        // echo "CONNECTED";
      // }
      $sqlCommand = "SELECT * FROM client_userinfo WHERE Email='".mysqli_real_escape_string($con, $client_email)."'";
      $query=mysqli_query($con,$sqlCommand);
      $result = mysqli_fetch_assoc($query);
      $sqlCommand2 = "SELECT * FROM client_userinfo WHERE Phone='".mysqli_real_escape_string($con, $client_phone)."'";
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
      ###### GENERATE RESTAURANT ID########
      $sqlCommand3 = "SELECT * FROM client_userinfo ORDER BY `Restaurant_ID` DESC LIMIT 1";
      $query3=mysqli_query($con,$sqlCommand3);
      $result3 = mysqli_fetch_assoc($query3);
    echo $result3['Email'];
    echo $result3['Restaurant_ID'];
    if ($result3){
      $RID = $result3['Restaurant_ID']+1;
    }
    else{
      $RID = 7662000;
    }
    #####################################
      if (is_null($result) && is_null($result2)){
        $hashed_password = password_hash($client_password, PASSWORD_BCRYPT);
        // echo "Available";
        $adrs = str_replace("\r", " ",  $Address);
        $jsonArray = array(
            "Address" => mysqli_real_escape_string($con, str_replace("\n", " ",  $adrs)),
            "State" => mysqli_real_escape_string($con, $stateName),
            "City" => mysqli_real_escape_string($con, $cityName),
            "Pin Code" => mysqli_real_escape_string($con, $_POST['PinCode']),
            "Designation" => mysqli_real_escape_string($con, $_POST['Designation']),
            "Live" => true,
        );
        $json = json_creator($jsonArray);
        // echo $json;
        $sqlCommand = "INSERT INTO client_userinfo VALUES(DEFAULT,'".$RID."','".mysqli_real_escape_string($con, $restaurantName)."','".mysqli_real_escape_string($con, $client_name)."','".mysqli_real_escape_string($con, $client_email)."','".mysqli_real_escape_string($con, $client_phone)."','".mysqli_real_escape_string($con, $hashed_password)."',DEFAULT,".$json.")";
        echo $sqlCommand;
        $query=mysqli_query($con,$sqlCommand);
        echo mysqli_error($con);
        if ($query){
          echo '<div id="error_Modal" class="modal" data-keyboard="true">',
          '<!-- Modal content -->',
          '<div class="modal-content" style="color: green;">',
          '<span class="close">&times;</span>',
          '<center><p><span>You have successfully registered with us.<span><br><strong>Thank you for being a part of hungerrr...</center></strong><br></p>',
          '</div>',
          '<script type="text/javascript">',
          'modal(page="index.php");',
          '</script>';
          ######REDIRECT IF SIGNED IN############
          $_SESSION['Name'] = $client_name;
          $_SESSION['Email'] = $client_email;
          $_SESSION['Phone'] = $client_phone;
          $_SESSION['RID'] = $RID;
          if (!is_dir('restaurants/'.$restaurantName."==>".$client_name)) {
            mkdir('restaurants/'.$restaurantName."==>".$client_name, 0777, true);
            chmod('restaurants/'.$restaurantName."==>".$client_name, 0777);
          }
          else{
            echo '<div id="error_Modal" class="modal" data-keyboard="true">',
          '<!-- Modal content -->',
          '<div class="modal-content" style="color: green;">',
          '<span class="close">&times;</span>',
          '<center><p><span>You have successfully registered with us.<span><br><strong>Thank you for being a part of hungerrr...</center></strong><br></p><center>NOTE:- Could not create image directory for this account. Please report this to admin.</center>',
          '</div>',
          '<script type="text/javascript">',
          'modal(page="index.php");',
          '</script>';
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
  function json_creator($jsonArray){
    $jsonString="'{";
    foreach ($jsonArray as $key => $value) {
       $jsonString.=', "'.$key.'"'.':"'.$value.'"';
    }
    $jsonString.="}'";
    return str_replace('{, "', '{"', $jsonString);
  }
?>
    <?php include 'footer.php';?>
        