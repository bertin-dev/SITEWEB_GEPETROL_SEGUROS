<?php
require '../app/config/Config_Server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Tableau de Bord</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <?php require 'sidebar.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php require 'topbar.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de Bord</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <!-- Color System -->
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-light text-black shadow">
                    <div class="card-body">
                      Light
                      <div class="text-black-50 small">#f8f9fc</div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                  <div class="card-body">
                      Dark
                      <div class="text-white-50 small">#5a5c69</div>
                  </div>
                </div>
              </div>
            </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
        <?php require 'footer.php';?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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
                                        <div id="idSiteWebRapport" class="alert alert-danger" style="display:none;"></div>
                                        <form id="idSiteWeb" class="user" role="form" action="controllers/traitement.php?idSiteWeb=idSiteWeb" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="titreSiteWeb" id="titreSiteWeb" aria-describedby="titreSiteWeb" placeholder="Titre du site">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sloganSiteWeb" name="sloganSiteWeb" aria-describedby="sloganSiteWeb" placeholder="Slogan du site">
                                            </div>

                                            <div class="form-group">
                                                <input type="url" class="form-control" id="fbSiteWeb" name="fbSiteWeb" value="https://www.facebook.com" aria-describedby="fbSiteWeb" placeholder="Url Facebook">
                                            </div>

                                            <div class="form-group">
                                                <input type="url" class="form-control" id="twitterSiteWeb" value="https://www.twitter.com" name="twitterSiteWeb" aria-describedby="twitterSiteWeb" placeholder="Url Twitter">
                                            </div>

                                            <div class="form-group">
                                                <input type="url" class="form-control" id="linkedInSiteWeb" value="https://www.linkedin.com" name="linkedInSiteWeb" aria-describedby="linkedInSiteWeb" placeholder="Url LinkedIn">
                                            </div>

                                            <div class="form-group">
                                                <input type="url" class="form-control" id="skypeSiteWeb" value="https://www.skype.com" name="skypeSiteWeb" aria-describedby="skypeSiteWeb" placeholder="Url Skype">
                                            </div>

                                            <div class="form-group">
                                                <label for="logo">Logo et Icône du site</label>
                                                <input type="file" class="form-control-file" id="logo" name="logo">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-user btn-block currentSend" value="Publier"/>
                                                <center><img src="img/loader.gif" class="siteWebUploads" style="display:none;"></center>
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
  <div class="modal fade" id="menu_modal" tabindex="-1" role="application" aria-labelledby="menu_modal" aria-hidden="true">
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
                                          <form id="form_menu" class="user" role="form" action="controllers/traitement.php?menu=menu" method="post">

                                              <div class="form-group">
                                                  <label class="my-1 mr-2" for="listmenu">Sélectionner un Menu ou sous-menu</label>
                                                  <select class="custom-select my-1 mr-sm-2" id="listmenu" name="listmenu">
                                                      <option selected value="1">Menu</option>
                                                      <option value="2">Sous Menu</option>
                                                  </select>
                                              </div>

                                              <div class="form-group">
                                                  <input type="text" class="form-control" name="menu" id="menu" aria-describedby="menu" placeholder="Nom du menu">
                                              </div>

                                              <div class="form-group">
                                                  <textarea class="form-control" aria-describedby="description_menu" name="description_menu" id="description_menu" cols="10" rows="3" placeholder="Description du Menu"></textarea>
                                              </div>

                                              <div class="form-group">
                                                  <textarea class="form-control" aria-describedby="keyword" name="keyword" id="description_menu" cols="10" rows="3" placeholder="Mots clés du Menu"></textarea>
                                              </div>

                                              <div class="form-group">
                                                  <input type="submit" class="btn btn-primary btn-user btn-block currentSend" value="Publier"/>
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
  <div class="modal fade" id="sous_menu_modal" tabindex="-1" role="alertdialog" aria-labelledby="sous_menu_modal" aria-hidden="true">
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
                                          <form id="form_submenu" class="user" role="form" action="controllers/traitement.php?submenu=submenu" method="post">


                                              <div class="form-group">
                                                  <label class="my-1 mr-2" for="ref_menu">Selectionner le Menu Concerné</label>
                                                  <select class="custom-select my-1 mr-sm-2" id="ref_menu" name="ref_menu">
                                                      <?php
                                                      foreach (App::getDB()->query('SELECT id, titre FROM headers ORDER BY id DESC') AS $menu):
                                                          echo '<option value="' . $menu->id . '">' . $menu->titre . '</option>';
                                                      endforeach;
                                                      ?>
                                                  </select>
                                              </div>

                                              <div class="form-group">
                                              <label class="my-1 mr-2" for="footer_b">Sélectionner un Bloc</label>
                                              <select class="custom-select my-1 mr-sm-2" id="footer_b" name="footer_b">
                                                  <option value="1">Bloc 1</option>
                                                  <option value="2">Bloc 2</option>
                                                  <option value="3">Bloc 3</option>
                                              </select>
                                              </div>

                                              <div class="form-group">
                                                  <input type="text" class="form-control" id="sous_menu" name="sous_menu" aria-describedby="sous_menu" placeholder="Titre du pied de page">
                                                  <div id="result_submenu1"></div>
                                              </div>

                                              <div class="form-group">
                                                  <textarea class="form-control" aria-describedby="description_sous_menu" name="description_sous_menu" id="description_sous_menu" cols="5" rows="3" placeholder="Description"></textarea>
                                                  <div id="result_submenu2"></div>
                                              </div>

                                              <div class="form-group">
                                                  <input type="submit" class="btn btn-primary btn-user btn-block currentSend" value="Publier"/>
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
                                          <form id="form_slide" class="user" role="form" action="controllers/traitement.php?slide=slide" method="post">
                                              <div class="form-group">
                                                  <input type="text" class="form-control" id="titreSlide" name="titreSlide" aria-describedby="titreSlide" placeholder="Titre du Slide">
                                              </div>

                                              <div class="form-group">
                                                  <textarea name="descSlide" class="form-control" id="descSlide" aria-describedby="descSlide" placeholder="Description du Slide" cols="30" rows="5"></textarea>
                                              </div>

                                              <div class="form-group">
                                                  <label for="logo">Importer une image 1024*780</label>
                                                  <input type="file" class="form-control-file" id="logo" name="logo">
                                              </div>

                                              <div class="form-group">
                                                  <input type="submit" class="btn btn-primary btn-user btn-block currentSend" value="Publier"/>
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
                                                  <input type="text" class="form-control" id="titre_b1" aria-describedby="titre_b1" placeholder="Titre Pied de page">
                                              </div>

                                              <div class="form-group">
                                                  <textarea name="desc_b1" class="form-control" id="desc_b1" aria-describedby="desc_b1" cols="30" rows="5" placeholder="Description Titre"></textarea>
                                              </div>
                                              <input type="submit" class="btn btn-primary btn-user btn-block" value="Publier"/>
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
                                                  <input type="text" class="form-control" id="titre_b2" aria-describedby="titre_b2" placeholder="Titre Pied de page Bloc 2">
                                              </div>

                                              <div class="form-group">
                                                  <textarea name="desc_b2" class="form-control" id="desc_b2" aria-describedby="desc_b2" cols="30" rows="5" placeholder="Description Titre Bloc 2"></textarea>
                                              </div>
                                              <input type="submit" class="btn btn-primary btn-user btn-block" value="Publier"/>
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
                                                  <input type="text" class="form-control" id="titre_b3" aria-describedby="titre_b3" placeholder="Titre Pied de page Bloc 3">
                                              </div>

                                              <div class="form-group">
                                                  <textarea name="desc_b3" class="form-control" id="desc_b3" aria-describedby="desc_b3" cols="30" rows="5" placeholder="Description Titre Bloc 3"></textarea>
                                              </div>
                                              <input type="submit" class="btn btn-primary btn-user btn-block" value="Publier"/>
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
                                              <a href="#collapseAddCategories" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseAddCategories">
                                                  <h6 class="m-0 font-weight-bold text-primary">Ajouter une catégorie</h6>
                                              </a>
                                              <!-- Card Content - Collapse -->
                                              <div class="collapse show" id="collapseAddCategories">
                                                  <div class="card-body">
                                                      <div id="categoriesRapport" class="alert alert-danger" style="display:none;"></div>
                                                      <form class="user" role="form" id="form_add_categories" action="controllers/traitement.php?categories=add" method="post">
                                                          <div class="form-group">
                                                              <input type="text" class="form-control" id="titre_categories" aria-describedby="titre_categories" placeholder="Titre Catégorie">
                                                          </div>

                                                          <div class="form-group">
                                                              <textarea name="desc_b1" class="form-control" id="desc_categories" aria-describedby="desc_categories" cols="30" rows="5" placeholder="Description Catégorie"></textarea>
                                                          </div>

                                                          <div class="form-group">
                                                              <input type="submit" class="btn btn-primary btn-user btn-block currentSend" value="Publier"/>
                                                              <center><img src="img/loader.gif" class="loader" style="display:none;"></center>
                                                          </div>

                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                          <hr>
                                          <div class="card shadow mb-4">
                                              <!-- Card Header - Accordion -->
                                              <a href="#collapseListCategories" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseListCategories">
                                                  <h6 class="m-0 font-weight-bold text-primary">Liste des Categories</h6>
                                              </a>
                                              <!-- Card Content - Collapse -->
                                              <div class="collapse show" id="collapseListCategories">
                                                  <div class="card-body">
                                                      <!-- Begin Page Content -->
                                                      <div class="container-fluid">

                                                          <!-- Page Heading -->
                                                          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                                                          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                                                          <!-- DataTales Example -->
                                                          <div class="card shadow mb-4">
                                                              <div class="card-header py-3">
                                                                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                                              </div>
                                                              <div class="card-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                                          <thead>
                                                                          <tr>
                                                                              <th>Name</th>
                                                                              <th>Position</th>
                                                                              <th>Office</th>
                                                                              <th>Age</th>
                                                                              <th>Start date</th>
                                                                              <th>Salary</th>
                                                                          </tr>
                                                                          </thead>
                                                                          <tfoot>
                                                                          <tr>
                                                                              <th>Name</th>
                                                                              <th>Position</th>
                                                                              <th>Office</th>
                                                                              <th>Age</th>
                                                                              <th>Start date</th>
                                                                              <th>Salary</th>
                                                                          </tr>
                                                                          </tfoot>
                                                                          <tbody>
                                                                          <tr>
                                                                              <td>Tiger Nixon</td>
                                                                              <td>System Architect</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>61</td>
                                                                              <td>2011/04/25</td>
                                                                              <td>$320,800</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Garrett Winters</td>
                                                                              <td>Accountant</td>
                                                                              <td>Tokyo</td>
                                                                              <td>63</td>
                                                                              <td>2011/07/25</td>
                                                                              <td>$170,750</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Ashton Cox</td>
                                                                              <td>Junior Technical Author</td>
                                                                              <td>San Francisco</td>
                                                                              <td>66</td>
                                                                              <td>2009/01/12</td>
                                                                              <td>$86,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Cedric Kelly</td>
                                                                              <td>Senior Javascript Developer</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>22</td>
                                                                              <td>2012/03/29</td>
                                                                              <td>$433,060</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Airi Satou</td>
                                                                              <td>Accountant</td>
                                                                              <td>Tokyo</td>
                                                                              <td>33</td>
                                                                              <td>2008/11/28</td>
                                                                              <td>$162,700</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Brielle Williamson</td>
                                                                              <td>Integration Specialist</td>
                                                                              <td>New York</td>
                                                                              <td>61</td>
                                                                              <td>2012/12/02</td>
                                                                              <td>$372,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Herrod Chandler</td>
                                                                              <td>Sales Assistant</td>
                                                                              <td>San Francisco</td>
                                                                              <td>59</td>
                                                                              <td>2012/08/06</td>
                                                                              <td>$137,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Rhona Davidson</td>
                                                                              <td>Integration Specialist</td>
                                                                              <td>Tokyo</td>
                                                                              <td>55</td>
                                                                              <td>2010/10/14</td>
                                                                              <td>$327,900</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Colleen Hurst</td>
                                                                              <td>Javascript Developer</td>
                                                                              <td>San Francisco</td>
                                                                              <td>39</td>
                                                                              <td>2009/09/15</td>
                                                                              <td>$205,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Sonya Frost</td>
                                                                              <td>Software Engineer</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>23</td>
                                                                              <td>2008/12/13</td>
                                                                              <td>$103,600</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Jena Gaines</td>
                                                                              <td>Office Manager</td>
                                                                              <td>London</td>
                                                                              <td>30</td>
                                                                              <td>2008/12/19</td>
                                                                              <td>$90,560</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Quinn Flynn</td>
                                                                              <td>Support Lead</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>22</td>
                                                                              <td>2013/03/03</td>
                                                                              <td>$342,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Charde Marshall</td>
                                                                              <td>Regional Director</td>
                                                                              <td>San Francisco</td>
                                                                              <td>36</td>
                                                                              <td>2008/10/16</td>
                                                                              <td>$470,600</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Haley Kennedy</td>
                                                                              <td>Senior Marketing Designer</td>
                                                                              <td>London</td>
                                                                              <td>43</td>
                                                                              <td>2012/12/18</td>
                                                                              <td>$313,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Tatyana Fitzpatrick</td>
                                                                              <td>Regional Director</td>
                                                                              <td>London</td>
                                                                              <td>19</td>
                                                                              <td>2010/03/17</td>
                                                                              <td>$385,750</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Michael Silva</td>
                                                                              <td>Marketing Designer</td>
                                                                              <td>London</td>
                                                                              <td>66</td>
                                                                              <td>2012/11/27</td>
                                                                              <td>$198,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Paul Byrd</td>
                                                                              <td>Chief Financial Officer (CFO)</td>
                                                                              <td>New York</td>
                                                                              <td>64</td>
                                                                              <td>2010/06/09</td>
                                                                              <td>$725,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Gloria Little</td>
                                                                              <td>Systems Administrator</td>
                                                                              <td>New York</td>
                                                                              <td>59</td>
                                                                              <td>2009/04/10</td>
                                                                              <td>$237,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Bradley Greer</td>
                                                                              <td>Software Engineer</td>
                                                                              <td>London</td>
                                                                              <td>41</td>
                                                                              <td>2012/10/13</td>
                                                                              <td>$132,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Dai Rios</td>
                                                                              <td>Personnel Lead</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>35</td>
                                                                              <td>2012/09/26</td>
                                                                              <td>$217,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Jenette Caldwell</td>
                                                                              <td>Development Lead</td>
                                                                              <td>New York</td>
                                                                              <td>30</td>
                                                                              <td>2011/09/03</td>
                                                                              <td>$345,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Yuri Berry</td>
                                                                              <td>Chief Marketing Officer (CMO)</td>
                                                                              <td>New York</td>
                                                                              <td>40</td>
                                                                              <td>2009/06/25</td>
                                                                              <td>$675,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Caesar Vance</td>
                                                                              <td>Pre-Sales Support</td>
                                                                              <td>New York</td>
                                                                              <td>21</td>
                                                                              <td>2011/12/12</td>
                                                                              <td>$106,450</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Doris Wilder</td>
                                                                              <td>Sales Assistant</td>
                                                                              <td>Sidney</td>
                                                                              <td>23</td>
                                                                              <td>2010/09/20</td>
                                                                              <td>$85,600</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Angelica Ramos</td>
                                                                              <td>Chief Executive Officer (CEO)</td>
                                                                              <td>London</td>
                                                                              <td>47</td>
                                                                              <td>2009/10/09</td>
                                                                              <td>$1,200,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Gavin Joyce</td>
                                                                              <td>Developer</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>42</td>
                                                                              <td>2010/12/22</td>
                                                                              <td>$92,575</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Jennifer Chang</td>
                                                                              <td>Regional Director</td>
                                                                              <td>Singapore</td>
                                                                              <td>28</td>
                                                                              <td>2010/11/14</td>
                                                                              <td>$357,650</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Brenden Wagner</td>
                                                                              <td>Software Engineer</td>
                                                                              <td>San Francisco</td>
                                                                              <td>28</td>
                                                                              <td>2011/06/07</td>
                                                                              <td>$206,850</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Fiona Green</td>
                                                                              <td>Chief Operating Officer (COO)</td>
                                                                              <td>San Francisco</td>
                                                                              <td>48</td>
                                                                              <td>2010/03/11</td>
                                                                              <td>$850,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Shou Itou</td>
                                                                              <td>Regional Marketing</td>
                                                                              <td>Tokyo</td>
                                                                              <td>20</td>
                                                                              <td>2011/08/14</td>
                                                                              <td>$163,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Michelle House</td>
                                                                              <td>Integration Specialist</td>
                                                                              <td>Sidney</td>
                                                                              <td>37</td>
                                                                              <td>2011/06/02</td>
                                                                              <td>$95,400</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Suki Burks</td>
                                                                              <td>Developer</td>
                                                                              <td>London</td>
                                                                              <td>53</td>
                                                                              <td>2009/10/22</td>
                                                                              <td>$114,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Prescott Bartlett</td>
                                                                              <td>Technical Author</td>
                                                                              <td>London</td>
                                                                              <td>27</td>
                                                                              <td>2011/05/07</td>
                                                                              <td>$145,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Gavin Cortez</td>
                                                                              <td>Team Leader</td>
                                                                              <td>San Francisco</td>
                                                                              <td>22</td>
                                                                              <td>2008/10/26</td>
                                                                              <td>$235,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Martena Mccray</td>
                                                                              <td>Post-Sales support</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>46</td>
                                                                              <td>2011/03/09</td>
                                                                              <td>$324,050</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Unity Butler</td>
                                                                              <td>Marketing Designer</td>
                                                                              <td>San Francisco</td>
                                                                              <td>47</td>
                                                                              <td>2009/12/09</td>
                                                                              <td>$85,675</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Howard Hatfield</td>
                                                                              <td>Office Manager</td>
                                                                              <td>San Francisco</td>
                                                                              <td>51</td>
                                                                              <td>2008/12/16</td>
                                                                              <td>$164,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Hope Fuentes</td>
                                                                              <td>Secretary</td>
                                                                              <td>San Francisco</td>
                                                                              <td>41</td>
                                                                              <td>2010/02/12</td>
                                                                              <td>$109,850</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Vivian Harrell</td>
                                                                              <td>Financial Controller</td>
                                                                              <td>San Francisco</td>
                                                                              <td>62</td>
                                                                              <td>2009/02/14</td>
                                                                              <td>$452,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Timothy Mooney</td>
                                                                              <td>Office Manager</td>
                                                                              <td>London</td>
                                                                              <td>37</td>
                                                                              <td>2008/12/11</td>
                                                                              <td>$136,200</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Jackson Bradshaw</td>
                                                                              <td>Director</td>
                                                                              <td>New York</td>
                                                                              <td>65</td>
                                                                              <td>2008/09/26</td>
                                                                              <td>$645,750</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Olivia Liang</td>
                                                                              <td>Support Engineer</td>
                                                                              <td>Singapore</td>
                                                                              <td>64</td>
                                                                              <td>2011/02/03</td>
                                                                              <td>$234,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Bruno Nash</td>
                                                                              <td>Software Engineer</td>
                                                                              <td>London</td>
                                                                              <td>38</td>
                                                                              <td>2011/05/03</td>
                                                                              <td>$163,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Sakura Yamamoto</td>
                                                                              <td>Support Engineer</td>
                                                                              <td>Tokyo</td>
                                                                              <td>37</td>
                                                                              <td>2009/08/19</td>
                                                                              <td>$139,575</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Thor Walton</td>
                                                                              <td>Developer</td>
                                                                              <td>New York</td>
                                                                              <td>61</td>
                                                                              <td>2013/08/11</td>
                                                                              <td>$98,540</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Finn Camacho</td>
                                                                              <td>Support Engineer</td>
                                                                              <td>San Francisco</td>
                                                                              <td>47</td>
                                                                              <td>2009/07/07</td>
                                                                              <td>$87,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Serge Baldwin</td>
                                                                              <td>Data Coordinator</td>
                                                                              <td>Singapore</td>
                                                                              <td>64</td>
                                                                              <td>2012/04/09</td>
                                                                              <td>$138,575</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Zenaida Frank</td>
                                                                              <td>Software Engineer</td>
                                                                              <td>New York</td>
                                                                              <td>63</td>
                                                                              <td>2010/01/04</td>
                                                                              <td>$125,250</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Zorita Serrano</td>
                                                                              <td>Software Engineer</td>
                                                                              <td>San Francisco</td>
                                                                              <td>56</td>
                                                                              <td>2012/06/01</td>
                                                                              <td>$115,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Jennifer Acosta</td>
                                                                              <td>Junior Javascript Developer</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>43</td>
                                                                              <td>2013/02/01</td>
                                                                              <td>$75,650</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Cara Stevens</td>
                                                                              <td>Sales Assistant</td>
                                                                              <td>New York</td>
                                                                              <td>46</td>
                                                                              <td>2011/12/06</td>
                                                                              <td>$145,600</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Hermione Butler</td>
                                                                              <td>Regional Director</td>
                                                                              <td>London</td>
                                                                              <td>47</td>
                                                                              <td>2011/03/21</td>
                                                                              <td>$356,250</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Lael Greer</td>
                                                                              <td>Systems Administrator</td>
                                                                              <td>London</td>
                                                                              <td>21</td>
                                                                              <td>2009/02/27</td>
                                                                              <td>$103,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Jonas Alexander</td>
                                                                              <td>Developer</td>
                                                                              <td>San Francisco</td>
                                                                              <td>30</td>
                                                                              <td>2010/07/14</td>
                                                                              <td>$86,500</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Shad Decker</td>
                                                                              <td>Regional Director</td>
                                                                              <td>Edinburgh</td>
                                                                              <td>51</td>
                                                                              <td>2008/11/13</td>
                                                                              <td>$183,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Michael Bruce</td>
                                                                              <td>Javascript Developer</td>
                                                                              <td>Singapore</td>
                                                                              <td>29</td>
                                                                              <td>2011/06/27</td>
                                                                              <td>$183,000</td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td>Donna Snider</td>
                                                                              <td>Customer Support</td>
                                                                              <td>New York</td>
                                                                              <td>27</td>
                                                                              <td>2011/01/25</td>
                                                                              <td>$112,000</td>
                                                                          </tr>
                                                                          </tbody>
                                                                      </table>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                      </div>
                                                      <!-- /.container-fluid -->
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

  <?php require 'required_js.php';?>

</body>

</html>
