<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    define('NUM', $num);
    echo "<table border='1'>";
    echo "<td>Table of $num</td>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $i * NUM;
        echo
        " <tr><td>$num x $i =  $result</td></tr>";
       
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Table of a Number</title>
</head>

<body>
    <form name="table" method="post">
        <table>
            <tr>
                <td>Enter Number :</td>
                <td><input type="text" name="num" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit" name="submit" /></td>
            </tr>
        </table>
    </form>
</body>

</html>