<?php
/**
 * Created by PhpStorm.
 * User: Supers-Pipo
 * Date: 04/02/2019
 * Time: 09h14
 */
session_start();
    function nettoieProtect(){

    foreach($_POST as $k => $v){
    $v=strip_tags(trim($v));
    $_POST[$k]=$v;
    }

    foreach($_GET as $k => $v){
    $v=strip_tags(trim($v));
    $_GET[$k]=$v;
    }

    foreach($_REQUEST as $k => $v){
    $v=strip_tags(trim($v));
    $_REQUEST[$k]=$v;
    }

    }



//function
function Diff_entre_2Jours($date2, $date1){
    $diff = abs($date2 - $date1);
    $result = array();
    $tmp = $diff;

    $result['second'] = $tmp % 60; // renvoi le reste de la div

    $tmp = floor(($tmp - $result['second']) / 60);
    $result['minute'] = $tmp % 60;

    $tmp = floor(($tmp - $result['minute']) / 60);
    $result['heure'] = $tmp % 24;

    $tmp = floor(($tmp - $result['heure']) / 24);
    $result['jour'] = $tmp;

    return $result['jour'];
}

    $message='';
    $success='';
    $i=0;


// Connexion à la base de données
require '../../app/config/Config_Server.php';

/* ==========================================================================
GESTION DE L AJOUT DU LOGO, TITRE, ICÖNE
========================================================================== */

// Une fois le formulaire envoyé
if(isset($_GET['idSiteWeb']))
{

    // Vérification de la validité des champs
    if(!preg_match('/^[A-Za-z0-9_ ]{4,50}$/', $_POST['titreSiteWeb']))
    {
        $i++;
        $message .= "Titre Invalid<br />\n";
    }

    // Vérification de la validité des champs
    if(!preg_match('/^[A-Za-z0-9_ ]{4,50}$/', $_POST['sloganSiteWeb']))
    {
        $i++;
        $message .= "Slogan Invalid<br />\n";
    } else {



        //on verifi si l'adresse de l'image a ete bien definit
        if(isset($_FILES['logo']['name']) AND !empty($_FILES['logo']['name']))
        {
            //on verifi la taille de l'image
            if($_FILES['logo']['size']>=1000)
            {
                $extensions_valides=Array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
                //la fonctions strrchr( $chaine,'.') renvoit l'extension avec le point
                //la fonction substtr($chaine,1) ingore la premiere caractere de la chaine
                //la fonction strtolower($chaine) renvoit la chaine en minuscule
                $extension_upload=strtolower(substr(strrchr($_FILES['logo']['name'],'.'),1));
                //on verifi si l'extension_upload est valide

                if(in_array($extension_upload,$extensions_valides))
                {
                    $token=md5(uniqid(rand(),true));
                    $logo="../../public/assets/img/home/{$token}.{$extension_upload}";
                    // $chemin="blog_img/{$token}.{$extension_upload}";
                    //on deplace du serveur au disque dur

                    if(move_uploaded_file($_FILES['logo']['tmp_name'],$logo))
                    {
                        // La photo est la source
                        if($extension_upload=='jpg' OR $extension_upload=='jpeg' OR $extension_upload=='JPG' OR $extension_upload=='JPEG')
                        {$source = imagecreatefromjpeg($logo);}
                        else{$source = imagecreatefrompng($logo);}
                        $destination = imagecreatetruecolor(150, 150); // On crée la miniature vide

                        // Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
                        $largeur_source = imagesx($source);
                        $hauteur_source = imagesy($source);
                        $largeur_destination = imagesx($destination);
                        $hauteur_destination = imagesy($destination);
                        //$chemin0="blog_img/miniature/{$token}.{$extension_upload}";
                        $icon="../../public/assets/img/home/miniature/{$token}.{$extension_upload}";
                        // On crée la miniature
                        imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
                        imagejpeg($destination,$icon);
                    } else {
                        $message .= "no deplace<br/>";
                    }
                } else {
                    $message .= "no extensions<br/>";
                }
            } else {
                $message .= "no size<br/>";
            }
        } else {
            $message .= "no defined<br/>";
        }



        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM top_headers');

        // Si une erreur survient
        if($result > 0 ) {
            $connexion->update('UPDATE top_headers SET nom_site=:nom_site, slogan=:slogan, logo=:logo, icon=:icon, url_skype=:url_skype, url_facebook=:url_facebook, url_twitter=:url_twitter, url_linkedin=:url_linkedin, updated_at=:updated_at',
                array('nom_site'=>$_POST['titreSiteWeb'],
                    'slogan'=>$_POST['sloganSiteWeb'],
                    'logo'=>$logo,
                    'icon'=>$icon,
                    'url_skype'=>$_POST['skypeSiteWeb'],
                    'url_facebook'=>$_POST['fbSiteWeb'],
                    'url_twitter'=>$_POST['twitterSiteWeb'],
                    'url_linkedin'=>$_POST['linkedInSiteWeb'],
                    'updated_at'=>time()));
            $message .= 'success-update';
        }
        else {
            $connexion->insert('INSERT INTO top_headers(nom_site, slogan, logo, icon, url_skype, url_facebook, url_twitter, url_linkedin, created_at)
                                               VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)',
                array($_POST['titreSiteWeb'], $_POST['sloganSiteWeb'], $logo, $icon, $_POST['skypeSiteWeb'], $_POST['fbSiteWeb'], $_POST['twitterSiteWeb'], $_POST['linkedInSiteWeb'], time()));
            $message .= 'success';
        }
    }
    echo $message;
}


