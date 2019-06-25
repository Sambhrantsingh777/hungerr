<?php
$mysqli = new mysqli("localhost", "root", "P@ssw0rdhai", "hungerr");
$sql = "SELECT * FROM res WHERE email='".$_POST["email"]."'";
$result = $mysqli->query($sql);


if(!empty($result->fetch_assoc())){
  $sql2 = "UPDATE google_users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
}else{
  $sql2 = "INSERT INTO google_users (name, email, google_id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
}
$mysqli->query($sql2);
echo ("DONE");
if(isset($_GET[''])){

}
?>

<div class="row">
          <div class="col-md-12 site-animate">
              <div class="row p-2 my-2 rv6">
              <div class="col-sm-2">
                  <div class="p-2">
                    <img src="images/gallery/resturant3.jpg" class="mx-auto d-block img-fluid">
<!--                      <figcaption class="text-center">View More Images</figcaption>-->
                  </div>
                </div>
             <div class="col-sm-7 rv5 text-center text-sm-left">
                 <h4 class="name_resturant mb-0">The Taj</h4>
                 <p class="location mb-0">Saket, Delhi</p>
                 <div>***** </div>
                 
             </div>
           <div class="col-lg-2 col-sm-3 d-grid">
                 <div class="align-self-end">
                    <button type="button" class="btn btn-success btn-sm btn-block" onclick="window.open('resturant_detail.php','_self')">Know More</button>
                    <button type="button" class="btn btn-warning btn-sm btn-block" onclick="window.open('login.php','_self')">Book Now</button>
                </div>
             </div>
             
        </div>
              <div class="row p-2 my-2 rv6">
              <div class="col-sm-2">
                  <div class="p-2">
                    <img src="images/gallery/resturant1.jpg" class="mx-auto d-block img-fluid">
<!--                      <figcaption class="text-center">View More Images</figcaption>-->
                  </div>
                </div>
             <div class="col-sm-7 rv5 text-center text-sm-left">
                 <h4 class="name_resturant mb-0">The Epic</h4>
                 <p class="location mb-0">GTB Nagar, Delhi</p>
                 <div>***** </div>
                 
             </div>
          <div class="col-lg-2 col-sm-3 d-grid">
                 <div class="align-self-end">
                    <button type="button" class="btn btn-success btn-sm btn-block" onclick="window.open('resturant_detail.php','_self')">Know More</button>
                    <button type="button" class="btn btn-warning btn-sm btn-block" onclick="window.open('login.php','_self')">Book Now</button>
                </div>
             </div>
             
        </div>
            
              <div class="row p-2 my-2 rv6">
              <div class="col-sm-2">
                  <div class="p-2">
                    <img src="images/gallery/resturant2.jpg" class="mx-auto d-block img-fluid">
<!--                      <figcaption class="text-center">View More Images</figcaption>-->
                  </div>
                </div>
             <div class="col-sm-7 rv5 text-center text-sm-left">
                 <h4 class="name_resturant mb-0">Udapi</h4>
                 <p class="location mb-0">Kamla Nagar, Delhi</p>
                 <div>***** </div>
                 
             </div>
             <div class="col-lg-2 col-sm-3 d-grid">
                 <div class="align-self-end">
                    <button type="button" class="btn btn-success btn-sm btn-block" onclick="window.open('resturant_detail.php','_self')">Know More</button>
                    <button type="button" class="btn btn-warning btn-sm btn-block" onclick="window.open('login.php','_self')">Book Now</button>
                </div>
             </div>
             
        </div>
              
                 <div class="row p-2 my-2 rv6">
              <div class="col-sm-2">
                  <div class="p-2">
                    <img src="images/gallery/resturant1.jpg" class="mx-auto d-block img-fluid">
<!--                      <figcaption class="text-center">View More Images</figcaption>-->
                  </div>
                </div>
             <div class="col-sm-7 rv5 text-center text-sm-left">
                 <h4 class="name_resturant mb-0">Goverdhan</h4>
                 <p class="location mb-0">Shakti Nagar, Delhi</p>
                 <div>***** </div>
                 
                
                 
             </div>
              <div class="col-lg-2 col-sm-3 d-grid">
                 <div class="align-self-end">
                    <button type="button" class="btn btn-success btn-sm btn-block" onclick="window.open('resturant_detail.php','_self')">Know More</button>
                    <button type="button" class="btn btn-warning btn-sm btn-block" onclick="window.open('login.php','_self')">Book Now</button>
                </div>
             </div>
             
        </div> 
              
              
              <div class="row p-2 my-2 rv6">
              <div class="col-sm-2">
                  <div class="p-2">
                    <img src="images/gallery/resturant2.jpg" class="mx-auto d-block img-fluid">
<!--                      <figcaption class="text-center">View More Images</figcaption>-->
                  </div>
                </div>
             <div class="col-sm-7 rv5 text-center text-sm-left">
                 <h4 class="name_resturant mb-0">The Big Yellow Door</h4>
                 <p class="location mb-0">GTB Nagar, Delhi</p>
                 <div>***** </div>
                 
             </div>
             <div class="col-lg-2 col-sm-3 d-grid">
                 <div class="align-self-end">
                    <button type="button" class="btn btn-success btn-sm btn-block" onclick="window.open('resturant_detail.php','_self')">Know More</button>
                    <button type="button" class="btn btn-warning btn-sm btn-block" onclick="window.open('login.php','_self')">Book Now</button>
                </div>
             </div>
             
        </div>
            
          </div>
       
        </div>