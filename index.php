<?php ?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   <style type="text/css">
     
     body {
            background: tomato;
    }
    #backfirst {
      margin-left: 8% ; padding:5px 20px; background-color: #ffffff; color: #0275d8; height: auto;
    }   
   </style>
   <script type="text/javascript">
      function comments(type){                       
         var comment = document.getElementById('comments');
          if(comment.style.display == "none")        
            document.getElementById('comments').style.display="block";
          else
            document.getElementById('comments').style.display="none";
       
      }
      function posts(type){                       
        var post = document.getElementById('posts');
        if(post.style.display == "none")
            document.getElementById('posts').style.display="block";
        else  
         document.getElementById('posts').style.display="none";

     
    
        /*  $.ajax({
              url : "/blog/models/allposting.php",
              type: 'POST',
              data : {
                  type: newtype,
                },
             success: function (results) {
                alert(results);

              }
          });*/
      }
   </script>
</head>

<body>
   <?php include 'header.php'; ?>
  
    <!-- main Part -->
   
    <div class="col-md-10" style="margin-left: 8% ; padding:5px 20px;background-color: #0275d8; color: #ffffff; height: auto;">
            <h3>My Things.</h3>
            <p>
            I am working something every day. when it like that work or some dislike. i want to do something that way i am using our body and mind then i give something of this world. I am not using all rule for live life because i am follow all rule then, i miss all funs.
            </p>
    </div>
    <div class="col-md-10" id="backfirst">
        <h3>Check topic</h3>
            <div class="col-md-8">       
                <button class="btn btn-defauilt" name="posts" onclick="posts(this);">Posts</button>
                <button class="btn btn-defauilt" name="comment" onclick="comments(this)">Comments</button>
            
              <hr/>
            </div>
    </div> 
    <div style="display:none;" id="posts">  
      <div class="col-md-10" id="backfirst">
        <h3>Posts</h3>
          <div class="col-md-8">
            
                <?php
                  $con=mysqli_connect("localhost","root","rolemodel","blog");
                  // Check connection
                  if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                  $sql="SELECT * FROM posts";
                  $result = $con->query($sql);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()){
                  ?>    
                    <h4>
                        <?php  echo $row["postTitle"];   ?> <small><?php  echo $row["postDate"];  ?></small>
                    </h4>
                    <p>
                       <?php  echo $row["postDesc"];  ?>

                    </p>
                    <hr/>
                    <?php
                    }
                    // Free result set
                    mysqli_free_result($result);
                  }

                  mysqli_close($con);
                  ?>            

          </div>   
          <div class="col-md-3"><img src="images/post.jpg" style="width: 100%"></div>
      </div>
    </div>
    <div style="display:none;" id="comments"> 
       <div class="col-md-10" id="backfirst">
        <h3>User Comment.</h3>
            <div class="col-md-8">          
                <?php
                  $conn=mysqli_connect("localhost","root","rolemodel","blog");
                  // Check connection
                  if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                  $sql1="SELECT * FROM contacts";
                  $results = $conn->query($sql1);
                  
                  if ($results->num_rows > 0) {
                    while ($row = $results->fetch_assoc()){
                  ?>   
                    <h4> <?php  echo $row["contactEmailId"];   ?>  <small><?php  echo $row["contactDate"];  ?></small>
                    </h4>  
                    <p>                
                       <?php  echo $row["contactDesc"];  ?>
                       
                    </p>
                    <hr/>
                    <?php
                    }
                    // Free result set
                    mysqli_free_result($results);
                  }

                  mysqli_close($conn);
                  ?>            
            </div>
            <div class="col-md-3">
                <img src="images/comment.jpg" style="width: 100%">
            </div>
      </div>
      </div>
</body>