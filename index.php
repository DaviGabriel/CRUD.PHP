<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title> CRUD - CADASTRAR</title>
</head>
<body>
<h1>CADASTRAR USUÁRIO</h1>
<?php
if(isset($_SESSION['msg']))
   echo $_SESSION['msg'];
   unset($_SESSION['msg']);//SE DER CERTO O UNSET SERVE PARA DESTRUIR A VARIAVEL

?>
<form method="POST" action="processa.php">

<label>NOME</label>
	<input type="text" name="nome" placeholder="DIGITE O SEU NOME"><br><br>

<label>EMAIL</label>
	<input type="email" name="email" placeholder="DIGITE O SEU MELHOR EMAIL"><br><br>
	
	<input type="submit" name="cadastrar" value="CADASTRAR">
</form>

</body>

</html>