<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];

        $at = str_contains($email, "@");
        $dot = str_contains($email, ".");
    ?>
    
</head>
<body>
    
    <h1>Esercizio 2</h1>
    <?php
        echo  $name . " " . $email . " " . $age . "<br>";

        if(strlen($name) > 3 && $at && $dot && is_numeric($age)){
            echo "Accesso Riuscito";
        }else{
            echo "Accesso Negato";
        }
    ?>
</body>
</html>