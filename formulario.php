<?php include ("cep.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Verificar cep</title>
</head>
<body>
	<h1>Testar cep</h1>
	<p>Tenha informações como: Logradouro, bairro e UF </p>
<form method="post">
	<input type="text" name="texto2">
	<input type="submit" name="" value="Verificar">
</form>

<?php
if ($arrCep != null) {
echo "<p><b>Cep: </b>   ". $arrCep->cep ."   </p>";
echo "<p><b>Logradouro:</b>   ". $arrCep->logradouro ."  </p>";
echo "<p><b>Bairro: </b>   ". $arrCep->bairro ."   </p>";
echo "<p><b>Uf: </b>   ". $arrCep->uf ."   </p>";
$estado = $arrCep->uf;
}else{ ?>
		<br><?= "Digite um cep valido!" ?>
<?php
}
?>

</body>
</html>
