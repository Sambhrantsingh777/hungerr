<!DOCTYPE html>
<html lang="en">

 <?php include 'header.php';?>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Welcome To Hungerr</h1>
            <?php UsernameHeader()?>
            <h2 class="h5 site-subheading mb-5 site-animate">Wanna eat out without waiting?? Book a table right away and grab your dishes on your convenient time.!!</h2>    
            <p><button type="button" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">BOOK TABLE</button></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section py-3" id="section-about">
      <div class="container">
             <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
        <div class="row justify-content-between">
          <div class="col-sm-7 site-animate">
         
            <p class="text-dark text-justify">We at Hungerr.co.in are one of the Delhi based startups, who have a vision of providing home based services to those who strugle for time to run out and look out for places to have fine dinning restaurants, pubs, and clubs. Our aim is to provide our customers a completely digital and home based experience of dinning and catering services without any hussles.</p>

            <p class="text-dark text-justify mb-4">We are currently growing in Delhi/NCR, soon we will be expanding our services to other metropolitan cities as well. Any suggestions or complaints are welcome.</p>
            <p><a href="about.php" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
          </div>
         
          <div class="col-sm-4 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/about.jpg" alt="Hungerr_resources" class="img-fluid d-block mx-auto">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    <section class="site-section bg-light py-3" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center site-animate">
            <h4 class="site-sub-title">Our Offers</h4>
            <h3 class="display-4">Our Offer This Summer</h3>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead text-dark">BOOM!!! Here comes another set of Indian masala dishes from our most famous restaurants. Now you can make pre-bookings for your orders on your favorite restaurants at your convenient time.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                    <div class="div2">
                  <img src="images/footer.jpg" alt="Hungerr_resources" class="img-fluid">
                        </div>
                  <div class="media-body p-sm-3 p-4">

                    <h5 class="mt-0">The Taj</h5>
                      <h6 class="text-primary">Saket, Delhi</h6>
                    <p class="mb-3 div1">Loves the smell of chicken?? Give it a try!!!.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Book Now</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                    <div class="div2">
                  <img src="images/footer-bg.jpg" alt="Hungerr_resources" class="img-fluid">
                    </div>
                  <div class="media-body p-sm-3 p-4">
                    
                    <h5 class="mt-0">The Big Yellow Door</h5>
                      <h6 class="text-primary">Lajpat Nagar, Delhi</h6>
                    <p class="mb-3 div1">Now get Egg dishes @ just Rs. 29.50.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Book Now</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                    <div class="div2">
                  <img src="images/offer_3.jpg" alt="Hungerr_resources" class="img-fluid">
                    </div>
                  <div class="media-body p-sm-3 p-4">
                    
                    <h5 class="mt-0">Kake Da dhaba</h5>
                      <h6 class="text-primary">Ashok Vihar, Delhi</h6>
                    <p class="mb-3 div1">What to expect in just @11.50.?? Now, get Special Chawmeen from our best restaurant at such a low cost.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Book Now</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                    <div class="div2">
                  <img src="images/offer_1.jpg" alt="Hungerr_resources" class="img-fluid">
                    </div>
                  <div class="media-body p-sm-3 p-4">
                    
                    <h5 class="mt-0">Goverdhan</h5>
                      <h6 class="text-primary">Model Town, Karnal</h6>
                    <p class="mb-3 div1">There's a special cheff named **** who cooks a special dish named ****. Reveal the info @ just rs.133.50</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Book Now</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                    <div class="div2">
                  <img src="images/offer_2.jpg" alt="Hungerr_resources" class="img-fluid">
                    </div>
                  <div class="media-body p-sm-3 p-4">                    
                    <h5 class="mt-0">Haveli</h5>
                      <h6 class="text-primary">Murthal, GT Karnal Road</h6>
                    <p class="mb-3 div1">Superr fresh fish @ just Rs 102.50 at your favorite restaurant.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Book Now</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                    <div class="div2">
                  <img src="images/offer_1.jpg" alt="Hungerr_resources" class="img-fluid">
                    </div>
                  <div class="media-body p-sm-3 p-4">
                    
                     <h5 class="mt-0">Masala Chicken with Sausage</h5>
                      <h6 class="text-primary">Mathura</h6>
                    <p class="mb-3 div1">Loves the smell of chicken?? Give it a try!!!.</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Book Now</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                    <div class="div2">
                  <img src="images/offer_2.jpg" alt="Hungerr_resources" class="img-fluid">
                    </div>
                  <div class="media-body p-sm-3 p-4">
                    
                    <h5 class="mt-0">Fresh Salmon Fish</h5>
                      <h6 class="text-primary">Dwarka</h6>
                    <p class="mb-3 div1">Superr fresh fish @ just Rs 102.50 at your favorite restaurant.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Book Now</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                    <div class="div2">
                  <img src="images/offer_3.jpg" alt="Hungerr_resources" class="img-fluid">
                    </div>                  <div class="media-body p-sm-3 p-4">
                    
                    <h5 class="mt-0">Mix Veg Special Dish</h5>
                    <h6 class="text-primary">Delhi</h6>
                    <p class="mb-3 div1">There's a special cheff named **** who cooks a special dish named ****. Reveal the info @ just rs.133.50</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Book Now</a></p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->