/* ==========================================================================
GESTION DU MENU
========================================================================== */

// Une fois le formulaire envoyé
if(isset($_GET['menu'])) {

    if(!isset($_POST['menu']) || empty($_POST['menu'])){
        $message .= "Veuillez inserer un titre<br />\n";
    } else {

        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM headers WHERE titre="'. $_POST['menu'] .'"');

        // Si une erreur survient
        if($result > 0 ) {
            $message .= 'Ce Menu existe déjà';
        }
        else {

            $_POST['keyword'] = str_replace(" ", ",", $_POST['keyword']);

            $connexion->insert('INSERT INTO headers(top_headers_id, titre, description, mots_cles, image, type, url, created_at)
                                               VALUES(?, ?, ?, ?, ?, ?, ?, ?)',
                array("1", $_POST['menu'], $_POST['description_menu'], $_POST['keyword'], "", "", "", time()));


            $max = $connexion->prepare_request('SELECT id AS max_id FROM headers ORDER BY id DESC LIMIT 1', array());

            $retour = $connexion->rowCount('SELECT id FROM page');
            if($retour==0){
                $connexion->insert('INSERT INTO page(parent_id, headers_id, footer_id, created_at)
                                               VALUES(?, ?, ?, ?)',
                    array("0", $max['max_id'], "", time()));

            } else{
                $connexion->insert('INSERT INTO page(parent_id, headers_id, footer_id, created_at)
                                               VALUES(?, ?, ?, ?)',
                    array($_POST['listmenu'], $max['max_id'], "", time()));
            }


            $message .= 'success';
        }
    }
    echo $message;
}


