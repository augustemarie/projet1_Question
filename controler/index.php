<?php 
require_once('../module/general/generalFonction.php'); 
if( isset( $_REQUEST['pg'] ) && $_REQUEST['pg'] == md5( 'deconnexion' ) )
    require_once( '../module/connect_mod/deconnexion.php' );
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../module/general/fichiercss.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>WE CAN</title>
    </head>
    <body>
        <script><?php require_once('../module/general/fichierJs.js') ?></script>
        <div>
            <?php
            //Menu de la page
            require_once('../vue/menuF/menu.php');
            ?>
        </div>
        <div>
            <?php
            //Contenu de la page
            require_once('contenu.php');
            ?>
        </div>
        <div>
            <?php
            // Pied de la page
            require_once('../vue/menuF/footer.php');
            ?>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</htm>