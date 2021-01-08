<?php

class dados_do_cliente{
	private $nome;
	private $telefone;
	private $endereco;
	private $bairro;
	private $cidade;
	private $UF;
	private $CEP;

	public function setnome($_n){
		$this->nome =$_n;
	}

	public function settelefone($_tel){
		$this->telefone =$_tel;
	}

	public function setendereco($_end){
		$this->endereco =$_end;
	}

	public function setbairro($_bai){
		$this->bairro =$_n;
	}

	public function setcidade($_cida){
		$this->cidade =$_cida;
	}

	public function setUF($_uf){
		$this->UF =$_uf;
	}

	public function setCEP($_cep){
		$this->CEP =$_cep;
	}

	public function getnome(){
			return $this->nome;
	}
		public function gettelefone(){
			return $this->telefone;
	}
		public function getendereco(){
			return $this->endereco;
	}
		public function getbairro(){
			return $this->bairro;
	}
		public function getcidade(){
			return $this->cidade;
	}
		public function getUF(){
			return $this->UF;
	}
		public function getCEP(){
			return $this->CEP;
	}
	
	public function getdados_do_cliente(){
		return  "nome: " . $this->getnome() . "</br>" .
				"telefone: " . $this->gettelefone() . "</br>" .
				"endereco: " . $this->getendereco() . "</br>" .
				"bairro: " . $this->getbairro() . "</br>" .
				"cidade: " . $this->getcidade() . "</br>" .
				"UF: " . $this->getUF() . "</br>" .
				"CEP: " . $this->getCEP() . "</br>" ;
	}


}
  ?>