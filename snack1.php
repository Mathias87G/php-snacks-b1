<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$giornata1 = [
  [
    'team1' => 'Pistoia',
    'team2' => 'Reggiana',
    'score1' => '86',
    'score2' => '79'
  ],
  [
    'team1' => 'Brescia',
    'team2' => 'Trieste',
    'score1' => '76',
    'score2' => '74'
  ],
  [
    'team1' => 'Venezia',
    'team2' => 'Treviso',
    'score1' => '79',
    'score2' => '73'
  ],
  [
    'team1' => 'Trento',
    'team2' => 'Cantù',
    'score1' => '79',
    'score2' => '71'
  ],
  [
    'team1' => 'Olimpia Milano',
    'team2' => 'Cremona',
    'score1' => '77',
    'score2' => '74'
  ],
  [
    'team1' => 'Pesaro',
    'team2' => 'Brindisi',
    'score1' => '77',
    'score2' => '103'
  ]
];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>1a giornata Lega Basket</title>
   </head>
   <body>
     <ul>
       <?php for ($i=0; $i < count($giornata1); $i++) { ?>
         <li>
           <p><?php echo $giornata1[$i]['team1'].'-'.$giornata1[$i]['team2'].' '.
           $giornata1[$i]['score1'].'-'.$giornata1[$i]['score2']  ?></p>
         </li>
        <?php } ?>
     </ul>

   </body>
 </html>
