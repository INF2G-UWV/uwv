<?php

function listItems()
{
    $conn = new PDO('mysql:dbname=uwv;host=localhost', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlString = "SELECT * FROM uwv_test1 ORDER BY Question_Order;";

    $stmt = $conn->query($sqlString);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr>"
                . "<td id='id_" . $row['QuestionID'] . "' width='25%' align='center'>#" . $row['QuestionID'] . "</td>"
                . "<td width='75%'>" . $row['Question'] . "</td>"
           . "</tr>";
    }
}