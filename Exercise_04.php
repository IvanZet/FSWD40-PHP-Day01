<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>for loop</h1>
    <?php 
        $name = "Ivan & Denis";
        for($i =0; $i < 50; $i++){
            echo $name;
            echo "<br>";
            
        }
        ?>
        <hr>
        <h1>while loop</h1>
        <?php
        $e = 0;
        while($e < 40){
            echo $name;
            $e ++;
        }
        ?>
        <hr>
        <h1> do while loop</h1>
        <?php
        $f = 0;
        do {
            echo $name;
            $f ++;
        } while($f < 40);
        

    ?>

</body>
</html>