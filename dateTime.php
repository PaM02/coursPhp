<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <?php
        echo date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
        echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
        echo date('d F Y');        // 11 October 2012
        echo date('d/m/Y');        // 11/10/12
        ?>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    </body>
</html>