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
            $date = $keys[$i]; // es. '04/05/2002'
            // $posts['04/05/2002'] = array di post di quella data
            // $posts['04/05/2002'][0] = primo post associato a quella data
            // 'title' per accedere alla proprietà
            for ($j = 0; $j < count($posts[$date]); $j++) {
                echo $posts[$date][$j]['title'] . "<br>";
                echo $posts[$date][$j]['text'] . "<br><br>";
            }
        }
    ?>

</body>
</html>