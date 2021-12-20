<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $array = [];
    ?>
    
</head>
<body>
    
    <h1>Esercizio 4</h1>

    <?php
        $i = 0;
        while(sizeof($array)<=15){
            $randomNumber = rand(1,100);

            if(!in_array($randomNumber, $array)){
                array_push($array, $randomNumber);
            }
            $i++;
        }
    ?>

</body>
</html>