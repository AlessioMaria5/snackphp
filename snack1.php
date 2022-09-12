<!-- // Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra
di casa e punti 
 fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Squadra casa - Squadra ospite | Punteggio Casa-Punteggio Ospite -->


<?php 

$punteggioCasa = rand(1,100);
$punteggioOspite = rand(1,100);

$partite = [
    'Partita1' => [
        'Squadre' => [
            'SquadraCasa' => ['SquadraA',$punteggioCasa],
            'SquadraOspite' => ['SquadraB',$punteggioOspite]
        ],
    
    ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php for ($i = 0; $i < 3 ; $i++) {
    
    

    echo '<p>' . $partite['Partita1']['Squadre']['SquadraCasa'][0] . 
    ' - '. $partite['Partita1']['Squadre']['SquadraOspite'][0] .
    ' - '. $partite['Partita1']['Squadre']['SquadraCasa'][1] .
    ' - '. $partite['Partita1']['Squadre']['SquadraOspite'][1] .
    '</p>';
    } 
    ?>



</body>
</html>