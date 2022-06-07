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
        echo'<h1>Concaténation</h1>
        <h3>Construction d\'une phrase avec les données du tableau</h3> <br>';
        echo '<h2>'. $_SESSION['table'] . $_SESSION['table']. '</h2><br>
        Mon nom est '.  $_SESSION['table'].'j\'ai '.  $_SESSION['table'].'et je suis '. $_SESSION['table'] . '<br>
        <h3>Construction d\'une phrase</h3><br>
        <h2>'. $_SESSION['table'] . strtoupper($_SESSION['table']). '</h2>
        Mon nom est '.  $_SESSION['table'].', j\'ai '.  $_SESSION['table'].', je suis '. $_SESSION['table'] . '<br>'
        . str_replace(',','.','Mon nom est,,,,,,,,,,');
    }
    if(isset($_GET['boucle'])) {
        echo'<h1>Boucle</h1>';
        for ($i=0; $i < 10; $i++) { 
            echo $i . 'lala <br>';
        }
    }
    if(isset($_GET['fonction'])) {
        echo'<h1>Fonction</h1>';
    }
    if(isset($_GET['delete'])) {
        echo'<h1>Delete</h1>';
        session_destroy();
        echo'Données supprimées';
    }

    ?>

    <?php include './include/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<body>
</html>