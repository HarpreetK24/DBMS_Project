<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
<link rel="stylesheet" href="signup.css">
  
</head>

<body
  style="background-image: linear-gradient(#fffcf7,rgb(12, 14, 18));font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
<script>
  function validateform(){
      var x = document.forms["myform"]["password"].value;
      var y = document.forms["myform"]["password2"].value;
      if(x != y)
      {
        alert("Password's Don't Match")
        return false;
      }
      
    }
</script>
<center><a href="homepage.php"><img
  src="images/i-Learn transparent bg.png" width=150px
  height=150px></a></center>
  <div class="signup-form-container">

    <form action="dbregister.php" method="post" name="myform" onsubmit="return validateform()">

      <h1 style="color:white;">Sign Up</h1>



      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="email"><b>Email-id</b></label>
      <input type="email" placeholder="Enter Email-id" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="password2"><b>Confirm Password</b></label>
      <input type="password" placeholder="Re-enter Password" name="password2" required>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign
          Up</button>
        <p style="color:rgb(255, 255, 255);">By signing up, you agree to the <u>terms of Service and Priacy Policy.</u>
        </p>
        <center>
          <p style="color: white;">Already have an account?</p>
          <a id="log" href="login.php"style=" cursor: pointer;font-weight:bolder;position: relative;bottom: 35px;left: 128px;text-decoration: none;">Click here!</a>

        </center>
      </div>

    </form>
  </div>
</body>

</html>