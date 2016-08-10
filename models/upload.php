  <?php 
		if(isset($_POST["submit"])){

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
	?>
