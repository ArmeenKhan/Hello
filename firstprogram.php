<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         USERNAME: <input type = "text" name = "uname" />
         PASSWORD: <input type = "text" name = "pw" />
         <input type = "submit" />
      </form>
   <?php
   if( $_POST["uname"] || $_POST["pw"] ) {
      if (strlen($_POST['pw'])<8) {
         die ("password should be atleast 8 chars long");
      }
      echo "Welcome ". $_POST['uname']. "<br />";
      echo "Your password ". $_POST['pw']. " is of correct length.";
      
      exit();
   }
   ?>
   </body>
</html>