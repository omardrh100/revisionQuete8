<!DOCTYPE html>
<html lang="fr">
    <?php include './include/head.php' ?>
<body>
    <?php include './include/header.php' ?>










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

    <?php include './include/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<body>
</html>