/* ==========================================================================
GESTION DU PIED DE PAGE
========================================================================== */
// Une fois le formulaire envoyé
if(isset($_GET['submenu'])) {

    if(!isset($_POST['sous_menu']) || empty($_POST['sous_menu'])){
        $message .= "Veuillez inserer un titre au pied de page<br />\n";
    } else {

        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM footer WHERE titre="'. $_POST['sous_menu'] .'"');

        // Si une erreur survient
        if($result > 0 ) {
            $message .= 'Ce pied de page existe déjà';
        }
        else {

            $connexion->insert('INSERT INTO footer(titre, description, url, zone, created_at)
                                               VALUES(?, ?, ?, ?, ?)',
                array($_POST['sous_menu'], $_POST['description_sous_menu'], "", $_POST['footer_b'], time()));



            $max = $connexion->prepare_request('SELECT id AS max_id FROM footer ORDER BY id DESC LIMIT 1', array());

            /*$connexion->insert('INSERT INTO page(parent_id, headers_id, footer_id, created_at)
                                               VALUES(?, ?, ?, ?)',
                array($_POST["listmenu"], $_POST["ref_menu"], $max['max_id'], time()));*/

            $connexion->update('UPDATE page SET footer_id=:footer_id, updated_at=:updated_at WHERE headers_id=:headers_id',
                array('footer_id'=>$max['max_id'],
                       'updated_at' => time(),
                        'headers_id' => $_POST["ref_menu"]));


            $message .= 'success';
        }
    }
    echo $message;
}

/* ==========================================================================
GESTION DES SLIDES
========================================================================== */

// Une fois le formulaire envoyé
if(isset($_GET['slide'])) {

    if(!isset($_POST['descSlide']) || empty($_POST['descSlide'])){
        $message .= "Veuillez inserer un titre<br />\n";
    } else {

        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM caroussel WHERE titre="'. $_POST['descSlide'] .'"');

        // Si une erreur survient
        if($result > 0 ) {
            $message .= 'Ce titre existe déjà';
        }
        else {

            //on verifi si l'adresse de l'image a ete bien definit
            if(isset($_FILES['logo']['name']) AND !empty($_FILES['logo']['name']))
            {
                /*$file = $_FILES["files"]['tmp_name'];
                list($width, $height) = getimagesize($file);

                if($width > "180" || $height > "70") {
                    echo "Error : image size must be 180 x 70 pixels.";
                    exit;
                }*/

                //on verifi la taille de l'image
                if($_FILES['logo']['size']>=1000)
                {
                    $extensions_valides=Array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
                    //la fonctions strrchr( $chaine,'.') renvoit l'extension avec le point
                    //la fonction substtr($chaine,1) ingore la premiere caractere de la chaine
                    //la fonction strtolower($chaine) renvoit la chaine en minuscule
                    $extension_upload=strtolower(substr(strrchr($_FILES['logo']['name'],'.'),1));
                    //on verifi si l'extension_upload est valide

                    if(in_array($extension_upload,$extensions_valides))
                    {
                        $token=md5(uniqid(rand(),true));
                        $logo="../../public/assets/img/slide/{$token}.{$extension_upload}";
                        // $chemin="blog_img/{$token}.{$extension_upload}";
                        //on deplace du serveur au disque dur

                        if(move_uploaded_file($_FILES['logo']['tmp_name'],$logo))
                        {
                            // La photo est la source
                            if($extension_upload=='jpg' OR $extension_upload=='jpeg' OR $extension_upload=='JPG' OR $extension_upload=='JPEG')
                            {$source = imagecreatefromjpeg($logo);}
                            else{$source = imagecreatefrompng($logo);}
                            $destination = imagecreatetruecolor(150, 150); // On crée la miniature vide

                            // Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
                            $largeur_source = imagesx($source);
                            $hauteur_source = imagesy($source);
                            $largeur_destination = imagesx($destination);
                            $hauteur_destination = imagesy($destination);
                            //$chemin0="blog_img/miniature/{$token}.{$extension_upload}";
                            $icon="../../public/assets/img/home/miniature/{$token}.{$extension_upload}";
                            // On crée la miniature
                            imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
                            imagejpeg($destination,$icon);
                        } else {
                            $message .= "no deplace<br/>";
                        }
                    } else {
                        $message .= "no extensions<br/>";
                    }
                } else {
                    $message .= "no size<br/>";
                }
            } else {
                $message .= "no defined<br/>";
            }

            $connexion->insert('INSERT INTO caroussel(titre, description, image, created_at)
                                               VALUES(?, ?, ?, ?)',
                array($_POST['titreSlide'], $_POST['descSlide'], $logo, time()));


            //$max = $connexion->prepare_request('SELECT id AS max_id FROM headers ORDER BY id DESC LIMIT 1', array());


            $message .= 'success';
        }
    }
    echo $message;
}


