<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $tab = array();
    function nombreAleatoire()
    {
       return rand(0, 100);
    }

    for ($i = 0; $i<=29; $i++)
    {
       array_push($tab, nombreAleatoire());
       
    }
    foreach($tab as $x)
    {
        echo $x;
        ?>
        <br>
        <?php
    }

     ?>
    
</body>
</html>