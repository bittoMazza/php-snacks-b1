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
                    "team_1" => 'Cesena',
                    "team_2" => 'Rimini',
                    "result_1" => 40,
                    "result_2" => 66,
                ],
                [
                    "team_1" => 'Sammaurese',
                    "team_2" => 'Forlì',
                    "result_1" => 55,
                    "result_2" => 88,
                ],
                [
                    "team_1" => 'SChiappe',
                    "team_2" => 'Perdenti assicurati',
                    "result_1" => 20,
                    "result_2" => 30,
                ],
            ];
                
            for($i=0;$i<count($games);$i++)
                {
        ?>
        <h4>
            <?php
                echo $games[$i]['team_1'] . ' - ' . $games[$i]['team_2'] . ' | ' . $games[$i]['result_1'] .'-'. $games[$i]['result_2'];
            ?>
        </h4>
        <?php
                }
        ?>
    </div>
</body>
</html>