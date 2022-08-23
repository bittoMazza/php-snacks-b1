<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>SNACK 1</h2>
        <?php
            $games = [
                [
                    "team_1" => 'Olimpia',
                    "team_2" => 'Bologna',
                    "result_1" => 55,
                    "result_2" => 66,
                ],
                [
                    "team_1" => 'A',
                    "team_2" => 'B',
                    "result_1" => 40,
                    "result_2" => 66,
                ],
                [
                    "team_1" => 'C',
                    "team_2" => 'D',
                    "result_1" => 55,
                    "result_2" => 88,
                ],
                [
                    "team_1" => 'E',
                    "team_2" => 'F',
                    "result_1" => 20,
                    "result_2" => 30,
                ],
            ]
        ?>
        <p>
            <?php
                for($i=0;$i<count($games);$i++)
                {
                    echo $games[$i]['team_1'] . ' - ' . $games[$i]['team_2'] . ' | ' . $games[$i]['result_1'] .'-'. $games[$i]['result_2']; 
                }
            ?>
        </p>
    </div>
    <div>
        <h2>SNACK 2</h2>
        <?php
            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];
            if( (strlen($name) > 3) && (strpos($email,'@') > 0 && strpos($email,'.') > 2 ) && (is_numeric($age)))
            {
                echo 'Accesso riuscito';
            }
            else{
                echo 'Accesso negato';
            }
        ?>
    </div>
    <div>
        <h2>SNACK 4</h2>
        <?php
            var_dump(getarray(0,5052,15));  
            function getarray($min,$max,$numValue){
                $newArray = [];
                while( count($newArray) < $numValue ){
                    $newNumber = rand($min,$max);
                    if(!in_array($newNumber,$newArray)){
                        array_push($newArray,$newNumber);
                    }
                }
                sort($newArray);
                return $newArray;
            }
        ?>
    </div>
    <div>
        <h2>SNACK 5</h2>
        <?php
        $paragraph = "Nel mezzo del cammin di nostra vita
        mi ritrovai per una selva oscura,
        ché la diritta via era smarrita.
        
        Ahi quanto a dir qual era è cosa dura
        esta selva selvaggia e aspra e forte
        che nel pensier rinova la paura!
        
        Tant' è amara che poco è più morte;
        ma per trattar del ben ch'i' vi trovai,
        dirò de l'altre cose ch'i' v'ho scorte.
        
        Io non so ben ridir com' i' v'intrai,
        tant' era pien di sonno a quel punto
        che la verace via abbandonai.
        
        Ma poi ch'i' fui al piè d'un colle giunto,
        là dove terminava quella valle
        che m'avea di paura il cor compunto,
        
        guardai in alto e vidi le sue spalle
        vestite già de' raggi del pianeta
        che mena dritto altrui per ogne calle.
        
        Allor fu la paura un poco queta,
        che nel lago del cor m'era durata
        la notte ch'i' passai con tanta pieta.
        
        E come quei che con lena affannata,
        uscito fuor del pelago a la riva,
        si volge a l'acqua perigliosa e guata,";
        ?>
        <div>
            <h2>Paragrafo senza separazioni</h2>
            <p>       
                <?php
                    echo $paragraph;
                ?>
            </p>
        </div>
        <div>
            <h2>Paragrafo con separazioni</h2>
            <?php
                $explodedParagraph = explode(".",$paragraph);
                for($i=0;$i < count($explodedParagraph);$i++){
            ?>
            <p>
                <?php
                    echo $explodedParagraph[$i];
                ?>
            </p>
            <?php
                }
            ?>
        </div>  
    </div>
    <div>
        <h2>SNACK 7</h2>
        <?php
            $students = [
                [
                    "name" => "Roberto",
                    "second_name" => "Mazza",
                    "votes" => [8,3,9,2,6,4,2,8,9]
                ],
                [
                    "name" => "Luca",
                    "second_name" => "Rossi",
                    "votes" => [8,4,7,2,5,4,8,2,8,9]
                ],
                [
                    "name" => "Mario",
                    "second_name" => "Bianchi",
                    "votes" => [8,3,9,2,6,4]
                ],
                [
                    "name" => "Edoardo",
                    "second_name" => "Maioli",
                    "votes" => [8,3,8,2,8,9]
                ],
                [
                    "name" => "Alex",
                    "second_name" => "Ricci",
                    "votes" => [3,8,7,4,9,5,7,5]
                ],
            ];

            for($i=0;$i < count($students);$i++)
            {
        ?>
        <h3>
            <?php
                echo $students[$i]['name'] . '  ' . $students[$i]['second_name'] . ' - Media scolastica : ' . (array_sum($students[$i]['votes']) / count($students[$i]['votes']));
            ?>
        </h3>
        <?php
            }
        ?>
    </div>
</body>
</html>