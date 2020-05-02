<?php include "php/config.php" ?>
<?php include "php/dbconnect.php" ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head><title>home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet" type="text/css" media="all">
     
    </head>
      <body>
       
       	<header>
       		 <img src="1.jpg" width="8%" height="80px" style="float:left; margin: 5px; padding: 5px;">
       	   <ul>
       	   	  <li><a href="index.php">HOME</a></li>
       	   	  <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
              <li><a href="">
       	   	  	<?php 
                if(!isset($_SESSION['email']))
                 {
                   echo 'welcome geust ';
                   echo "<a style='color:green;' href='login.php'>Login</a>";
                 }
                 else 
                 {
                   echo 'welcome '.$_SESSION['email'];
                   echo "<a style='color:red;' href='index.php' name='logout'> Logout</a>";
                  
                 }

               ?>
                 <?php
                    if(isset($_SESSION['email']))
                    {
                      session_destroy();
                    }
                 ?>
       	   	  </a></li>
       	   	  <li><a href="">mycart</a></li>
              <li><a><input type="search" name="search">
                   <input type="submit" name="submit" value="SEARCH">
                 
               </a>
               </li>
       	   	</ul> 
       </header>
        <section>
                 <p align="center">product in avilable:</p>
                 

         </section>

         <footer>
            <span style="margin-left:40%;">copy right 2020</span>
         </footer> 
       <script src="js/index.js" type="text/javascript"></script>
      </body>
</html>