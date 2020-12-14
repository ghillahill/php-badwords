<?php
    $badword = $_GET['badword'];
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

    $newparagraph = str_replace($badword, '***', $paragraph);
    $par_len = strlen($paragraph);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Badwords</title>
    </head>
    <body>

        <h2> Parola Censurata: <?php echo $badword; ?> </h2>

        <p>Lunghezza Paragrafo:
            <?php
                echo $par_len;
            ?>
        </p>

        <h1> Paragrafo: <?php echo $newparagraph ?> </h1>

    </body>
</html>
