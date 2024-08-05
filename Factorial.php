<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function factorial($i)
    {
        if ($i <= 1) {
            return 1;
        } else {
            return $i * factorial($i - 1);
        }
    }
    ?>
</body>

</html>