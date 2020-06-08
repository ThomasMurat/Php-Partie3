<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie3-exo3</title>
    </head>
    <body>
    <?php 
        $var1 = 100;
        $var2 = 7;
        while($var1 > 10) {
            $result = $var1 * $var2;
            echo '<p>' . $result . '</p>';
            $var1--;
        }
    ?>
    </body>
</html>