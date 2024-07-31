<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array</h1>
    <?php

    $myarray = ["jhon", 2, ["apple", "mango", "banana"]];

    foreach ($myarray[2] as $fruits) {
        echo $fruits . "<br/>";
    }

    ?>
</body>

</html>