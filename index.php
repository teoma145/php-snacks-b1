<?php
$partite = [
    [
    "squadra_casa" => "Olimpia Milano", 
    "squadra_ospite" => "Cantù", 
    "punti_casa" => 55, 
    "punti_ospite" => 60
    ],
    [
    "squadra_casa" => "Roma", 
    "squadra_ospite" => "Napoli", 
    "punti_casa" => 70, 
    "punti_ospite" => 65
    ],
    [
    "squadra_casa" => "Torino", 
    "squadra_ospite" => "Genova", 
    "punti_casa" => 62, 
    "punti_ospite" => 58
    ],
    [
        "squadra_casa" => "Brindisi", 
    "squadra_ospite" => "Lecce", 
    "punti_casa" => 100, 
    "punti_ospite" => 2
    ],
   
];

foreach ($partite as $partita) {
    $squadraCasa = $partita["squadra_casa"];
    $squadraOspite = $partita["squadra_ospite"];
    $puntiCasa = $partita["punti_casa"];
    $puntiOspite = $partita["punti_ospite"]."<br>";

    echo "$squadraCasa - $squadraOspite | $puntiCasa-$puntiOspite ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="verifiche.php" method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail">

        <label for="age">Age:</label>
        <input type="text" id="age" name="age">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
