<?php

class LicenceJeune extends Licence
{
	private string $_nomResp;
	private string $_prenomResp;
	private string $_telResp;

	public function __construct($numero, $annee, $club, $categorie,$pratiquant, string $nomResp, string $prenomResp, string $telResp)
	{
		parent::__construct($numero, $annee, $club, $categorie, $pratiquant);
		$this->_nomResp=$nomResp;
		$this->_prenomResp=$prenomResp;
		$this->_telResp=$telResp;
	}

	public function __toString()
	{
		return parent::__toString() . " Responsable légal: " . $this->_nomResp . " " . $this->_prenomResp . " " . $this->_telResp;
	}

}