<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Файлик</title>
    <link href="style.css" rel="stylesheet" />

</head>
<body>
    <?php
    // Алгоритм считывания данных из файла
    $text = file_get_contents('text.txt');
    $title = file_get_contents('title.txt');
    ?>
    <div><?php echo $text; ?></div>
    <h1><?php echo $title; ?></h1>
</body>
</html>