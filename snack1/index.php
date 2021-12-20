<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $partite =[
            [
                $squadraDiCasa = "Napoli",
                $squadraOspite = "Olimpia Milano",
                $puntiSquadraDiCasa = "63",
                $puntiSquadraOspite = "73",
            ],
            [
                $squadraDiCasa = "Trieste",
                $squadraOspite = "Brindisi",
                $puntiSquadraDiCasa = "84",
                $puntiSquadraOspite = "82",
            ],
            [
                $squadraDiCasa = "Varese",
                $squadraOspite = "Brescia",
                $puntiSquadraDiCasa = "75",
                $puntiSquadraOspite = "72",
            ],
            [
                $squadraDiCasa = "Trento",
                $squadraOspite = "Virtus Bologna",
                $puntiSquadraDiCasa = "88",
                $puntiSquadraOspite = "102",
            ]
        ]
    ?>
    
</head>
<body>
    
    <h1>Calendario Basket Serie A 1* giornata</h1>
    <?php
        for($i=0; $i < 4; $i++){  
            
            $partita = $partite[$i][0] . " - " . $partite[$i][1] . " | " . $partite[$i][2] . "-" . $partite[$i][3] . "<br>";
            echo"$partita";
            
        }
    ?>
</body>
</html>