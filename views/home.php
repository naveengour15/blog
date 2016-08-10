<?php
// Start the session
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
} else {
    header("Location: /blog/singin.php");
}
require 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
         <div class="navbar-header">
              <a class="navbar-brand" href="home.php">Home</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="/blog/models/logout.php">logout</a></li>
                  <li ><a href="/blog/views/home.php"><?php echo $_SESSION['name'] . "!"; ?></a></li>
              </ul>
          </div>
      </div>
    </nav>
    <!-- main Part -->
     <div class="col-md-10" style="margin-left: 8% ; padding: 20px;">
        <div style="background-color: #ffffff; color: #0275d8; height: 250px; padding: 10px;">
            <div class="container">
              <div class="row">
             <!--    <div class="col-md-12">
               <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>   
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
               </div> -->
                <form role="form" action="/blog/models/posting.php" method="post">
                    <div class="col-lg-6">
                      
                       <div class="form-group">
                        <label for="InputName">Type</label>
                        <div class="input-group">
                       
                        <select class="form-control" name="type">
                          <option>Select post type</option>
                          <option value="c">C</option>
                          <option value="JS">JavaScript</option>
                          <option value="PHP">Php</option>
                                    
                        </select>  
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                      </div>

                      <div class="form-group">
                        <label for="InputName">Title</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Your title " required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                      </div>
                     
                      <div class="form-group">
                        <label for="InputMessage">Message</label>
                        <div class="input-group">
                           <textarea name="desc" id="desc" class="form-control" rows="5" required>
                           </textarea>
                             <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                      </div>
                      
                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right"> 
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>

</body>