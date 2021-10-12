<!DOCTYPE html>

<?php 

    $_GET["name"];
    $string = "Sereno è, sereno sarà, se non sarà sereno si rasserenerà";
    $newString = str_replace("word", "***", $string);
    $longString1 = strlen($string);
    $longString1 = strlen($newString);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>
    <h1>Testo</h1>
    <p> <?php echo $string ?></p>
    <h6> Ciao <?php echo $name ?></h6>
    <div><?php echo $longString1 ?></div>

    <p> <?php echo $newString ?></p>
    <div><?php echo $longString2 ?></div>

</body>
</html>