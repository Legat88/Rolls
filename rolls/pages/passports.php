<?php
require "../includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta-charset="utf-8">
    <title><?php echo $config['title'];?></title>

</head>
<body>
<div id = "wrapper">
        <link rel="stylesheet" href="../css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <?php include "../includes/header.php" ?>
    <?php include "../includes/sidebar.php" ?>
    <div class = "content">
        <h1>Паспорта будут здесь!</h1>
    </div>

</div>
</body>
</html>