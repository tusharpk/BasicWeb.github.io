<?php include "php/config.php" ?>
<?php include "php/dbconnect.php" ?>
<?php @session_start(); ?>
<!DOCTYPE html>
<html>
 <head>
 	 <title>
 	 	 login
 	 </title>
 	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet" type="text/css" media="all">
    <!--<link href="css/tab.css" rel="stylesheet" type="text/css" media="all">-->
 </head>	 
  <body>
  	<header>
       		 <img src="1.jpg" width="8%" height="80px" style="float: left;margin: 5px;padding: 5px;">
       	   <ul>
       	   	  <li><a href="index.php">HOME</a></li>
       	   	  <li><a href="about.php">ABOUT</a></li>
       	   	  <li><a href="contact.php">CONTACT</a></li>
       	   	  <li>
       	   	  	 
       	   	  </li>
       	   	  
       	   	</ul> 
       </header>
        <section>
        	   <div style="width:450px;margin:auto;border:1px solid red;">
        	    <form action="" method="POST" style="text-align: center;margin:20px;">
                      <h3>LOGIN::</h3>
                      <br><br>
                      <label>Email :</label> <br> 
                      <input type="text" name="email" placeholder="email"><br>
                      <label>password :</label> <br>
                      <input type="password" name="password" placeholder="password"><br>
                      
                      <br><br>
                      <input type="submit" name="login" value="LOGIN">
                      <br><a href="">forgot password</a>

                      <br>
                      <br>
                       <a href="register.php">Register a new account</a>
                </form>

                 <?php 
                      if(isset($_POST['login']))
                      {
                       $email=$_POST['email'];
                       $password=$_POST['password'];
                       
                       $result="select * from reg where email='$email' AND password='$password'";
                       $run=mysqli_query($connect,$result);
                          if(mysqli_num_rows($run)>0)
                            {
                              $_SESSION['email']=$email;
                              echo "<script> window.open('index.php','_self') </script>";

                            } 
                             else
                             {
                              echo "<script>alert('wrong password')</script>";

                             }
                      }
                 ?>

              </div> 
              </section>

         <footer>
           <p align="center">&copy right 2020</p>
         </footer>
     
       <script src="js/index.js" type="text/javascript"></script>
  </body>
</html>