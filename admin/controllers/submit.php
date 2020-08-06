<?php
require '../../app/config/Config_Server.php';
// Une fois le formulaire envoyé
if(isset($_GET['comment'])) {

    if(is_numeric($_POST['name'][0])){
        echo 'Le Nom doit commencer par une lettre';
        exit;
    }
    // Vérification de la validité des champs
    if (!preg_match('/^[A-Za-z0-9_ ]{3,16}$/', $_POST['name'])) {
        echo "Le Nom est Invalid";
        exit();
    }

    /*-------------------------------*/
    if(is_numeric($_POST['email'][0])){
        echo 'L\'email doit commencer par une lettre<br>';
        exit;
    }
    if (!preg_match('/^[A-Z\d\._-]+@[A-Z\d\.-]{2,}\.[A-Z]{2,4}$/i', $_POST['email'])) {
        echo "Email Invalid";
        exit();
    }

    /* htmlentities empêche l'excution du code HTML
     * le ENT_QUOTES pour dire à htmlentities qu'on veut en plus transformer les apostrophes et guillemets*/

    $_POST['name'] = htmlentities(strtolower(stripslashes(htmlspecialchars($_POST['name']))), ENT_QUOTES);
    $_POST['email'] = htmlentities(strtolower(stripslashes(htmlspecialchars($_POST['email']))), ENT_QUOTES);
    $_POST['comment'] = htmlentities(nl2br((stripslashes(htmlspecialchars($_POST['comment'])))), ENT_QUOTES);


    $nbre = $connexion->rowCount('SELECT id FROM users WHERE email="'.$_POST['email'].'"');

    if($nbre > 0){
        echo 'l\'adresse Email est déjà utilisé';
        exit;
    }

    else {
        extract($_POST);

        $newsletter = $connexion->prepare_request('SELECT id_newsletter FROM newsletter WHERE email_newsletter=:email', array('email'=>$_POST['email_visitor']));



        $connexion->insert('INSERT INTO users(first_name, email, user_type, created_at) 
                                               VALUES(?, ?, ?, ?)', array($_POST['name'], $_POST['email'], 'visiteur', time()));

        //last user insert
        $max = $connexion->prepare_request('SELECT id AS max_id FROM users ORDER BY id DESC LIMIT 1', array());


        $connexion->insert('INSERT INTO comments(content, created_at, user_id, post_id) 
                                               VALUES(?, ?)', array($_POST['comment'], time()));

        echo 'success';
    }

}