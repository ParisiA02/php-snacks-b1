<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        $posts = [

            '20/05/2008' => [
                [
                    'title' => 'Post 1',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2021' => [
                [
                    'title' => 'Post 3',
                    'text' => 'Testo post 3'
                ]
            ],
            '4/05/2002' => [
                [
                    'title' => 'Post 4',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
    ?>
    
</head>
<body>
    
    <h1>Esercizio 3</h1>

    <?php

        $keys = array_keys($posts);

        for($i = 0; $i < count($keys); $i++){
            $date = $keys[$i];
            $value = $posts[$date];
            echo $date ." <br>";
            var_dump($value) ."<br>";
        }
    ?>

</body>
</html>