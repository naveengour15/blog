<?php

require_once __DIR__.'/../vendor/autoload.php';

Cloudinary::config(array( 
  "cloud_name" => "dkscxlm7t", 
  "api_key" => "314252151815811", 
  "api_secret" => "Rd36lMKpMqbXL6lE4lBPtY0XNJI" 
));
$img = Cloudinary\Uploader::upload($_FILES["fileToUpload"]["tmp_name"]);
 if($img){
 	echo "file is an image Uploaded ";	
 }
 else
 	echo "file not upload!";
?>


   <?php 
/*		if(isset($_POST["submit"])){

			$uploads_dir = 'c:\xampp\htdocs\blog\images\upload';
	       	$tmp_name = $_FILES["fileToUpload"]["tmp_name"];
	        $name = basename($_FILES["fileToUpload"]["name"]);
	        move_uploaded_file($tmp_name, "$uploads_dir/$name");
			if($tmp_name !== false){
				echo "file is an image =  ".$name;			
				$uploadOk = 1;
			}
			else {
				echo "file is not image ";
				$uploadOk = 0;
			}
		}
*/	?>
