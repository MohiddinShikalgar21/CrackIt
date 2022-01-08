<?php
  include "connection.php";
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Get Started</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style2.css">
        <style>
            .formBx .form form input[type="submit"]
            {
                background: #03a9f4;
                border: none;
                max-width: 100px;
                cursor: pointer;
                color: white;
            }
            .formBx .form form input[type="submit2"]
            {
                background: #03a9f4;
                border: none;
                max-width: 100px;
                cursor: pointer;
                color: white;
            }
            .formBx.active .signupForm input[type="submit2"]
            {
                background: #f43648;
            }
            .formBx.active .signupForm input[type="submit"]
            {
                background: #f43648;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="blueBg">
                <div class="box signin">
                    <h2>Already Have an Account ?</h2>
                    <button class="signinBtn">Sign in</button>
                </div>
                <div class="box signup">
                    <h2>Don't Have an Account ?</h2>
                    <button class="signupBtn">Sign up</button>
                </div>  
            </div>

            <div class="formBx">
              <div class="form signinForm">
                  <form name="login" action="" method="post">
                      <h3>Sign In</h3>
                      <input type="text" name="username" placeholder="Username" required= "">
                      <input type="password" name="password" placeholder="Password" required= "">
                      <input class="btn btn-default" type="submit" name="submit" value="Login">
                      <a href="#" class="forgot">Forgot Password ?</a>
                      
                <?php
          
                if(isset($_POST['submit']))
                {
                  $count1=0;  
                  $res1=mysqli_query($db,"SELECT * FROM user WHERE username='$_POST[username]' && password='$_POST[password]';");
              
                  $row1= mysqli_fetch_assoc($res1);
              
                  $count1=mysqli_num_rows($res1);
              
                  if($count1==0)
                  {
                    ?>    
                   <script type="text/javascript">
                      alert("Invalid Username or Password. Please check your username and password.");
                   </script>
                   <?php
                  }
                  else
                  {
                    $_SESSION['login_user2'] = $_POST['username'];                
                  ?>
                    <script type="text/javascript">
                        window.location="index.php"
                    </script>
                  <?php
                  } 
                }
                 ?>
                  </form>
                </div>




                  <div class="form signupForm">
                <form name="login" action="" method="post">
                    <h3>Sign Up</h3>
                    <input type="text" name="username" placeholder="Username" required= "">
                    <input type="text" name="email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Password" required= "">
                    <input type="int" name="contact" placeholder="Contact Number">
                    <input class="btn btn-default" type="submit" name="submit2" value="Sign Up">
                </form>
                </div>
            </div>
        </div>

        <?php
        
        if(isset($_POST['submit2']))
        {
          $count=0;
          $sql="SELECT username from `user`";
          $res=mysqli_query($db,$sql);

          while($row=mysqli_fetch_assoc($res))
          {
            if($row['username'] == $_POST['username'])
            {
              $count=$count+1;
            }
          }
          if($count==0)
          {
            mysqli_query($db,"INSERT INTO `user`(`username`, `email`, `password`, `contact`) VALUES('$_POST[username]','$_POST[email]','$_POST[password]','$_POST[contact]');");
             ?> 
            <script type="text/javascript">
            alert("Registration Successful!");
            </script>
            <?php
          }
          else
          {
            ?>
            <script type="text/javascript">
            alert("This Username Already Exists! Try something else.");
            </script>
            <?php
          }
        }

            ?>


        <script>
            const signinBtn = document.querySelector('.signinBtn');
            const signupBtn = document.querySelector('.signupBtn');
            const formBx = document.querySelector('.formBx');
            const body = document.querySelector('body');


            signupBtn.onclick = function()
            {
                formBx.classList.add('active')
                body.classList.add('active')
            }
            signinBtn.onclick = function()
            {
                formBx.classList.remove('active')
                body.classList.remove('active')
            }
        </script>
    </body>
</html>