/* ==========================================================================
GESTION DES CATEGORIES
========================================================================== */
// Une fois le formulaire envoyé
if(isset($_GET['categories'])) {

    if(!isset($_POST['titre_categories']) || empty($_POST['titre_categories'])){
        $message .= "Veuillez inserer une Catégorie<br />\n";
    } else {

        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM categories WHERE title="'. $_POST['titre_categories'] .'"');

        // Si une erreur survient
        if($result > 0 ) {
            $message .= 'Cette catégorie existe déjà';
        }
        else {

            $connexion->insert('INSERT INTO categories(title , description, created_at)
                                               VALUES(?, ?, ?)',
                array($_POST['titre_categories'], $_POST['desc_categories'], time()));


            //$max = $connexion->prepare_request('SELECT id AS max_id FROM headers ORDER BY id DESC LIMIT 1', array());


            $message .= 'success';
        }
    }
    echo $message;
}


/* ==========================================================================
UPDATE CATEGORIES
========================================================================== */
// Une fois le formulaire envoyé
if(isset($_GET['updateCategories'])) {

    if(!isset($_POST['titre_categories']) || empty($_POST['titre_categories'])){
        $message .= "Veuillez inserer une Catégorie<br />\n";
    } else {

        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM categories WHERE title="'. $_POST['titre_categories'] .'"');

        // Si une erreur survient
        if($result > 0 ) {
            $message .= 'Cette catégorie existe déjà';
        }
        else {

            $connexion->update('UPDATE categories SET title=:title, description=:description, updated_at=:updated_at WHERE id=:id',
                array('title'=>$_POST['titre_categories'], 'description'=>$_POST['desc_categories'], 'updated_at'=>time(), 'id' => $_POST['category']));

            //$max = $connexion->prepare_request('SELECT id AS max_id FROM headers ORDER BY id DESC LIMIT 1', array());


            $message .= 'success';
        }
    }
    echo $message;
}


/* ==========================================================================
ADD TAGS
========================================================================== */
// Une fois le formulaire envoyé
if(isset($_GET['tag'])) {

    if(!isset($_POST['titre_tag']) || empty($_POST['titre_tag'])){
        $message .= "Veuillez inserer un Tag<br />\n";
    } else {

        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM tags WHERE title="'. $_POST['titre_tag'] .'"');

        // Si une erreur survient
        if($result > 0 ) {
            $message .= 'Ce tag existe déjà';
        }
        else {

            $connexion->insert('INSERT INTO tags(title, created_at)
                                               VALUES(?, ?)',
                array($_POST['titre_tag'], time()));

            $message .= 'success';
        }
    }
    echo $message;
}


/* ==========================================================================
UPDATE TAGS
========================================================================== */
// Une fois le formulaire envoyé
if(isset($_GET['updateTag'])) {

    if(!isset($_POST['titre_tag']) || empty($_POST['titre_tag'])){
        $message .= "Veuillez inserer un Tag<br />\n";
    } else {

        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM tags WHERE title="'. $_POST['titre_tag'] .'"');

        // Si une erreur survient
        if($result > 0 ) {
            $message .= 'Ce tag existe déjà';
        }
        else {

            $connexion->update('UPDATE tags SET title=:title, updated_at=:updated_at WHERE id=:id',
                array('title'=>$_POST['titre_tag'], 'updated_at'=>time(), 'id' => $_POST['tag_id']));

            $message .= 'success';
        }
    }
    echo $message;
}

