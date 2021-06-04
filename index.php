<?php

include "./discs.php";


//API di base
header("Content-Type: application/json");

echo json_encode($arrayDiscs);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $discs = implode(", ", $arrayDiscs);

    foreach ($arrayDiscs as $value) {
        ?>
        <div class="disc">
            <h3><?php echo $value["title"] ?></h3>
            <p><?php echo $value["author"] ?><br>
            <?php echo $value["album"] ?><br>
            <?php echo $value["year"] ?></p>
</p>

        </div> <?php
    }

    ?>

</body>
</html>