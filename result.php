<?php
$badword = $_GET['badword'];
$paragraph = $_GET['paragraph'];

$censured_paragraph = str_replace($badword,'***', $paragraph);

$paragraph_length = strlen($paragraph);
$censured_paragraph_length = strlen($censured_paragraph)
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
    <section>
        <h3>testo originale</h3>
        <p><?= $paragraph ?></p>
        <p>il testo orginale è lungo <?= $paragraph_length ?> caratteri</p>
    </section>
    <section>
        <h3>testo censurato</h3>
        <p><?= $censured_paragraph ?></p>
        <p>il testo orginale è lungo <?= $censured_paragraph_length ?> caratteri</p>
    </section>
</body>
</html>