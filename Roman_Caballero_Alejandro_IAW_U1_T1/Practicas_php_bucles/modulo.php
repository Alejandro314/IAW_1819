<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>

    <ul>
        <?php


$i=1;
while ($i <= 100) {

    $divi =$i % 5;
if ($divi==0) {

    echo "<li>$i</li>";

}




$i++;

}


?>
    </ul>

</body>

</html>