<!--Menu Section-->
    <section class="site-section py-3 d-none" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center site-animate">
            <h4 class="site-sub-title">Delicious Menu</h4>
              <h3 class="display-4 text-capitalize">Do you often get confused while ordering your food at your favorite restaurant??</h3>
            <div class="row justify-content-center">
              <div class="col-md-7">              	
                <p class="lead text-dark">Now you have all the time in the world to choose your favorite dishes from the menu of your favorite restaurant.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p class="text-dark">Can you smell the odor of that yummy chicken?? Well you need to book a table first.</p>
                        <h6 class="text-primary menu-price">Rs.350.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p class="text-dark">Bored of Indian food?? try Italian .</p>
                        <h6 class="text-primary menu-price">Rs.204.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p class="text-dark">Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p class="text-dark">Bored of Indian food?? try Italian .</p>
                        <h6 class="text-primary menu-price">Rs.204.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p class="text-dark">Can you smell the odor of that yummy chicken?? Well you need to book a table first.</p>
                        <h6 class="text-primary menu-price">Rs.350.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p class="text-dark">Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p class="text-dark">Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p class="text-dark">Bored of Indian food?? try Italian .</p>
                        <h6 class="text-primary menu-price">Rs.204.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p class="text-dark">Can you smell the odor of that yummy chicken?? Well you need to book a table first.</p>
                        <h6 class="text-primary menu-price">Rs.350.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p class="text-dark">Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p class="text-dark">Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p class="text-dark">Bored of Indian food?? try Italian .</p>
                        <h6 class="text-primary menu-price">Rs.204.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p class="text-dark">Can you smell the odor of that yummy chicken?? Well you need to book a table first.</p>
                        <h6 class="text-primary menu-price">Rs.350.50</h6>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section py-3 bg-light" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutteRs.">
          <div class="col-md-12 text-center site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead text-dark">Are you kind of foody and moody at the same time?? Try the most beautiful dinning destinations for your food.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-6 site-animate p-3">
            <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-3 col-6 site-animate p-3">
            <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_2.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-3 col-6 site-animate p-3">
            <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>

          <div class="col-sm-3 col-6 site-animate p-3">
            <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_2.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-3 col-6 site-animate p-3">
            <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-3 col-6 site-animate p-3">
            <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
             <div class="col-sm-3 col-6 site-animate p-3">
            <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-3 col-6 site-animate p-3">
            <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section py-3" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center site-animate">
            <h2 class="display-4">Get In Touch</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">If you own a restaurant and wanna tie up with us, please write us at business@hungerr.co.in, or make a call @971732005. Please feel free to reach us out in case of any enquiries or any complaints.</p>
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
           <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input name="email" type="text" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Send Message">
              </div>
              <?php
                if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message']))     
                {
                  $to_email = 'Sambhrantsingh777@gmail.com';
                  $subject = $_POST['name'].' sent a message from '.$_POST['email'];
                  $message = $_POST['message'];
                  $headers = 'From: '.$_POST['email']."\r\n";
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
       
          <div class="col-sm-4 site-animate p-3">
            <div><img src="images/about.jpg" alt="" class="img-fluid"></div>
         
             <ul class="list-unstyled address">
              
              <li> <span class="icon-phone"></span>  +91 971 732 7005 </li>
              <li><span class="icon-email"></span> <a class="text-dark" href="mailto:info@hungerr.co.in">info@hungerr.in</a></li>
              </ul>
          </div>
          
        </div>
      </div>
    </section>
 
    <!-- END section -->
     <div class="modal fade" id="reservationModal" tabindex="-1">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                 <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
              </div>
         
            </div>
            
          <div class="modal-body">
                    <h3 class="modal-title">Reserve A Table</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="row">
          
              <div class="col-lg-12">
               
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-6 form-group">
                      <label for="m_fname mb-0">First Name</label>
                      <input type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-6 form-group">
                      <label for="m_lname mb-0">Last Name</label>
                      <input type="text" class="form-control" id="m_lname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email mb-0">Email</label>
                      <input type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people mb-0">How Many People</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4+">4+ People</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone mb-0">Phone</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6 form-group">
                      <label for="m_date mb-0">Date</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-6 form-group">
                      <label for="m_time mb-0">Time</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message mb-0">Message</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-sm btn-block" value="Reserve Now">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
      
        </div>
      </div>
    </div>
        
    
    
<?php include'footer.php';?> 
