<?php 
try{
	include 'connection.php';
	$method_name=$_SERVER["REQUEST_METHOD"];
	if($_SERVER["REQUEST_METHOD"])
	{
		if($_REQUEST["Key"]=="565656"){
			switch ($method_name) 
			{
			  case 'GET':
			  
	  		  	if($_GET["q"]){
	  		  		$qry="SELECT ".mysqli_real_escape_string($conn, $_GET["q"])." from client_userinfo";
	  				$result=mysqli_query($conn, $qry);
	  				while ($row=mysqli_fetch_row($result))
	  				{
	  					$temp_cat[]=array($_GET["q"] => $row[0]);
	  				}
	  
	  				$data=array("status"=>"1","message"=>"success","result"=>$temp_cat);
	  				break;
	  		  	}
	  		  // 	else if($_GET["Select"]){
	  		  // 		$qry="SELECT ".$_GET["Select"]." from client_userinfo";
	  		  // 		$columns = explode(",", $_GET["Select"]);
	  				// $result=mysqli_query($conn, $qry);
	  				// while ($row=mysqli_fetch_row($result))
	  				// {
	  				// 	$temp_cat[]=array();
	  				// 	foreach ($row as $key => $value) {
	  				// 		$temp_cat[$columns[$key]][] =  $row[$key];
	  				// 	}
	  				// }
	  
	  				// $data=array("status"=>"1","message"=>"success","result"=>$temp_cat);
	  				// break;
	  		  // 	}
	  		  	else if($_GET["Select"]&&$_GET["Filter"]&&$_GET["Value"]){
	  		  		$qry="SELECT ".mysqli_real_escape_string($conn, $_GET["Select"])." from client_userinfo WHERE ".mysqli_real_escape_string($conn, $_GET["Filter"])."=".mysqli_real_escape_string($conn, $_GET["Value"]);
	  		  		$columns = explode(",", $_GET["Select"]);
	  				$result=mysqli_query($conn, $qry);
	  				while ($row=mysqli_fetch_row($result))
	  				{
	  					$temp_cat[]=array();
	  					foreach ($row as $key => $value) {
	  						$temp_cat[$columns[$key]][] =  $row[$key];
	  					}
	  				}
	  
	  				$data=array("status"=>"1","message"=>"success","result"=>$temp_cat);
	  				break;
	  		  	}
	  		  	else{
	  				$qry="SELECT * from client_userinfo";
	  				$result=mysqli_query($conn, $qry);
	  				while ($row=mysqli_fetch_row($result))
	  				{
	  					$temp_cat[]=array("ID" => $row[0],"Restaurant_ID" => $row[1],"Restaurant_Name" => $row[2],"Name" => $row[3],"Email" => $row[4],"Phone" => $row[5],"Password" => $row[6],"Timestamp" => $row[7],"Data" => $row[8]);
	  				}
	  
	  				$data=array("status"=>"1","message"=>"success","result"=>$temp_cat);
	  				break;
	  			}

			  case 'PUT':
				if($_REQUEST["Data"]&&$_REQUEST["ID"]){
			  		$qry="UPDATE client_userinfo SET Data='".mysqli_real_escape_string($conn, $_REQUEST["Data"])."', Timestamp=DEFAULT where Restaurant_ID='".mysqli_real_escape_string($conn, $_REQUEST["ID"])."' ";
					if(mysqli_query($conn, $qry))
					{
						$data=array("status"=>"1","message"=>"success","result"=>"Data Updated successfully");
					}
					else{
						$data=array("status"=>"0","message"=>"Failed","result"=>"Something went wrong please report this to developer!!!");
					}
					break;
			  	}
			  	else if($_REQUEST["Phone"]&&$_REQUEST["ID"]){
			  		$qry="UPDATE client_userinfo SET Phone='".mysqli_real_escape_string($conn, $_REQUEST["Phone"])."', Timestamp=DEFAULT where Restaurant_ID='".mysqli_real_escape_string($conn, $_REQUEST["ID"])."' ";
					if(mysqli_query($conn, $qry))
					{
						$data=array("status"=>"1","message"=>"success","result"=>"Phone Number Updated successfully");
					}
					else{
						$data=array("status"=>"0","message"=>"Failed","result"=>"Something went wrong please report this to developer!!!");
					}
					break;
			  	}
			  	else if($_REQUEST["Email"]&&$_REQUEST["ID"]){
			  		$qry="UPDATE client_userinfo SET Email='".mysqli_real_escape_string($conn, $_REQUEST["Email"])."', Timestamp=DEFAULT where Restaurant_ID='".mysqli_real_escape_string($conn, $_REQUEST["ID"])."' ";
					if(mysqli_query($conn, $qry))
					{
						$data=array("status"=>"1","message"=>"success","result"=>"Email Address Updated successfully");
					}
					else{
						$data=array("status"=>"0","message"=>"success","result"=>"Something went wrong please report this to developer!!!");
					}
					break;
			  	}
			  	else{
						$data=array("status"=>"0","message"=>"Failed","result"=>"Invalid parameters passed!!!");
					}
					break;

			 //  case 'DELETE':
				// $id=$_REQUEST['product_id'];
				// $qry="delete from product where product_id='".$id."'";
				// if(mysqli_query($conn, $qry))
				// {
				// 	$data=array("status"=>"1","message"=>"success","result"=>"Product Update successfully");
				// }
				// else{
				// 	$data=array("status"=>"1","message"=>"success","result"=>"Something is wrong!!!");
				// }
				// break;
			}
			echo json_encode($data);
		}
		else if($_REQUEST["Key"]=="gallery565656"){
			$qry="SELECT `Name`, `Restaurant Name`, `Data` from client_userinfo";
			$result=mysqli_query($conn, $qry);
			$temp_list=array();
			$temp_cat[]=array();
			$counter=0;
			while ($row=mysqli_fetch_row($result))
			{	
				$counter++;
				foreach ($row as $key => $value) {
					if($key==0){
						$temp_cat["Name"] =  $row[0];
					}
					else if($key==1){
						$temp_cat["Restaurant Name"] =  $row[1];
					}
					else if($key==2){
						$temp_cat["City"] =  json_decode($row[2], true)["City"];
						$temp_cat["State"] =  json_decode($row[2], true)["State"];
						$temp_cat["Live"] =  json_decode($row[2], true)["Live"];
					}
				}
				$temp_list[] = $temp_cat;
				$temp_cat=[];		
			}
			$data=array("status"=>"1","message"=>"success","result"=>$temp_list);
			if($_REQUEST["Log"]=="True"){
				echo json_encode($data);
			}
			getRestaurantListWeb($temp_list);
		}
		else{
		  		$data=array("status"=>"0","message"=>"Failed","result"=>"You are not authorized.");
	  			echo json_encode($data);
	  	}
	}
	else{
		$data=array("status"=>"0","message"=>"INVALID REQUEST METHOD !! ");
		echo json_encode($data);
	}
	
}
catch(Exception $e) {
	 echo 'Caught exception: ',  $e->getMessage(), "\n";
}

