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
</body>
</html>