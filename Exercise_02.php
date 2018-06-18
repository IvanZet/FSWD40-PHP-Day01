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
    $msg;
    $targetDay = "Mon";
    $actualDay = date("D");
    if($actualDay == $targetDay)
    $msg = "Happy Monday";
     else 
     $msg = "Have a nice day!";

    ?>
    <h1><?php echo $msg ?></h1>

</body>
</html>