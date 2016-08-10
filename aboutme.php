<?php ?>
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
            <h3>My Profile.</h3>
            <p>I am web developer</p>
    </div>
    <div class="col-md-10" id="backfirst">
            <h3>My Skills.</h3>
            <div class="col-md-8">
              <p>
                Knowledge: HTML,CSS, Ajax, JavaScript, jQuery PHP. <br><br>
                FramWork Knowledge: AngularJs, laravel Framework. and git.<br><br>
                Awareness: C, C++ and Java.       <br><br>
                Also have basic knowledge of the concepts of RDBMS, MVC and Data Structures.        
             </p>
            </div>
            <div class="col-md-3">
                <img src="images/web.jpg" style="width: 80%">
            </div>
    </div>

    <div class="col-md-10" id="backfirst">
        <h3>Working On.</h3>
            <div class="col-md-8">          
                               
              <h4><a href="http://www.onlysupermarket.com/">OnlySuperMarket</a> <small> Super market aggregator.</small></h4>
              OnlySuperMarket is a supermarket website that acts as an aggregator for groceries from different grocery websites like Zip.in. <br>
              My role was to convert the html templates to PHP code, fixing html and css bugs and writing  ajax code for interacting with the backend. Tools used here were PHP, Bootstrap and jQuery.<br><br>
              <h4><a href="http://travellerbesafe.com/">TravellerbeSafe</a> <small> travel related ecommerce store.</small></h4>
              TravellerbeSafe  is an ecommerce store run by Vihari Travels that sells travel related products. 
              We did worked on all <a href="http://travellerbesafe.com/">Vihari</a> (travel agency) sites like <a href="http://travellerbesafe.com/">TimGlobal</a>  and <a href="http://traveldestinationvideos.com">TravelDestinationVideos</a> and we also created a SPA site <a href="https://webauro.com/shadresh/">Shadreesh</a>.<br>
              My role here was to convert the designs to html and css and PHP, and writing javascript code for validation and ajax 
          
              
            </div>
            <div class="col-md-3">
                <img src="images/corporate.jpg" style="width: 100%">
            </div>
      </div>

       <br>
    <div class="col-md-10" id="backfirst">
        <h3>Education.</h3>
            <div class="col-md-8">          
                               
              <h4><a href="http://www.patelcollege.com/">PATEL COLLEGE OF SCIENCE AND TECHNOLOGY, Indore(M.P.)  </a> <small> B.E.(CSE)  from 2011 to 2015.</small></h4>
              
              <h4>GOVT. BOYS HIGHER SECONDARY SCHOOL, Seoni Malwa(M.P.)<small> Middle, Higher and Secondary education from 2004 to 2011</small></h4>
              
            </div>
            <div class="col-md-3">
                <img src="images/education.jpg" style="width: 100%">
            </div>
      </div>

      <br>
       <div class="col-md-10" id="backfirst">
            <h3>Contact.</h3>
            <div class="col-md-8">
              <h5>Email Id: <small>naveengour15@gmail.com</small></h5>
              <h5>Phone Number: <small>+91 7097341395 </small></h5>
              <h5>Address: <small>Naveen Gour, House No. 1-2-382/d/2, Ground Floor, Street No. 3, lane 2B, Domalguda, Hyderabad, Telangana 500029 INDIA</small></h5>
            </div>
            <div class="col-md-3">
                <img src="images/home.jpg" style="width: 80%">
            </div>
    </div>
</body>