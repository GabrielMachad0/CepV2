<?php
$cep = $_POST['texto2'];
$str = @file_get_contents('https://viacep.com.br/ws/'.$cep.'/json/');
$arrCep = json_decode($str);
