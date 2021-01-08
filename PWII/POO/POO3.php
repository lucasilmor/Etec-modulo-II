<?php

class Servicos{
	private $hora_inicio;
	private $hora_termino;
	private $atividade;
	private $tecnico;
	private $tempo_total;

	public function sethora_inicio($_ini){
		$this-> hora_inicio = $_ini;
	}
	public function sethora_termino($_ter){
		$this-> hora_termino = $_ter;
	}
	public function setatividade($_ati){
		$this-> atividade = $_ati;
	}
	public function settecnico($_tec){
		$this-> tecnico = $_tec;
	}
	public function settempo_total($_tot){
		$this-> tempo_total = $_tot;
	}
	public function gethora_inicio(){
			return $this->hora_inicio;
	}
	public function gethora_termino(){
			return $this->hora_termino;
	}
	public function getatividade(){
			return $this->atividade;
	}
	public function gettecnico(){
			return $this->tecnico;
	}
	public function gettempo_total(){
			return $this->tempo_total;
	}
	public function getServicos(){
			return   "Hora inicio: " . $this->gethora_inicio() . "</br>" .
					 "Hora término: " . $this->gethora_termino() . "</br>" .
					 "Atividade: " . $this->getatividade() . "</br>" .
					 "Técnico: " . $this->gettecnico() . "</br>" .
					 "Tempo Total: " . $this->gettempo_total() . "</br>" ;


		}

}
  ?>