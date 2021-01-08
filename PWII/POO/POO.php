<?php

	class ordem_de_servico{
		private $OS;
		private $data;
		private $situacao;
		private $solicitante;
		private $area;
		

		public function setOS($_o){
			$this -> OS = $_o;
		}

		public function setdata($_d){
			$this -> data = $_d;
		}

		public function setsituacao($_situ){
			$this -> situacao = $_situ;
		}

		public function setsolicitante($_soli){
			$this -> solicitante = $_soli;
		}

		public function setarea($_a){
			$this -> area = $_a;
		}

		public function getOS(){
			return $this->OS;
		}

		public function getdata(){
			return $this->data;
		}

		public function getsituacao(){
			return $this->situacao;
		}

		public function getsolicitante(){
			return $this->solicitante;
		}

		public function getarea(){
			return $this->area;
		}

		public function getOrdem_de_servico(){
			return "OS: " . $this->getOS() . "</br>" .
					 "data: " . $this->getdata() . "</br>" .
					 "situacao: " . $this->getsituacao() . "</br>" .
					 "solicitante: " . $this->getsolicitante() . "</br>" .
					 "area: " . $this->getarea() . "</br>" ;


		}


	}
  ?>