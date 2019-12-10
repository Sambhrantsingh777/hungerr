<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class='jumbotron'>
        <div class='container'>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="text-center text-primary">Fillout Form</h3>
            </div>
          </div>
      
          <form onsubmit="return false">
            <!-- username -->
            <div class='row w3-margin-bottom'>
              <div class='col-md-6 col-xs-6'>
                <p><b>Username</b></p>
              </div>
              <div class='col-md-6 col-xs-6'>
                <input id="username" name='username' class='form-control' required/>
              </div>
            </div>
            <!-- end username row -->
      
            <!-- password -->
            <div class='row w3-margin-bottom'>
              <div class='col-md-6 col-xs-6'>
                <p><b>Password</b></p>
              </div>
              <div class='col-md-6 col-xs-6'>
                <input type='password' name='password' id="password" class='form-control' required/>
              </div>
            </div>
            <!-- end password row -->
      
            <!-- country -->
            <div class='row w3-margin-bottom'>
              <div class='col-md-6 col-xs-6'>
                <p><b>Country</b></p>
              </div>
              <div class='col-md-6 col-xs-6'>
                <select id="country" class='form-control' required><option value="">-- Country --</option></select>
              </div>
            </div>
            <!-- end country row -->
      
            <!-- region -->
            <div class='row w3-margin-bottom'>
              <div class='col-md-6 col-xs-6'>
                <p><b>Region</b></p>
              </div>
              <div class='col-md-6 col-xs-6'>
                <select id="region" class='form-control' required><option value="">-- Region --</option></select>
              </div>
            </div>
            <!-- end region row -->
      
            <!-- city -->
            <div class='row w3-margin-bottom'>
              <div class='col-md-6 col-xs-6'>
                <p><b>City</b></p>
              </div>
              <div class='col-md-6 col-xs-6'>
                <select id="city" class='form-control' required><option value="">-- City --</option></select>
              </div>
            </div>
            <!-- end city row -->
            <br>
            <input type='submit' value='Register' onclick='processForm();' class='btn btn-primary center-block' />
            </br>
            <div id='location'></div>
          </form>
          <!-- end form -->
        </div>
        <!-- end container -->
      </div>
      <!-- end jumbotron -->
      
      <!-- footer -->
      <div class="container text-center text-primary">
        <h4>Author: Sam-Shudukhi. (c) <a class='text-danger' href='https://github.com/Sam-Shudukhi/country-region-city-api' target='_blank'>Github</a></h4>
      </div>
      
      


<script>

$(document).ready(function() {
  //-------------------------------SELECT CASCADING-------------------------//
  var selectedCountry = selectedRegion = selectedCity = countryCode = "";

  // This is a demo API key for testing purposes. You should rather request your API key (free) from http://battuta.medunes.net/
  var BATTUTA_KEY = "00000000000000000000000000000000";
  // Populate country select box from battuta API
  url =
    "http://battuta.medunes.net/api/country/all/?key=" +
    BATTUTA_KEY +
    "&callback=?";

  // EXTRACT JSON DATA.
  $.getJSON(url, function(data) {
    console.log(data);
    $.each(data, function(index, value) {
      // APPEND OR INSERT DATA TO SELECT ELEMENT. Set the country code in the id section rather than in the value.
      $("#country").append(
        '<option id="'+ value.code +'" value="' + value.name + '">' + value.name + "</option>"
      );
    });
  });
  // Country selected --> update region list .
  $("#country").change(function() {
    selectedCountry = this.options[this.selectedIndex].text;
    countryCode = $(this).children(":selected").attr("id");
    url =
      "http://battuta.medunes.net/api/region/" +
      countryCode +
      "/all/?key=" +
      BATTUTA_KEY +
      "&callback=?";
    $.getJSON(url, function(data) {
      $("#region option").remove();
      $.each(data, function(index, value) {
        // APPEND OR INSERT DATA TO SELECT ELEMENT.
        $("#region").append(
          '<option value="' + value.region + '">' + value.region + "</option>"
        );
      });
    });
  });
  // Region selected --> updated city list
  $("#region").on("change", function() {
    selectedRegion = this.options[this.selectedIndex].text;
    // Populate country select box from battuta API
    region = $("#region").val();
    url =
      "http://battuta.medunes.net/api/city/" +
      countryCode +
      "/search/?region=" +
      region +
      "&key=" +
      BATTUTA_KEY +
      "&callback=?";
    $.getJSON(url, function(data) {
      console.log(data);
      $("#city option").remove();
      $.each(data, function(index, value) {
        // APPEND OR INSERT DATA TO SELECT ELEMENT.
        $("#city").append(
          '<option value="' + value.city + '">' + value.city + "</option>"
        );
      });
    });
  });
  // city selected --> update location string
  $("#city").on("change", function() {
    selectedCity = this.options[this.selectedIndex].text;
    $("#location").html(
      "Locatation: Country: " +
        selectedCountry +
        ", Region: " +
        selectedRegion +
        ", City: " +
        selectedCity
    );
  });
});

// process form
function processForm() {
    var username = password = country = region = city = '';
    username = $('#username').val();
    password = $('#password').val();
    country = $('#country').val();
    region = $('#region').val();
    city = $('#city').val();
    if (username != '' && password != '' && country != '' && region != '' && city != '') {
        $("#location").html(
      "Username: " + username + 
      " /Password: " + password +
      " /Locatation: Country: " +
        country +
        ", Region: " +
        region +
        ", City: " +
        city
    );
    } else {
        $("#location").html('Complete Form 1st');
        return false;
    }
}

</script>