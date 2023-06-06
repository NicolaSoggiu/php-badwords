<?php
$input_text = $_GET["text"];
$bad_word = str_replace('PHP', "***", $input_text);
$lenght = strlen(trim($input_text));
$bad_lenght = strlen(trim($bad_word));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <div>
        <h1>The entered text is :<?= " " . $input_text; ?></h1>
        <h3>With a length of: <?= " " . $lenght; ?> characters</h3>
    </div>

    <div>
        <h1>The censored text is: <?= " " . $bad_word; ?></h1>
        <h3>With a length of: <?= " " . $bad_lenght ?> characters</h3>
    </div>

</body>

</html>