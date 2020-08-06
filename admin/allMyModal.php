<!--EN TÊTE-->
<!-- logo_icone Modal-->
<div class="modal fade" id="logo_icone" tabindex="-1" role="dialog" aria-labelledby="logo_icone" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Identite du site</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div id="idSiteWebRapport" class="alert alert-danger"
                                             style="display:none;"></div>
                                        <form id="idSiteWeb" class="user" role="form"
                                              action="controllers/traitement.php?idSiteWeb=idSiteWeb" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="titreSiteWeb"
                                                       id="titreSiteWeb" aria-describedby="titreSiteWeb"
                                                       placeholder="Titre du site">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sloganSiteWeb"
                                                       name="sloganSiteWeb" aria-describedby="sloganSiteWeb"
                                                       placeholder="Slogan du site">
                                            </div>

                                            <div class="form-group">
                                                <input type="url" class="form-control" id="fbSiteWeb" name="fbSiteWeb"
                                                       value="https://www.facebook.com" aria-describedby="fbSiteWeb"
                                                       placeholder="Url Facebook">
                                            </div>

                                            <div class="form-group">
                                                <input type="url" class="form-control" id="twitterSiteWeb"
                                                       value="https://www.twitter.com" name="twitterSiteWeb"
                                                       aria-describedby="twitterSiteWeb" placeholder="Url Twitter">
                                            </div>

                                            <div class="form-group">
                                                <input type="url" class="form-control" id="linkedInSiteWeb"
                                                       value="https://www.linkedin.com" name="linkedInSiteWeb"
                                                       aria-describedby="linkedInSiteWeb" placeholder="Url LinkedIn">
                                            </div>

                                            <div class="form-group">
                                                <input type="url" class="form-control" id="skypeSiteWeb"
                                                       value="https://www.skype.com" name="skypeSiteWeb"
                                                       aria-describedby="skypeSiteWeb" placeholder="Url Skype">
                                            </div>

                                            <div class="form-group">
                                                <label for="logo">Logo et Icône du site</label>
                                                <input type="file" class="form-control-file" id="logo" name="logo">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit"
                                                       class="btn btn-primary btn-user btn-block currentSend"
                                                       value="Publier"/>
                                                <center><img src="img/loader.gif" class="siteWebUploads"
                                                             style="display:none;"></center>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Menu Modal du site-->
<div class="modal fade" id="menu_modal" tabindex="-1" role="application" aria-labelledby="menu_modal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MENU DU SITE WEB</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="justify-content-center">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->

                            <div class="p-5">
                                <div id="menuRapport" class="alert alert-danger" style="display:none;"></div>
                                <form id="form_menu" class="user" role="form"
                                      action="controllers/traitement.php?menu=menu" method="post">

                                    <div class="form-group">
                                        <label class="my-1 mr-2" for="listmenu">Sélectionner un Menu ou
                                            sous-menu</label>
                                        <select class="custom-select my-1 mr-sm-2" id="listmenu" name="listmenu">
                                            <option selected value="1">Menu</option>
                                            <option value="2">Sous Menu</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="menu" id="menu"
                                               aria-describedby="menu" placeholder="Nom du menu">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" aria-describedby="description_menu"
                                                  name="description_menu" id="description_menu" cols="10" rows="3"
                                                  placeholder="Description du Menu"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" aria-describedby="keyword" name="keyword"
                                                  id="description_menu" cols="10" rows="3"
                                                  placeholder="Mots clés du Menu"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-user btn-block currentSend"
                                               value="Publier"/>
                                        <center><img src="img/loader.gif" class="loader" style="display:none;"></center>
                                    </div>

                                </form>

                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- PIED DE PAGE -->
<div class="modal fade" id="sous_menu_modal" tabindex="-1" role="alertdialog" aria-labelledby="sous_menu_modal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PIED DE PAGE</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">


                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div id="submenuRapport" class="alert alert-danger" style="display:none;"></div>
                                        <form id="form_submenu" class="user" role="form"
                                              action="controllers/traitement.php?submenu=submenu" method="post">


                                            <div class="form-group">
                                                <label class="my-1 mr-2" for="ref_menu">Selectionner le Menu
                                                    Concerné</label>
                                                <select class="custom-select my-1 mr-sm-2" id="ref_menu"
                                                        name="ref_menu">
                                                    <?php
                                                    foreach (App::getDB()->query('SELECT id, titre FROM headers ORDER BY id DESC') as $menu):
                                                        echo '<option value="' . $menu->id . '">' . $menu->titre . '</option>';
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="my-1 mr-2" for="footer_b">Sélectionner un Bloc</label>
                                                <select class="custom-select my-1 mr-sm-2" id="footer_b"
                                                        name="footer_b">
                                                    <option value="1">Bloc 1</option>
                                                    <option value="2">Bloc 2</option>
                                                    <option value="3">Bloc 3</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sous_menu" name="sous_menu"
                                                       aria-describedby="sous_menu" placeholder="Titre du pied de page">
                                                <div id="result_submenu1"></div>
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" aria-describedby="description_sous_menu"
                                                          name="description_sous_menu" id="description_sous_menu"
                                                          cols="5" rows="3" placeholder="Description"></textarea>
                                                <div id="result_submenu2"></div>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit"
                                                       class="btn btn-primary btn-user btn-block currentSend"
                                                       value="Publier"/>
                                                <center><img src="img/loader.gif" class="loader" style="display:none;">
                                                </center>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- SLIDES -->
