<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            place-items: center;
            display: grid;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
        <?php
            $name = "Dark Matter.";
            $read = false
        ?>

    <h1>
        <?php if($read) :?>
            You have read <?= $name ?>
        <?php else :?>
            You have NOT read <?= $name ?>
        <?php endif ?>
    </h1>
</body>
</html>