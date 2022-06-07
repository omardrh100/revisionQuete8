<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <?php
    // si la session exist, include ul
    if(!isset($_SESSION['table'])) {
        include 'include/ul.php';
    }
    if(isset($_GET['debug'])) {
        echo'<h1>Debug</h1>';
        print_r($_SESSION['table']);
    }
    if(isset($_GET['concat'])) {
        echo 'concat';
    }
    if(isset($_GET['boucle'])) {
        echo 'boucle';
    }
    if(isset($_GET['fonction'])) {
        echo 'fonction';
    }
    if(isset($_GET['delete'])) {
        echo 'delete';
    }

    ?>
    
</body>
</html>