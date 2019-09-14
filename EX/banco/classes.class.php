<?php

class operacao {
	
	public $saldo;
	public $vlr_deposito;
	public $vlr_saque;
	
	function __construct($saldo, $vlr_deposito, $vlr_saque) {
		$this->vlr_deposito = $vlr_deposito;
		$this->vlr_saque = $vlr_saque;
		$this->saldo = $saldo;
	}	
	
	function saque() {

		$saldo = ($this->saldo - $this->vlr_saque);
		return $saldo;
		
	}
	
	function vsaldo() {

		$saldo = ($this->saldo);
		return $saldo;
		
	}
	
	function deposito() {

		$saldo = ($this->saldo + $this->vlr_deposito);
		return $saldo;
		
	}
}