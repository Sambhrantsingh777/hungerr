<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<style>
    
    .site-navbar-light{
        background: #000 !important
    }
    </style>
  <section class="login_form d-flex align-items-center rv7" id="section-about">
      <div class="container">
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
          <button type="button" style="background-color: blue;" class="btn btn btn-sm btn-block div10" onclick="window.location='registration.php?login=form';">Member Login</button>
          <br>
          <center><div class="g-signin2" data-onsuccess="onSignIn"></div></center>                   
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
    </section>

<?php include 'footer.php';?>
    <script>
    $(function(){
              
    });
    
    </script>