function getRestaurantListWeb($data){
	for($i=0;$i<count($data);$i++){
		if ($data[$i]["Live"]==true){
				echo '
				<div class="row p-2 my-2 rv6">
		              <div class="col-sm-2">
		                  <div class="p-2">
		                    <img src="restaurants/'.$data[$i]["Restaurant Name"].'==>'.$data[$i]["Name"].'/main.jpg" class="mx-auto d-block img-fluid">
		<!--                      <figcaption class="text-center">View More Images</figcaption>-->
		                  </div>
		                </div>
		             <div class="col-sm-7 rv5 text-center text-sm-left">
		                 <h4 class="name_resturant mb-0">'.$data[$i]["Restaurant Name"].'</h4>
		                 <p class="location mb-0">'.$data[$i]["City"].', '.$data[$i]["State"].'</p>
		                 <div>***** </div>
		                 
		             </div>
		             <div class="col-lg-2 col-sm-3 d-grid">
		                 <div class="align-self-end">
		                    <button type="button" class="btn btn-success btn-sm btn-block" onclick="window.open("resturant_detail.php","_self")">Know More</button>
		                    <button type="button" class="btn btn-warning btn-sm btn-block" onclick="window.open("login.php","_self")">Book Now</button>
		                </div>
		             </div>             
		        </div>
			<br>';}
	}
}
?>