<!-- logo_icone Modal-->
<div class="modal fade" id="slide" tabindex="-1" role="dialog" aria-labelledby="slide" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Caroussel</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div id="slideRapport" class="alert alert-danger" style="display:none;"></div>
                                        <form id="form_slide" class="user" role="form"
                                              action="controllers/traitement.php?slide=slide" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="titreSlide"
                                                       name="titreSlide" aria-describedby="titreSlide"
                                                       placeholder="Titre du Slide">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="descSlide" class="form-control" id="descSlide"
                                                          aria-describedby="descSlide"
                                                          placeholder="Description du Slide" cols="30"
                                                          rows="5"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="logo">Importer une image 1024*780</label>
                                                <input type="file" class="form-control-file" id="logo" name="logo">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit"
                                                       class="btn btn-primary btn-user btn-block currentSend"
                                                       value="Publier"/>
                                                <center><img src="img/loader.gif" class="loader" style="display:none;">
                                                </center>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<!-- PIED DE PAGE -->
<!-- Bloc 1-->
<div class="modal fade" id="footer_b1" tabindex="-1" role="dialog" aria-labelledby="footer_b1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bloc 1</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">

                                        <form class="user" role="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="titre_b1"
                                                       aria-describedby="titre_b1" placeholder="Titre Pied de page">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="desc_b1" class="form-control" id="desc_b1"
                                                          aria-describedby="desc_b1" cols="30" rows="5"
                                                          placeholder="Description Titre"></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-user btn-block"
                                                   value="Publier"/>
                                        </form>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bloc 2-->
<div class="modal fade" id="footer_b2" tabindex="-1" role="application" aria-labelledby="footer_b2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bloc 2</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">

                                        <form class="user" role="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="titre_b2"
                                                       aria-describedby="titre_b2"
                                                       placeholder="Titre Pied de page Bloc 2">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="desc_b2" class="form-control" id="desc_b2"
                                                          aria-describedby="desc_b2" cols="30" rows="5"
                                                          placeholder="Description Titre Bloc 2"></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-user btn-block"
                                                   value="Publier"/>
                                        </form>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bloc 3-->
<div class="modal fade" id="footer_b3" tabindex="-1" role="alertdialog" aria-labelledby="footer_b3" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bloc 3</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">

                                        <form class="user" role="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="titre_b3"
                                                       aria-describedby="titre_b3"
                                                       placeholder="Titre Pied de page Bloc 3">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="desc_b3" class="form-control" id="desc_b3"
                                                          aria-describedby="desc_b3" cols="30" rows="5"
                                                          placeholder="Description Titre Bloc 3"></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-user btn-block"
                                                   value="Publier"/>
                                        </form>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- FORUM D'ECHANGES -->
<!-- CATEGORIES-->
<div class="modal fade" id="caterories" tabindex="-1" role="dialog" aria-labelledby="caterories" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Catégories</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">

                                        <!-- Collapsable Card Example -->
                                        <div class="card shadow mb-4">
                                            <!-- Card Header - Accordion -->
                                            <a href="#collapseAddCategories" class="d-block card-header py-3"
                                               data-toggle="collapse" role="button" aria-expanded="false"
                                               aria-controls="collapseAddCategories">
                                                <h6 class="m-0 font-weight-bold text-primary">Ajouter une catégorie</h6>
                                            </a>
                                            <!-- Card Content - Collapse -->
                                            <div class="collapse show" id="collapseAddCategories">
                                                <div class="card-body">
                                                    <div id="categoriesRapport" class="alert alert-danger"
                                                         style="display:none;"></div>
                                                    <form class="user" role="form" id="form_add_categories"
                                                          action="controllers/traitement.php?categories=add"
                                                          method="post">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                   id="titre_categories" name="titre_categories"
                                                                   aria-describedby="titre_categories"
                                                                   placeholder="Titre Catégorie">
                                                        </div>

                                                        <div class="form-group">
                                                            <textarea name="desc_categories" class="form-control"
                                                                      id="desc_categories"
                                                                      aria-describedby="desc_categories" cols="30"
                                                                      rows="5"
                                                                      placeholder="Description Catégorie"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="submit"
                                                                   class="btn btn-primary btn-user btn-block currentSend"
                                                                   value="Publier"/>
                                                            <center><img src="img/loader.gif" class="loader"
                                                                         style="display:none;"></center>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- TAG-->
<div class="modal fade" id="tag" tabindex="-1" role="dialog" aria-labelledby="tag" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tags</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">

                                        <!-- Collapsable Card Example -->
                                        <div class="card shadow mb-4">
                                            <!-- Card Header - Accordion -->
                                            <a href="#collapseAddCategories" class="d-block card-header py-3"
                                               data-toggle="collapse" role="button" aria-expanded="false"
                                               aria-controls="collapseAddCategories">
                                                <h6 class="m-0 font-weight-bold text-primary">Ajouter un Tag</h6>
                                            </a>
                                            <!-- Card Content - Collapse -->
                                            <div class="collapse show" id="collapseAddCategories">
                                                <div class="card-body">
                                                    <div class="alert alert-danger rapport" style="display:none;"></div>
                                                    <form class="user" role="form" id="form_add_tag"
                                                          action="controllers/traitement.php?tag=add" method="post">
                                                        <div class="form-group">
                                                            <label for="titre_tag"></label><input type="text"
                                                                                                  class="form-control"
                                                                                                  id="titre_tag"
                                                                                                  name="titre_tag"
                                                                                                  aria-describedby="titre_tag"
                                                                                                  placeholder="Titre du Tag">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="submit"
                                                                   class="btn btn-primary btn-user btn-block currentSend"
                                                                   value="Publier"/>
                                                            <center><img src="img/loader.gif" class="loader"
                                                                         style="display:none;" alt=""></center>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


