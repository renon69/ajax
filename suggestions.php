<?php 
    $existingNames = ["renon", "vincent",];

    if(isset($_POST['suggestion'])) {
        $name = $_POST['suggestion'];

        foreach ($existingNames as $existingName) {
            if(strpos($existingName, $name) !== false) {
                echo $existingName;
                echo "<br>";
            }
         }
    }
?>