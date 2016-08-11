
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
   <script type="text/javascript" src="js/bootstrap.min.js"></script>

   <style type="text/css">
     
     body {
            background: tomato;
    }
    #backfirst {
      margin-left: 8% ; padding:5px 20px; background-color: #ffffff; color: #0275d8; height: auto;
    }   
   </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- main Part -->
     <div class="col-md-10" style="margin-left: 8% ; padding:5px 20px;background-color: #0275d8; color: #ffffff; height: auto;">
            <h3>Upload Image.</h3>
            <p>upload</p>

            <form action="/blog/models/upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form> 

    </div>

</body>