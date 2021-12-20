<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ## Snack 1
    
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    
    Olimpia Milano - Cantù | 55-60 -->

    <h2>Snack 1</h2>
    <?php

        $tappa = [
            [
                'home' => 'casa0',
                'away' => 'ospiti0',
                'homePoints' => 10,
                'awayPoints' => 10,
            ],
            [
                'home' => 'casa1',
                'away' => 'ospiti1',
                'homePoints' => 20,
                'awayPoints' => 20,
            ],
            [
                'home' => 'casa2',
                'away' => 'ospiti2',
                'homePoints' => 30,
                'awayPoints' => 30,
            ],
            [
                'home' => 'casa3',
                'away' => 'ospiti3',
                'homePoints' => 40,
                'awayPoints' => 40,
            ],
        ];
        for ($i = 0; $i < count($tappa); $i++) {
            echo '<p>' . $tappa[$i]['home'] . ' - ' . $tappa[$i]['away'] . ' | ' . $tappa[$i]['homePoints'] . ' - ' . $tappa[$i]['awayPoints'] . '</p>';
        };

    ?>
    
    <!-- ## Snack 2
    
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
    <h2>Snack 2</h2>
    <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        $nameOk = false;
        if (strlen($name) > 3) {
            $nameOk = true;
        };
        $mailOk = false;
        if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
            $mailOk = true;
        };
        $ageOk = false;
        if (is_numeric($age)) {
            $ageOk = true;
        };

        if ($nameOk === true && $mailOk === true && $ageOk === true) {
            echo '<p>Accesso Riuscito</p>';
        } else {
            echo '<p>Accesso Negato</p>';
        }        
    ?>
    <!-- ## Snack 3
    
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    
    Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->
    <h2>Snack 3</h2>
    <?php
        $posts = [
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
    ?>
    <!-- ## Snack 4
    
    Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
    <?php

        function randomArray($min, $max, $items,) {
            $randomNumbers = [];
            while (count($randomNumbers) < $items) {
                $num = rand($min, $max);
                if (!in_array($num, $randomNumbers)) {
                    $randomNumbers[] = $num;
                }
            }
            echo '<ul>';
            for ($i = 0; $i < count($randomNumbers); $i++) {
                echo '<li>' . $randomNumbers[$i] . '</li>';
            }
            return $randomNumbers;
            echo '</ul>';
        }
        randomArray(1, 100, 15);
    ?>
    <!-- -------------------------------------------------------[OPZIONALI]------------------------------------------------------- -->
    
    <!-- ## Snack 5
    
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
    <?php
        
    ?>
    <!-- ## Snack 6
    
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
    <?php
        
    ?>
    <!-- ## Snack 7
    
    Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    <?php
        
    ?>
</body>
</html>

