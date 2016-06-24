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

 
// attempt insert query execution
$sql1 = "INSERT INTO Pessoa (cpf) VALUES ('$cpf')";
if(mysqli_query($link, $sql1)){
    echo "<h1>Adicionado!</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

$sql = "INSERT INTO Cliente (cpf, senha) VALUES ('$cpf', '$senha')";
if(mysqli_query($link, $sql)){
    echo "<h1>Adicionado!</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
		

}




            ?>
            <div style="width: 50%; top : 50%; margin: 0px auto; margin: 100px 0 0 150px;">
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
              <h2> Favor complentar </h2>
			  <tr>
                        <td width = "100">CPF </td>
                        <td><input name = "cpf" type = "text" 
                           id = "cpf"></td>
                     </tr>
              
                     <tr>
                        <td width = "100">Senha</td>
                        <td><input name = "senha" type = "text" 
                           id = "senha"></td>
                     </tr>
					 <tr>
                        <td width = "100">Seu nome </td>
                        <td><input name = "cpf2" type = "text" 
                           id = "cpf2"></td>
                     </tr>
					  <tr>
                        <td width = "100">Data nascimento </td>
                        <td><input name = "cp2f" type = "text" 
                           id = "cp2f"></td>
                     </tr>
					  <tr>
                        <td width = "100">cep </td>
                        <td><input name = "c2pf" type = "text" 
                           id = "cp2f"></td>
                     </tr>
					  <tr>
                        <td width = "100">endereco </td>
                        <td><input name = "cp2f" type = "text" 
                           id = "c2pf"></td>
                     </tr>
			   <tr>
                        <td width = "100">complemento </td>
                        <td><input name = "cp2f" type = "text" 
                           id = "2cpf"></td>
                     </tr>
					  <tr>
                        <td width = "100">bairro </td>
                        <td><input name = "c2pf" type = "text" 
                           id = "cp2f"></td>
                     </tr>
					  <tr>
                        <td width = "100">cidade </td>
                        <td><input name = "cpf2" type = "text" 
                           id = "cp2f"></td>
                     </tr>
					 	  <tr>
                        <td width = "100">estado </td>
                        <td><input name = "cp2f" type = "text" 
                           id = "cpf2"></td>
                     </tr>
					 	  <tr>
                        <td width = "100">ddd </td>
                        <td><input name = "c2pf" type = "text" 
                           id = "cp2f"></td>
                     </tr>
					 	  <tr>
                        <td width = "100">telefone </td>
                        <td><input name = "cp2f" type = "text" 
                           id = "cp2f"></td>
                     </tr>
                     
                   
               
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Cadastrar!">
                        </td>
                     </tr>
                  
                  </table>
               </form>
			   <div>