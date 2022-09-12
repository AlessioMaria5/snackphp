<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$myPar = "Dal punto di vista linguistico, in generale, i blog sono erroneamente considerati raccolte di testi poco sorvegliati (una ricerca del 2007 di Stubbe, Ringlstetter e Schulz fa ritenere i blog, insieme con i forum, il genere testuale con più alto numero di errori - 6,5 errori circa ogni mille parole - analisi effettivamente non realistica se si considera la scelta degli autori di classificare errore tutto ciò che non compare nei grandi dizionari)[14]. Da alcune indagini successive, però, questo giudizio ha subito delle revisioni: secondo uno studio che si basa sull'analisi numerica di “errori più frequenti” dell'italiano scritto ritrovati nel web, nei blog e nei quotidiani online[15].[frase monca]. La lista di parole scelte è il risultato della scrematura eseguita sulla lista di 103 parole comprese nell elenco ritrovato sotto la voce errore del vocabolario Zingarelli (2005).";
$multiplePar = explode('.',$myPar);

for($i = 0; $i < 5; $i++){
    echo '<p>'.$multiplePar[$i].'</p>';
};
?>
    
</body>
</html>