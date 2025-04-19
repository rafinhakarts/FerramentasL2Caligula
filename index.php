<?php error_reporting(1);

?>
<br><br>
<center><h1> Ferramentas L2 Caligula </h1></center>

<br>
<center><h3>Mudança de senha</h3>

<form action="index.php" method="POST">
<p><input type="text" name="login" placeholder="login" required></p>
<p><input type="text" name="senha" placeholder="nova senha" required></p>
<input type="number" name="1" value="1" style="display: none;">
<input type="submit" value="Enviar">
</form>


<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['1'] == 1) {
	
	include_once('config.php');
	include_once('api.php');
	
	ChangePassword($_POST['login'], base64_encode(pack('H*', sha1($_POST['senha']))));
	
	
	
}



?>


<center><h3>Procurar login via nome de personagem</h3>

<form action="index.php" method="POST">
<p><input type="text" name="login" placeholder="login" required></p>
<input type="number" name="2" value="2" style="display: none;">
<input type="submit" value="Enviar">
</form>


<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['2'] == 2) {
	
	include_once('config.php');
	include_once('api.php');
	
	echo ProcurarAccount($_POST['login']);
	
	
	
}





?>


<center><h3>Destravar todos personagens </h3>

<form action="index.php" method="POST">
<input type="number" name="3" value="3" style="display: none;">
<input type="submit" value="Destravar">
</form>


<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['3'] == 3) {
	
	include_once('config.php');
	include_once('api.php');
	
	Destravar();
	
	
	
}





?>



<center><h3>Banir personagem</h3>

<form action="index.php" method="POST">
<input type="text" name="login" placeholder="login">
<input type="number" name="4" value="4" style="display: none;">
<p></p>
<input type="submit" value="Banir">
</form>


<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['4'] == 4) {
	
	include_once('config.php');
	include_once('api.php');
	
	Banir($_POST['login']);
	
	
	
}





?>