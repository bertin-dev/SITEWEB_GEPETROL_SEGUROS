<?php

require '../../app/config/Config_Server.php';





/* ==========================================================================
SYSTEME DE VERIFICATION DE LA SECTION COMMENTAIRES
   ========================================================================== */

if(isset($_GET['comment']))
{

    if(isset($_POST['name'])){

        extract($_POST);
        $name = preg_replace('#[^a-z0-9]#i', '', $name); //filter everything

        if(strlen($name) < 4 || strlen($name) > 16 ){
            echo 'Le Nom est compris entre 3 et 16 caractères';
            exit;
        }

        if(is_numeric($name[0])){
            echo 'Le Nom doit commencer par une lettre';
            exit;
        }

        $connexion = App::getDB();
        $nbre = $connexion->rowCount('SELECT id FROM users WHERE first_name ="'.$name.'"');
        if($nbre > 0){
            echo '<br> Ce Nom est déjà utilisé s\'il vous plait veuillez vous inscrire';
            exit;
        }
        else{
            echo 'success';
        }
    }



    if(isset($_POST['email'])){

        extract($_POST);

        if(strlen($_POST['email']) < 4 || strlen($_POST['email']) > 20 ){
            echo 'L\'adresse Email est compris entre 3 et 16 caractères<br>';
            exit;
        }

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { //Validation d'une adresse de messagerie.
            echo 'Votre Adresse E-mail n\'est pas valide<br>';
            exit();
        }

        $connexion = App::getDB();
        $nbre = $connexion->rowCount('SELECT id  FROM users WHERE email="'.$_POST['email'].'"');
        if($nbre > 0){
            echo 'Cet Email est déjà utilisé<br>';
            exit;
        }
        else{
            echo 'success';
        }
    }




    if(isset($_POST['comment'])){

        extract($_POST);
        $message_visitor = preg_replace('#[^a-z0-9]#i', '', $comment); //filter everything

        if(strlen($comment) < 10 || strlen($comment) > 1000 ){
            echo 'Le Message est compris entre 10 et 1000 caractères';
            exit;
        }

        $connexion = App::getDB();
        $nbre = $connexion->rowCount('SELECT id FROM comments WHERE content="'.$comment.'"');
        if($nbre > 0){
            echo '<br> Ce Message est déjà utilisé';
            exit;
        }
        else{
            echo 'success';
        }
    }
}


/* ==========================================================================
SYSTEME DE GESTION DES ARTICLES CLIQUES PAR L'UTILISATEUR
========================================================================== */

