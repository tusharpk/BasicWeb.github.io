<?php include "php/config.php"; ?>
<?php include "php/dbconnect.php"; ?>
<!DOCTYPE html>
<html>
 <head>
 	 <title>
 	 	 Register
 	 </title>
 	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet" type="text/css" media="all">
    
 </head>	 
  <body>
  	<header>
       		 <img src="1.jpg" width="8%" height="80px" style="float: left;margin: 5px;padding: 5px;">
       	   <ul>
       	   	  <li><a href="index.php">HOME</a></li>
       	   	  <li><a href="about.php">ABOUT</a></li>
       	   	  <li><a href="contact.php">CONTACT</a></li>
       	   </ul> 
       </header>
        <section>
                <div style="width:450px;margin:auto;border:1px solid red;">
        	    <form action="" onsubmit="return Valid()" name="myform" method="POST" style="text-align: center;margin:20px;">
                        <h3>REGISTRATION::</h3>
                        <br>
                       <label>First-Name :</label> <br>
                      <input type="text" name="first_name" class="req" placeholder="first_name" autofocus="on"><br>
                      <label>Last-Name :</label> <br>
                      <input type="text" name="last_name" class="req" placeholder="last-name" autofocus="on"><br>
                      <label>Email :</label> <br>
                      <input type="text" name="email" id="email1" class="req" placeholder="tusharkesare@gmail.com" autofocus="on"><br>
                      <label>password :</label> <br>
                      <input type="password" name="password" placeholder="password" class="req" autofocus="on"><br>
                      <label>Conform-password :</label> <br>
                      <input type="password" name="password1" placeholder="password1" class="req" autofocus="on"><br>
                      <br><br>
                      <input type="submit" name="register" value="REGISTER">
                </form>
                   <?php
                         $fname=$_POST['first_name'];
                         $lname=$_POST['last_name'];
                         $email=$_POST['email'];
                         $password=$_POST['password'];
                         $password1=$_POST['password1'];
                         
                      if(isset($_POST['register']))
                      {
 

                            if($password==$password1)
                            { $run="insert into reg(first_name,last_name,email,password,password1) 
                                values('$fname','$lname','$email','$password','$password1')";
                                                         
                                 mysqli_query($connect,$run);
                                 echo "<script>alert('registration succesfully!!!');</script>";
                                 echo "<script>window.open('login.php','_self')</script>";
                            }
                            else if($password != $password1)
                            {
                              echo "<script>alert('password not match try again....');</script>";
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