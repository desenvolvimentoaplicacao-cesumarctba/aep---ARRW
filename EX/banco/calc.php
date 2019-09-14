<?php

	require "classes.class.php";
	
	$operacao = $_POST['opera'];
	$vlr_deposito = $_POST['deposito'];
	$vlr_saque = $_POST['sacar'];
	$saldo = $_POST['saldo'];
	
	
	switch ($operacao) {
    case "sacar":
	
		$h = new operacao ($saldo, $vlr_deposito, $vlr_saque);
		echo "saque de ". $vlr_saque ." feito com sucesso";
		echo "<br>";
		echo "seu saldo é de ". $h->saque();
		
		
        break;
    case "saldo":
	
        $h = new operacao ($saldo, $vlr_deposito, $vlr_saque);
		echo "seu saldo é de ". $h->vsaldo();
        
		break;
    case "depositar":
	
		$h = new operacao ($saldo, $vlr_deposito, $vlr_saque);
		echo "valor depositado de ". $vlr_deposito ." feito com sucesso";
		echo "<br>";
		echo "seu saldo é de ". $h->deposito();
		
        break;
		
	default:
       echo " deu ruim";
} 