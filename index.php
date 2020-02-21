<?php
// Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
$password = $_GET["password"];
if ($password == 'Boolean') {
  $message = 'Hai Vinto!';
  $color = "green";
}
else {
  $message = 'Hai Perso!';
  $color = "red";
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <style media="screen">
     .green {
       color: green;
     }
     .red {
       color: red;
     }
   </style>
   <link rel="stylesheet" href="style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <h1 class="<?php echo $color; ?>"> <?php echo $message; ?>

   </h1>
 </body>
 </html>
