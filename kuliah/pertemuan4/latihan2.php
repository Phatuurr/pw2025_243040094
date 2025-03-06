<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>

<style>
    .kotak {
        width: 60px;
        height: 60px;
        text-align: center;
        background-color: aqua;
        line-height: 60px;
        display: inline-block;
    }

</style>
</head>
<body>
    <?php for ($i=1; $i <= 5; $i++) {?>
    <div class="kotak"><?php echo $i; ?></div>
    <?php } ?>


</body>
</html>