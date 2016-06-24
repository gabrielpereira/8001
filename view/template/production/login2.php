
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
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

      <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
      <script src="js/login2.js"></script>

      <script>
          //$(function(){$(".alert-info").fadeIn();});
      </script>

      <style>
          .notification-container{
              width:350px;
              height:35px;
              margin-bottom:5px;
          }
          .alert{
              margin:0 !important;
              padding: 7px !important;
              display: none;
          }
          .alert-info{
                background-color: #d9edf7 !important;
                border-color: #bce8f1 !important;
                color: #73879C !important;

          }
          p.change_link{
              margin: 0;
          }
      </style>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
             <form method = "post" action = "<?php $_PHP_SELF ?>">
              <h1>Formulário de Login</h1>
              <div>
                <input id="cpf" name="cpf"  type="text" class="form-control" placeholder="CPF" required="" />
              </div>
              <div>
                <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha" required="" />
              </div>
              <div>
			  
			  <input name = "add" type = "submit" id = "add" value = "Entrar">
              
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
$senha = mysqli_real_escape_string($link, $_POST['senha']);

 
$sql = "SELECT '$senha' FROM Cliente WHERE CPF = '$cpf'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_row($result);
if ($row[0] === $senha){
        header('Location: /view/template/production/dashboard2.php');

} else {
    echo "Senha Errada!";       
}
 
// close connection
mysqli_close($link);
		

}
?>
</form>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                  <div class="notification-container">
            
                  </div>
           Novo no site?
                  <a href="login3.php" class="to_register"> Crie sua conta </a>
                </p>
      
                  <br>
                <div>

                </div>
              </div>
            </form>
          </section>
        </div>

       
       
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>