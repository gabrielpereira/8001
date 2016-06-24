<?php

class Ano {
    public $id;
    public $Janeiro;
    public $Fevereiro;
    public $Marco;
    public $Abril;
	public $Maio;
	public $Junho;
	public $Julho;
	public $Agosto;
	public $Setembro;
	public $Outubro;
	public $Novembro;
	public $Dezembro;

	
    public function preenchePorArray($row){
        $this->id = $row["id"];
        $this->Janeiro = $row["Janeiro"];
		$this->Fevereiro = $row["Fevereiro"];
		$this->Marco = $row["Marco"];
		$this->Abril = $row["Abril"];
		$this->Maio = $row["Maio"];
		$this->Junho = $row["Junho"];
		$this->Julho = $row["Julho"];
		$this->Agosto = $row["Agosto"];
		$this->Setembro = $row["Setembro"];
		$this->Outubro = $row["Outubro"];
		$this->Novembro = $row["Novembro"];
		$this->Dezembro = $row["Dezembro"];

}
}
