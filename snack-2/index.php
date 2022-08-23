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
        <h2>SNACK 2</h2>
        <?php
            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];
            if( (strlen($name) > 3 && !is_null($name) && !empty($name)) && ((strpos($email,'@') > 0 && strpos($email,'.') > 2) && !empty($email)) && (is_numeric($age) && !empty($age)))
            {
                echo 'Accesso riuscito';
            }
            else{
                echo 'Accesso negato';
            }
        ?>
    </div>
</body>
</html>