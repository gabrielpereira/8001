<?php
include("../../verificador_sessao.php");
verificaCredenciais("Administrador");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auto Viação S.A.</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-bus"></i> <span>Auto Viação S.A.</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem vindo,</span>
                <h2> </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section" style="margin-top:90px;">
                    <ul class="nav side-menu">
                        
                </div>
              <div class="menu_section">
                <h3>Administrar</h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-user"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cliente.php">Informações</a></li>
					  <li><a href="clienteinserir.php">Inserir Cliente</a></li>
                    </ul>
                  </li>
                  <li><a href="dashboard.php"><i class="fa fa-black-tie"></i> Motoristas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="motorista.php">Informações</a></li>
					  <li><a href="motoristainserir.php">Inserir Motorista</a></li>
                    </ul>
                  </li>
                  <li><a href="dashboard.php"><i class="fa fa-truck"></i> Veículos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="veiculos.php">Informações</a></li>
                      <li><a href="inserirveiculos.php">Inserir Veículos</a></li>
                    </ul>
                  </li>
                  <li><a href="dashboard.php"><i class="fa fa-calendar"></i> Viagens <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="viagem.php">Informações</a></li>
                      <li><a href="inserirviagens.html">Inserir Viagens</a></li>
                    </ul>
                  </li>
                  <li><a href="dashboard.php"><i class="fa fa-ticket"></i> Bilhetes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="bilhetes.php">Informações</a></li>
                      <li><a href="inserirbilhetes.html">Inserir Bilhetes</a></li>
                    </ul>
                  </li>
                  <li><a href="dashboard.php"><i class="fa fa-map-signs"></i>Trechos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="trechos.php">Informações</a></li>
                      <li><a href="inserirtrecho.php">Inserir Trechos</a></li>
                    </ul>
                  </li>
                  <li><a href="dashboard.php"><i class="fa fa-map-marker"></i>Locais <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="locais.php">Informações</a></li>
                            <li><a href="inserir_local.php">Inserir Local</a></li>
                        </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="javascript:window.location='../../logout.php'">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Encerrar Sessão ?
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
  
                    <li>
                   
                    </li>
      
                    <li><a href="../../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                   
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Adicionar Motorista<small></small></h3>
              </div>
			
				 <br>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">

                    <span class="input-group-btn">

                    </span>
                  </div>
				     <br>
			            </div>
              </div>
            </div>
			  <br>
			  <h5>

			   <?php
         if(isset($_POST['add'])) {
			 /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "8001");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$cpf = mysqli_real_escape_string($link, $_POST['cpf']);
$matricula = mysqli_real_escape_string($link, $_POST['matricula']);
$cnh = mysqli_real_escape_string($link, $_POST['cnh']);
$emissao_cnh = mysqli_real_escape_string($link, $_POST['emissao_cnh']);
$validadade_cnh = mysqli_real_escape_string($link, $_POST['validadade_cnh']);
$data_admissao = mysqli_real_escape_string($link, $_POST['data_admissao']);
 
// attempt insert query execution
$sql = "INSERT INTO motorista ( cpf, matricula, cnh, emissao_cnh, validadade_cnh, data_admissao) VALUES (`$cpf`, `$matricula`, `$cnh`, `$emissao_cnh`, `$validadade_cnh`, `$data_admissao`)";
if(mysqli_query($link, $sql)){
    echo "<h1>Adicionado!</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
		

}




            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">

                     <tr>
                        <td width = "100">CPF </td>
                        <td><input name = "cod" type = "text" 
                           id = "cod"></td>
                     </tr>
              
                     <tr>
                        <td width = "100">Matricula</td>
                        <td><input name = "nome" type = "text" 
                           id = "nome"></td>
                     </tr>
                   
                     <tr>
                        <td width = "100">cnh</td>
                        <td><input name = "cidade" type = "text" 
                           id = "cidade"></td>
                     </tr>
					  <tr>
                        <td width = "100">emissao cnh</td>
                        <td><input name = "posicao_global" type = "text" 
                           id = "posicao_global"></td>
                     </tr>
					 					  <tr>
                        <td width = "100">validadade cnh</td>
                        <td><input name = "posicao_global" type = "text" 
                           id = "posicao_global"></td>
                     </tr>
					 					  <tr>
                        <td width = "100">data admissao</td>
                        <td><input name = "posicao_global" type = "text" 
                           id = "posicao_global"></td>
                     </tr>
               
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Adicionar">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            

				</h1>

  

     



              <div class="clearfix"></div>

                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
    
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>



    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>