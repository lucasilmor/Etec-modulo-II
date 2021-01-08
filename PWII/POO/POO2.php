<?php

class Equipamento{
	private $equipamentos;
	private $justificativa;
	private $manutencao;
	private $observacoes;

	public function setequipamentos($_equip){
		$this-> equipamentos = $_equip;
	}
	public function setjustificativa($_just){
		$this-> justificativa = $_just;
	}
	public function setmanutencao($_manu){
		$this-> manutencao = $_manu;
	}
	public function setobservacoes($_obs){
		$this-> observacoes = $_obs;
	}

	public function getequipamentos(){
		return $this->equipamentos; 
	}

	public function getjustificativa(){
		return $this->justificativa; 
	}

	public function getmanutencao(){
		return $this->manutencao; 
	}

	public function getobservacoes(){
		return $this->observacoes; 
	}

	public function getEquipamento(){
		return  "equipamentos: " . $this->getequipamentos() . "</br>" .
				"justificativa: " . $this->getjustificativa() . "</br>" .
				"manutencao: " . $this->getmanutencao() . "</br>" .
				"observacoes: " . $this->getobservacoes() . "</br>";
	}

}

  ?>