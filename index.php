<?php session_start();
print_r($_SESSION)
?>

<!DOCTYPE html>
<html lang="fr">
    <?php include './include/head.php' ?>
<body>
    <?php include './include/header.php' ?>

<div class="container">
    <div class="row" >
        <div class="col">
            <button type="button" class="btn btn-light"><a href="index.php">Home</a></button>
        </div>
        <div class="col-8">
            <button type="button" class="btn btn-dark"><a href="index.php?form">Ajoutée des données</a></button>
            <?php if(isset($_SESSION['table'])) {
            echo '<button type="button" class="btn btn-secondary"><a class="text-light" href="index.php?formBonus">Ajoutée plus de données</a></button>';
            }
            ?>
    
            


            <?php   if(isset($_GET['form'])) {
                include 'include/form.php';
            } ?>
            <?php   if(isset($_GET['formBonus'])) {
                include 'include/formBonus.php';
            } ?>
        </div>
    </div>
</div>

<?php



        if(isset($_GET['submit'])) {

            if (empty($_GET['firstname'])){
                echo'<div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                    </div>';
            }
            else{
                echo'<div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>';
            }


            if (empty($_GET['lastname'])){
               echo'<div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
                </div>';
        
            }
            else{
                echo'<div class="alert alert-success" role="alert">
                A simple success alert—check it out!
            </div>';
            }

           
            if (empty($_GET['age'])){
                echo'<div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                    </div>';
            }
            else{
                echo'<div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>';
            }
            



            if (empty($_GET['size'])){
                echo'<div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                    </div>';
            }
            else{
                echo'<div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>';
            }



            if (empty($_GET['fonction'])){
                echo'<div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                    </div>';
            }
            else{
                echo'<div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>';
            }

            
            if (!empty($_GET['firstname']) && !empty($_GET['lastname'])
                && !empty($_GET['age']) && !empty($_GET['size']) && !empty($_GET['fonction'])){
                $_SESSION['table'] = [
                    'nom'=>$_GET['firstname'],
                    'prenom'=>$_GET['lastname'],
                    'age'=>$_GET['age'],
                    'taille'=>$_GET['size'],
                    'metier'=>$_GET['fonction']

                ];
                print_r($_SESSION['table']);
                
            }

        }
    








?>








    <?php
    // si la session exist, include ul
    if(isset($_SESSION['table'])) {
        include 'include/ul.php';
    }


    if(isset($_GET['debug'])) {
        echo'<h1>Debug</h1>';
        print_r($_SESSION['table']);
    }

    if(isset($_GET['concat'])) {
        echo'<h1>Concaténation</h1>
        <h3>Construction d\'une phrase avec les données du tableau</h3> <br>';
        echo '<h2>'. $_SESSION['table']['prenom'] . $_SESSION['table']['nom']. '</h2><br>
        Mon nom est '.  $_SESSION['table']['nom'].'j\'ai '.  $_SESSION['table']['age'].'et je suis '. $_SESSION['table']['fonction'] . '<br>
        <h3>Construction d\'une phrase</h3><br>
        <h2>'. $_SESSION['table'] . strtoupper($_SESSION['table']). '</h2>
        Mon nom est '.  $_SESSION['table']['nom'].', j\'ai '.  $_SESSION['table']['age'].', je suis '. $_SESSION['table']['fonction'] . '<br>'
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
    if(isset($_GET['delete'])) {
        echo 'delete';
    }



    ?>

    <?php include './include/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<body>
</html>