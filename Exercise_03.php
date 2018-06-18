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
    //$targetDay = "Mon";
    $actualDay = date("D");
    if($actualDay == "Mon"){
        $msg = "Happy Monday";
    } elseif ($actualDay == "Tue") {
        $msg = "Have a nice Tuesday!";
    } elseif ($actualDay == "Wed") {
        $msg = "Have a nice Wednesday!";
    } elseif ($actualDay == "Thu") {
        $msg = "Have a nice Thursday!";
    } elseif ($actualDay == "Fri") {
        $msg = "Have a nice Friday";
    } elseif ($actualDay == "Sat") {
        $msg = "Have a nice Saturday";
    } elseif ($actualDay = "Sun") {
        $msg = "Have a nice Sunday";
    }

    ?>
    <h1><?php echo $msg ?></h1>

</body>
</html>