<?php
require_once ("conexao/banco.php");
require_once ("seguranca.php");

$sql = "select * from TB_TECNICOS";
$sql = mysqli_query ($con, $sql) or die ("Erro na sql!");

$sql2 = "select * from TB_PROFESSOR";
$sql2 = mysqli_query ($con, $sql2) or die ("Erro na sql2!");

$sql3 = "select * from TB_TIPO";
$sql3 = mysqli_query ($con, $sql3) or die ("Erro na sql2!");

$sql4 = "select * from TB_MATERIAL";
$sql4 = mysqli_query ($con, $sql4) or die ("Erro na sql2!");

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>SEM </title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/row.css">
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span ><?php echo $_SESSION["nome"]; ?><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right">
                   <a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Sair</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="center.php"><img class="brand-logo" alt="Chameleon admin logo" src="theme-assets/images/logo/logo.png"/>
              <h3 class="brand-text">SEM</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="center.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Central</span></a>
          </li>
          <li class=" nav-item"><a href="cadastros.php"><i class="ft-book"></i><span class="menu-title" data-i18n="">Cadastros</span></a>
          </li>
          <li class=" nav-item"><a href="consultas.php"><i class="ft-filter"></i><span class="menu-title" data-i18n="">Consultas</span></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Cadastros</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">

        <!-- Cadastros start -->
        
<section class="basic-inputs">
  <div class="row match-height"> 

      <!-- Emprestar start -->
      <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Emprestar</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                          <form method="POST" action="cadastros/material.php">
                            <p>Técnico</p>
                            <select class="form-control" id="basicSelect" name="sel_tec">
                            <?php while($dados=mysqli_fetch_array($sql)){?>
                              <option value="<?php echo $dados['TEC_CODIGO'];?>"><?php echo $dados['TEC_NOME'];?></option>
                            <?php } ?>
                            </select>  <br>

                            <p>Professor</p>
                            <select class="form-control" id="basicSelect" name="sel_prof">
                            <?php while($dados2=mysqli_fetch_array($sql2)){?>
                              <option value="<?php echo $dados2['PRO_CODIGO'];?>"><?php echo $dados2['PRO_NOME'];?></option>
                            <?php } ?>
                            </select>  <br>

                            <p>Tipo</p>
                            <select class="form-control" id="basicSelect" name="sel_tipo_mat">
                            <?php while($dados3=mysqli_fetch_array($sql3)){?>
                              <option value="<?php echo $dados3['TIP_CODIGO'];?>"><?php echo $dados3['TIP_DESCRICAO'];?></option>
                            <?php } ?>
                            </select>  <br>

                            <p>Material</p>
                            <select class="form-control" id="basicSelect" name="sel_mat">
                            <?php while($dados4=mysqli_fetch_array($sql4)){?>
                              <option value="<?php echo $dados4['MAT_CODIGO'];?>"><?php echo $dados4['MAT_DESCRICAO'];?></option>
                            <?php } ?>
                            </select>  <br>

                            <button type="submit" class="btn btn-info btn-min-width mr-1 mb-1">Emprestar</button>
                          </form>
                      </fieldset>
                  </div>
              </div>
          </div>
      </div>
       <!-- Cadastro material end -->

  </div>
</section>
<!-- Basic Inputs end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2020  &copy; Copyright <a class="text-bold-800 grey darken-2" href="http://colegiopolitec.com.br/" target="_blank">Colégio Politec</a></span>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>