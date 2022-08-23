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
                    "votes" => []
                ],
            ];

            for($i=0;$i < count($students);$i++)
            {
        ?>
        <h3>
            <?php
                $average = ' Lo studente non ha voti';
                if(count($students[$i]['votes']) > 0)
                {
                    $average = (array_sum($students[$i]['votes']) / count($students[$i]['votes']));    
                }
                echo $students[$i]['name'] . '  ' . $students[$i]['second_name'] . ' --- Media scolastica : ' . $average;
            ?>
        </h3>
        <?php
            }
        ?>
    </div>
</body>
</html>