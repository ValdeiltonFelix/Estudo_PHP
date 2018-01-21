<?php 
   
   require("../app/function/pages.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Curso de PHP</title>

       <link rel="stylesheet" type="text/css" href="../public/bootstrep/dist/css/bootstrap.css">
       <link rel="stylesheet" type="text/css" href="">
   </head>
   <body>
       <div class="container">
       	
       	<?php 

      try {

           require load(); 
        
           } catch (Exception $e) {
             echo $e->getMessage();
      }

     



        ?>
       </div>

   </body>
</html>
