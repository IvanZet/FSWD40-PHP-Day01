<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 6</h1>
    <h3>first Version</h3 >
    <?php 
        $names = [
            "Mickey" => "Maus",
            "Spider" => "man",
            "The huge" => "Hulg",
        ];
        foreach($names as $index => $value){
            echo $index." ".$value.".<br>";
        }
        ?>
        <h3>second Version</h3 >
        <?php 
        $namesb = [
            "Mickey" => "Mickey Maus",
            "Spider" => "Spiderman",
            "green" => "The huge Hulg",
        ];
        foreach($namesb as $index => $value){
            echo $index." ".$value.".<br>";
        }
        ?>
        <h3>second Part Multidimensional Arry</h3 >
        <?php 
        $heros = array(
    
            "mickey" => array("name" => "Mickey Maus", "age" => 75, "partner" => "Pluto"),
            "donald" => array("name" => "Donald Duck", "age" => 68, "partner" => "Daisy"),
            "chip" => array("name" => "Chip", "age" => 50, "partner" => "Dale"),
        );
        foreach($heros as $hero => $title){
            echo $hero;
            echo "<br>";
            foreach($title as $key => $value){
                echo $key.": ".$value."<br>";
            }
            echo "<br><hr>";
        }
    ?>

</body>
</html>