<?php
//Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <style media="screen">
     .green{
       background-color: green;
     }
     .grey{
       background-color: grey;
     }
   </style>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <div class="green">
     <ul>
         <?php
         $pmcreato = $db['pm'];
         for ($i=0; $i <count($pmcreato) ; $i++) {
           echo "<li>" . $pmcreato[$i]['name'] . '-' . $db['pm'][$i]['lastname']. "</li>";
         } ?>
     </ul>
   </div>
   <div class="grey">
     <ul>
         <?php
         $teacherscreato = $db['teachers'];
         for ($i=0; $i <count($teacherscreato) ; $i++) {
           echo "<li>" . $teacherscreato[$i]['name'] . '-' . $teacherscreato[$i]['lastname']. "</li>";
         } ?>
     </ul>
   </div>
 </body>
 </html>
