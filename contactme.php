<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
   <script type="text/javascript" src="js/blog.js"></script>
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
            <h3>Contact.</h3>
            <p>You have query then you can contact me </p>
     </div>
     <div class="col-md-10" id="backfirst">
        <div style="background-color: #ffffff; color: #0275d8; padding: 10px;">
     
      
                <form role="form" method="post" action="/blog/models/connecting.php">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="InputName">Your Eamil</label>
                        <div class="input-group">
                        <input type="email" class="form-control" name="emailId" id="emailId" placeholder="Your Email Address " required>
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
          <div  style=" margin-left:50px;">
             <h3>Contact.</h3>
              <h5>Email Id: <small>naveengour15@gmail.com</small></h5>
              <h5>Phone Number: <small>+91 7097341395 </small></h5>
              <h5>Address: <small>Naveen Gour, House No. 1-2-382/d/2, Ground Floor, Street No. 3, lane 2B, Domalguda, Hyderabad, Telangana 500029 INDIA</small></h5>
            </div>
          </div>
        </div>