/* ==========================================================================
ADD ARTICLE
========================================================================== */
// Une fois le formulaire envoyé
if(isset($_GET['article'])) {

    $_POST['desc_article'] = htmlspecialchars($_POST['desc_article'], ENT_QUOTES);

    if(!isset($_POST['desc_article']) || empty($_POST['desc_article'])){
        $message .= "Veuillez inserer un article<br />\n";
    } else {

        nettoieProtect();
        extract($_POST);

        $connexion = App::getDB();
        $result = $connexion->rowCount('SELECT id FROM posts WHERE content ="'. $_POST['desc_article'] .'" OR title ="'.$_POST['titre_article'].'"');

        // Si une erreur survient
        if($result > 0 ) {
            $message .= 'Cette '.$_POST['category_id'].' existe déjà';
        }
        else {


            //on verifi si l'adresse de l'image a ete bien definit
            if(isset($_FILES['imgInp']['name']) AND !empty($_FILES['imgInp']['name']))
            {
                /*$file = $_FILES["files"]['tmp_name'];
                list($width, $height) = getimagesize($file);

                if($width > "180" || $height > "70") {
                    echo "Error : image size must be 180 x 70 pixels.";
                    exit;
                }*/

                //on verifi la taille de l'image
                if($_FILES['imgInp']['size']>=1000)
                {
                    $extensions_valides=Array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
                    //la fonctions strrchr( $chaine,'.') renvoit l'extension avec le point
                    //la fonction substtr($chaine,1) ingore la premiere caractere de la chaine
                    //la fonction strtolower($chaine) renvoit la chaine en minuscule
                    $extension_upload=strtolower(substr(strrchr($_FILES['imgInp']['name'],'.'),1));
                    //on verifi si l'extension_upload est valide

                    if(in_array($extension_upload,$extensions_valides))
                    {
                        $token=md5(uniqid(rand(),true));
                        $imgArticle="../../public/assets/img/article/{$token}.{$extension_upload}";
                        // $chemin="blog_img/{$token}.{$extension_upload}";
                        //on deplace du serveur au disque dur

                        if(move_uploaded_file($_FILES['imgInp']['tmp_name'],$imgArticle))
                        {
                            // La photo est la source
                            if($extension_upload=='jpg' OR $extension_upload=='jpeg' OR $extension_upload=='JPG' OR $extension_upload=='JPEG')
                            {$source = imagecreatefromjpeg($imgArticle);}
                            else{$source = imagecreatefrompng($imgArticle);}
                            $destination = imagecreatetruecolor(150, 150); // On crée la miniature vide

                            // Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
                            $largeur_source = imagesx($source);
                            $hauteur_source = imagesy($source);
                            $largeur_destination = imagesx($destination);
                            $hauteur_destination = imagesy($destination);
                            //$chemin0="blog_img/miniature/{$token}.{$extension_upload}";
                            $imgArticleIcon="../../public/assets/img/article/miniature/{$token}.{$extension_upload}";
                            // On crée la miniature
                            imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
                            imagejpeg($destination,$imgArticleIcon);
                        } else {
                            $message .= "no deplace<br/>";
                        }
                    } else {
                        $message .= "no extensions<br/>";
                    }
                } else {
                    $message .= "no size<br/>";
                }
            } else {
                $message .= "no defined<br/>";
            }

            //save posts
            $connexion->insert('INSERT INTO posts(title, content, category_id, created_at)
                                               VALUES(?, ?, ?, ?)',
                array($_POST['titre_article'], $_POST['desc_article'], $_POST['category_id'], time()));

            //last post selected
            $max = $connexion->prepare_request('SELECT id AS max_id FROM posts ORDER BY id DESC LIMIT 1', array());

            //save image
            $connexion->insert('INSERT INTO images(url_miniature, url, created_at, post_id)
                                               VALUES(?, ?, ?, ?)',
                array($imgArticleIcon, $imgArticle, time(), $max['max_id']));

            $message .= 'success';
        }
    }
    echo $message;
}





