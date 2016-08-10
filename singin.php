<?php ?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style/style.css">
</head>

<body>
    
        <form method="post" action="models/login.php">
          <header>Login</header>
          <label>Username <span>*</span></label>
          <input type="text" name="uname" id="uname" />
          <div class="help">At least 6 character</div>
          <label>Password <span>*</span></label>
          <input type="password" name="upass" id="upass" />
          <div class="help">Use upper and lowercase lettes as well</div>
          <button type="submit">Login</button>
        </form>

</body>