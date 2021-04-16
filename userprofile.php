       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Profile</title>
       </head>

       <?php
           if (isset($_SESSION['userIGN'])) {

            echo '<p> Hello There!' . $_SESSION['userIGN'].'</p>';
            
         }
       ?>
       
       <p> click this to logout! 
       <button type="submit"> <a href="includes/userlogout.php"> LOGOUT </a> </button>
       
       </p>

       <body>
           
       </body>
       </html>