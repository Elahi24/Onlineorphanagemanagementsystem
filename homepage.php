<!DOCTYPE html>

  <head>
    
    <title>Online Orphanage Management System</title>
    
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
    <div class="topnav">
        <a class="active" href="about.html">About</a>
        <a href="orphanage.php">Orphanage</a>
        <a href="adoptation.php">Adoptation</a>
        <a href="Donation.php">Donate</a>
        <a href="homepage.php">Home</a>
    </div>
    <section></section>
    <div>

        <h1 style="color:lawngreen;text-align:center;">Online Orphanage Management System</h1>
        </div>
     <div class="form-group"></div>
    <form action="connect.php" method="post">
        <div class="imgcontainer">
          
        </div>
        <div>

        
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" id ="uname" name="uname" required>
      
          <label for="adress"><b>Adress</b></label>
          <input type="text" placeholder="Enter Adress"id ="adress"  name="adress" required>

          <label for="bg"><b>BG</b></label>
          <input type="text" placeholder="Enter Blood Group"id ="bg"  name="bg" required>

          <label for="age"><b>AGE</b></label>
          <input type="text" placeholder="Enter Your Age" id ="age" name="age" required>
      
          <button type="submit">Submit</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>

  </body>
</html>