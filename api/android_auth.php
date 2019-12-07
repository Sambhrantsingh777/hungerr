<?php 
try{
	include 'connection.php';
	if($_SERVER["REQUEST_METHOD"])
	{
		if($_SERVER["REQUEST_METHOD"]=="GET"){
			echo json_encode(array("status"=>"0","message"=>"Failed","reason"=>"Web browser requests not acceptable for this API."));
		}
		// ################ CUSTOMER LOGIN #####################
		if($_REQUEST["Key"]=="android565656"){
			if(isset($_POST["username"])&&isset($_POST["password"])){
				$username = trim($_POST["username"]);
				$password = trim($_POST["password"]);
				$qry="SELECT `Name` from `cx_userinfo` WHERE (`Email`='$username' OR `Phone`='$username') AND `Password`='$password'";
				$result=mysqli_query($conn, $qry);
				if(mysql_num_rows($result)>0){
					while ($row=mysqli_fetch_row($result))
	  				{
	  					$name = $row['Name'];
	  				}
					$data=array("status"=>"1","message"=>"Success","user"=>$name);
				}
				else
					$data=array("status"=>"0","message"=>"Failed","reason"=>"Username/Password does not match.");
			}
			else if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["phone"])&&isset($_POST["pwd"])){
				$name = check_input($_POST['name']);
				$email = check_input($_POST['email']);
				$phone = check_input($_POST['phone']);
				$hashed_password = password_hash(trim($_POST['pwd']), PASSWORD_BCRYPT);
		        $sqlCommand = "INSERT INTO `cx_userinfo` VALUES(DEFAULT,'".mysqli_real_escape_string($conn, $name)."','".mysqli_real_escape_string($conn, $email)."','".mysqli_real_escape_string($conn, $phone)."','".mysqli_real_escape_string($conn, $hashed_password)."',DEFAULT,DEFAULT)";
		        // echo $sqlCommand;
		        $query=mysqli_query($conn,$sqlCommand);
		        $data=array("status"=>"1","message"=>"Success","details"=>"Sucessfully registered new user:-".$name);
			}
			else{
				$data=array("status"=>"0","message"=>"Failed","reason"=>"Invalid Params passed.");
			}
			echo json_encode($data);
		}
		// ################ CLIENT LOGIN #####################
		else if($_REQUEST["Key"]=="android565656:client"){
			if(isset($_POST["username"])&&isset($_POST["password"])){
				$username = trim($_POST["username"]);
				$password = trim($_POST["password"]);
				$qry="SELECT `Name` from `cx_userinfo` WHERE (`Email`='$username' OR `Phone`='$username') AND `Password`='$password'";
				$result=mysqli_query($conn, $qry);
				if(mysql_num_rows($result)>0){
					while ($row=mysqli_fetch_row($result))
	  				{
	  					$name = $row['Name'];
	  				}
					$data=array("status"=>"1","message"=>"Success","user"=>$name);
				}
				else
					$data=array("status"=>"0","message"=>"Failed","reason"=>"Username/Password does not match.");

			}
			else if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["phone"])&&isset($_POST["pwd"])&&isset($_POST["restaurant_name"])){
				$name = check_input($_POST['name']);
				$email = check_input($_POST['email']);
				$phone = check_input($_POST['phone']);
				$$restaurantName = check_input($_POST['restaurant_name']);
				$client_password = trim($_POST['pwd']);

				$sqlCommand = "SELECT * FROM client_userinfo WHERE Email='".mysqli_real_escape_string($con, $client_email)."'";
				$query=mysqli_query($con,$sqlCommand);
				$result = mysqli_fetch_assoc($query);
				$sqlCommand2 = "SELECT * FROM client_userinfo WHERE Phone='".mysqli_real_escape_string($con, $client_phone)."'";
				$query2=mysqli_query($con,$sqlCommand2);
				$result2 = mysqli_fetch_assoc($query2);
				
				if (!is_null($result))      
					$data=array("status"=>"0","message"=>"Failed","reason"=>"Email already registered.");
				if (!is_null($result2)){      
					$data=array("status"=>"0","message"=>"Failed","reason"=>"Phone number already registered.");

			    else if (is_null($result) && is_null($result2)){
					###### GENERATE RESTAURANT ID########
				    $sqlCommand3 = "SELECT * FROM client_userinfo ORDER BY `Restaurant_ID` DESC LIMIT 1";
				    $query3=mysqli_query($con,$sqlCommand3);
				    $result3 = mysqli_fetch_assoc($query3);
				    // echo $result3['Email'];
				    // echo $result3['Restaurant_ID'];
				    if ($result3){
				      $RID = $result3['Restaurant_ID']+1;
				    }
				    else{
				      $RID = 7662000;
				    }
				    #####################################
			        $hashed_password = password_hash($client_password, PASSWORD_BCRYPT);
				    $adrs = str_replace("\r", " ",  $Address);
			        $jsonArray = array(
			            "Address" => mysqli_real_escape_string($conn, str_replace("\n", " ",  $adrs)),
			            "State" => mysqli_real_escape_string($conn, $stateName),
			            "City" => mysqli_real_escape_string($conn, $cityName),
			            "Pin Code" => mysqli_real_escape_string($conn, $_POST['PinCode']),
			            "Designation" => mysqli_real_escape_string($conn, $_POST['Designation']),
			            "data" => true,
			        );
			        $json = json_creator($jsonArray);
			        // echo $json;
			        $sqlCommand = "INSERT INTO client_userinfo VALUES(DEFAULT,'".$RID."','".mysqli_real_escape_string($conn, $restaurantName)."','".mysqli_real_escape_string($conn, $name)."','".mysqli_real_escape_string($conn, $email)."','".mysqli_real_escape_string($conn, $phone)."','".mysqli_real_escape_string($conn, $hashed_password)."',DEFAULT,".$json.")";// echo $sqlCommand;
			        $query=mysqli_query($conn,$sqlCommand);
			        $data=array("status"=>"1","message"=>"Success","details"=>"Sucessfully registered new restaurant owner:-".$name);
		    	}
			}
			else{
				$data=array("status"=>"0","message"=>"Failed","reason"=>"Invalid Params passed.");
			}
			echo json_encode($data);
		}
		else{
		  		$data=array("status"=>"0","message"=>"Failed","reason"=>"Un-Authorized authentication attempt.");
	  			echo json_encode($data);
	  	}
	}
	else{
		$data=array("status"=>"0","message"=>"INVALID REQUEST !! ");
		echo json_encode($data);
	}
	
}
catch(Exception $e) {
	 echo 'Caught exception: ',  $e->getMessage(), "\n";
}
function check_input($data)
    {
    trim($data);
    stripcslashes($data);
    htmlspecialchars($data);
    return $data;
    }
?>