if(isset($_POST['articles_click']))
{

    foreach (App::getDB()->query('SELECT posts.id AS id_posts, title, content, post_type, likes, dislike, favourited, posts.created_at,
                                                            user_id, category_id, images.id AS id_images, url_miniature, url FROM posts
                                                     INNER JOIN images
                                                     ON posts.id=images.post_id
                                            WHERE posts.id="'.intval($_POST['articles_click']).'" ORDER BY id_posts DESC') AS $post):

        echo '   <article class="entry entry-single" data-aos="fade-up">

              <div class="entry-img">
              <img src="'.str_replace('../../public/', '', $post->url).'" alt="'.$post->title.'" title="'.$post->title.'" class="img-fluid">        
              </div>

              <h2 class="entry-title">
                <a data="articles='.$post->id_posts.'" href="#" class="link_articles">'.$post->title.'</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a data="articles='.$post->id_posts.'" href="#">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a data="articles='.$post->id_posts.'" href="#"><time datetime="2020-01-01">'.date('F j, Y', $post->created_at).'</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a data="articles='.$post->id_posts.'" href="#">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>'.htmlspecialchars_decode($post->content).'</p>

              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                  <i class="icofont-folder"></i>
                  <ul class="cats">
                    <li><a href="#">Business</a></li>
                  </ul>

                  <i class="icofont-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div>

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on LinkedIn"><i class="icofont-linkedin"></i></a>
                </div>

              </div>

            </article><!-- End blog entry -->
';
    endforeach;
}



/* ==========================================================================
SYSTEME DE GESTION LA ZONE PAGINATION DU BLOG
   ========================================================================== */
if(isset($_POST['pagination']) && isset($_POST['nbre_Article']))
{
    $nombreDeMessagesParPage = intval($_POST['nbre_Article']);
    $pages = intval($_POST['pagination']);

    // On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
    $premierMessageAafficher = ($pages - 1) * $nombreDeMessagesParPage;

    $blog = App::getDB()->compteur_start_end('SELECT id_sujet, titre, paragraphe, mot_cles, image, sujets.date_enreg, libelle FROM sujets 
                                                            INNER JOIN categorie
                                                            ON categorie.id_categorie=sujets.ref_id_categorie
                                                            ORDER BY id_sujet DESC LIMIT :offset , :limit');
    $blog->bindParam(':offset', $premierMessageAafficher , PDO::PARAM_INT);
    $blog->bindParam(':limit', $nombreDeMessagesParPage, PDO::PARAM_INT);
    $blog->execute();
    while ($blog_item = $blog->fetch()) {
        echo '
<article class="col-xs-12 col-sm-10 col-lg-10">
                         <!--BLOC 1-->
          <div class="col-xs-12 col-sm-7 col-lg-6 blog-article-1"> 
        <h1 class="blog-article-1-h1">
            <a data="articles=' . intval($blog_item['id_sujet']) . '" href="#" class="link_articles" title="' . $blog_item['titre'] . '">' .
            utf8_encode($blog_item['titre'])
            . '</a>
        </h1>
            <p class="blog-article-1-p-1">';
        $parser->parse(substr(utf8_encode($blog_item['paragraphe']), MIN_CHARACTER, MAX_CHARACTER));
        echo \App\Link\Parser_Link::urllink($parser->getAsHTML());
        echo '</p>';
        echo '<p class="blog-article-1-p-2">
            <a data="articles=' . intval($blog_item['id_sujet']) . '" href="#" class="link_articles" tabindex="-1" title="' . $blog_item['titre'] . '">Lire la suite</a>
        </p>
        </div>
                         <!--BLOC 2-->
          <div class="col-xs-12 col-sm-2 col-lg-2 papou">
        <div class="col-lg-12">
        <time>
                        <span class="date">
                            <span class="day">' . date('d', strtotime($blog_item['date_enreg'])) . '</span>
                            <span class="month-year">
                                <span class="month">' . date('M', strtotime($blog_item['date_enreg'])) . '</span><br>
                                <span class="year">' . date('Y', strtotime($blog_item['date_enreg'])) . '</span>
                            </span>
                        </span>
            <span class="time">' . date('H', strtotime($blog_item['date_enreg'])) . ':' . date('i', strtotime($blog_item['date_enreg'])) . '</span>
        </time>
        </div>
        <div class="col-lg-12">
<!--cette partie est a gerer-->
        <a href="#" class="nav-js category" data-destination="blog" data-title="Aller à la catégorie '.utf8_encode($blog_item['libelle']).'">'.utf8_encode($blog_item['libelle']).'</a>
        <a data="articles=' . intval($blog_item['id_sujet']) . '" href="#" data-title="Lire Les commentaires" class="comments link_articles">';
        $totalComments = App::getDB()->rowCount('SELECT * FROM comments
                                                     INNER JOIN compte
                                                     ON comments.ref_id_compte=compte.id_compte
                                                     INNER JOIN sujets
                                                     ON comments.ref_id_sujet=sujets.id_sujet
                                                     WHERE sujets.id_sujet="'.$blog_item['id_sujet'].'"');
        if($totalComments==1)
            echo ' Un Commentaire';
        else if($totalComments==0)
            echo $totalComments.' Commentaire';
        else
            echo $totalComments.' Commentaires';
        echo '</a>
        <a style="top: 130px;" href="#" onclick="return false;" data-title="Lire Les Réactions des Commentaires" class="comments">';
        $totalComments = App::getDB()->rowCount('SELECT * FROM comments
                                                     INNER JOIN compte
                                                     ON comments.ref_id_compte=compte.id_compte
                                                     INNER JOIN sujets
                                                     ON comments.ref_id_sujet=sujets.id_sujet
                                                     INNER JOIN feedback_comments
                                                     ON comments.id_commentaires=feedback_comments.ref_id_commentaires
                                                     WHERE sujets.id_sujet="'.$blog_item['id_sujet'].'"');
        if($totalComments==1)
            echo ' Un Commentaire Réagit';
        else if($totalComments==0)
            echo $totalComments.' Commentaire Réagit';
        else
            echo $totalComments.' Commentaires Réagit';
        echo '</a>
        <div class="tags-container">
            <p class="tags">
                <span class="tags-label">Mots-clés : </span><br>
              <a href="#" onclick="return false;" class="nav-js" data-destination="blog" data-title="'.utf8_encode($blog_item['titre']).'">';
        $keyword = explode(';', utf8_encode($blog_item['mot_cles']));
        for($j=0; $j<count($keyword); $j++)
            echo '#'.$keyword[$j].'<br>';
        echo '</a> 
                <br>
            </p>
        </div>
      <!---------------------------------->
       </div>
    </div>
                         <!--BLOC 3-->
          <div class="col-xs-12 col-sm-3 col-lg-4 illu-article">
            <a data="articles=' . intval($blog_item['id_sujet']) . '" href="#" tabindex="-1" class="link_articles">
                <img class="img-responsive" src="' . $blog_item['image'] . '" alt="' . $blog_item['titre'] . '" title="' . $blog_item['titre'] . '">
            </a>
    </div>
</article>
        ';
    }//fin de while
}

