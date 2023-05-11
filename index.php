<?php include 'dbh.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div id="comments">
    <?php
    $sql = "SELECT * FROM comments LIMIT 2";
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
    </div>
<button 
class="rounded-lg px-4 py-2 bg-blue-500 text-blue-100 hover:bg-blue-600 duration-300">Primary</button>
</body>
</html>


