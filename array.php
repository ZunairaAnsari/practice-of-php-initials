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
    
    echo $myarray[1];
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    
    echo $myarray[0];
    echo "<br/>";


    // Remove "mango" from the nested array
    unset($myarray[2][1]);

    // Re-index the array to ensure correct indexing
    $myarray[2] = array_values($myarray[2]);

    // Display the results
    echo $myarray[0] . "<br/>";
    echo $myarray[1] . "<br/>";
    foreach ($myarray[2] as $fruit) {
        echo $fruit . "<br/>";
    }


    ?>

</body>

</html>