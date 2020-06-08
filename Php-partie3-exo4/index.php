<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie3-exo4</title>
    </head>
    <body>
    <?php 
        $var = 1;
        while($var <= 10) {
            echo '<p>' . $var . '</p>';
            $var += $var / 2;
        }
    ?>
    </body>
</html>