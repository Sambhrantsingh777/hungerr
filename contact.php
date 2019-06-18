<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

 <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Contact Us</h1>       
            
          </div>
        </div>
      </div>
    </section>


  <section class="site-section py-3" id="section-about">
      <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height:450px">
              <div class="col-lg-7 align-item-center site-animate">
                  <form method="post">
                     <div class="form-row">
                          <div class="col-sm-6 form-group">
                                  <label class="mb-0">Name</label>
                                <input name="Name" type="text" class="form-control" autofocus>  
                            </div>
                            <div class="col-sm-3 col-6 form-group">
                                  <label class="mb-0">Mobile No.</label>
                                <input name="Phone" type="text" class="form-control" onkeypress="return event.charCode >=48 && event.charCode <=57" maxlength="10">  
                            </div> 
                         <div class="col-sm-3 col-6 group">
                                  <label class="mb-0">Alt. Contact No.</label>
                                <input name="Phone2" type="text" class="form-control" onkeypress="return event.charCode >=48 && event.charCode <=57">  
                            </div> 
                    </div>
                      <div class="form-row">
                          <div class="col-sm-6 form-group">
                                  <label class="mb-0">Email ID</label>
                                <input name="Email" type="text" class="form-control">  
                            </div>
                            <div class="col-sm-3 col-6 form-group">
                                  <label class="mb-0">City</label>
                                <select name="City" class="form-control">
                                    <option>Pitampura</option>
                                    <option>Rohini</option>
                                    <option>Dwarka</option>
                                
                                </select>  
                            </div>  
                            <div class="col-sm-3 col-6 form-group">
                                  <label class="mb-0">State</label>
                                <select name="State" class="form-control">
                                    <option>Delhi</option>
                                    <option>Uttar Pradesh</option>
                                    <option>Haryana</option>
                                
                                </select>  
                            </div>  
                    </div>
                    <div class="form-group">                        
                        <label class="mb-0">Message</label>
                      <textarea name="Message" class="form-control" rows="3"></textarea>
                      </div>  
                      
                      <button type="submit" class="btn btn-logo btn-sm float-right">Send</button>
                      <?php
                        if (isset($_POST['Name'])&&isset($_POST['Email'])&&isset($_POST['Message'])&&isset($_POST['Phone']))     
                        {
                          $to_email = 'Sambhrantsingh777@gmail.com';
                          $subject = $_POST['Name'].' sent a message from '.$_POST['Email'].' Please contact this customer @'.$_POST['Phone'];
                          $message = $_POST['Name'].' , contact number:- '.$_POST['Phone'].'/'.$_POST['Phone2'].' tried contacting you from '.$_POST['City'].' '.$_POST['State']."\n". 'He sent a message:-' .$_POST['Message'];
                          $headers = 'From: '.$_POST['Email']."\r\n";
                          $headers .= "To: ".$to_email."\n";
                          $headers .= "Organization: Sender Organization\r\n";
                          $headers .= "MIME-Version: 1.0\r\n";
                          $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                          $headers .= "X-Priority: 3\r\n";
                          $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
                          $done = mail($to_email,$subject,$message,$headers);
                          if($done==true){
                            echo "SENT";
                          }
                          else{
                            echo "Could not send e-mail.";
                          }
                        }
                      ?>
                  </form>
                  
            </div>
            <div class="col-lg-5 d-none d-lg-block">
            <div class="p-2">
                <img src="images/offer_1.jpg" class="img-fluid mx-auto d-block">
                </div>
            
            </div>
       
        </div>
      </div>
    </section>


<?php include 'footer.php';?>
  