<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
 <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Our Resturants</h1>       

        </div>
      </div>
    </section>


  <section class="site-section py-3" id="section-about">
      <div class="container">
          <div class="row">
          <div class="col-sm-3 ml-auto">
          <div class="form-inline">
          <label class="col-5">Sort By</label>
              <div class="col-7">
              <select class="form-control" name="users" onchange="showUser(this.value)">
                <option value="Default"> Choose filter:-</option>
                <option value="Popularity">Popularity</option>
                <option value="Location">Location</option>
                <option value="LowToHigh">Price Low to high</option>
                  </select>              
              </div>          
          </div>
          </div>
              </div>
                <div class="row">
                  <div class="col-md-12 site-animate">
                    <div id="Resturants"><center>We are currently working on adding restaurants.</center></div>
                  </div>
                </div>
              <br>
          </div>
          
        
      </div>
    </section>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("Resturants").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("Resturants").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","api/serve.php?Key=gallery565656",true); //+str
  xmlhttp.send();
}
showUser("Onload");
</script>

<?php include 'footer.php';?>
    

