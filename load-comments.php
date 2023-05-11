<?php
    include 'dbh.php';

    $commentNewCount = $_POST['commentNewCount'];

    $sql = "SELECT * FROM comments LIMIT $commentNewCount";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll();

    if (count($result) > 0) {
        foreach ($result as $row) {

            echo $row['author'];
            echo '<br>';
            echo $row['message'];
            echo '<br>';
            echo '<br>';
        }
    } else {
        echo 'no data';
    }
?>