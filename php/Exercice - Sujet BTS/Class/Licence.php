<?php

class Licence
{
	private int $_numero;
	private int $_annee;
	private Club $leClub;
	private Categorie $laCategorie;
	private Pratiquant $lePratiquant;

	public function __construct(int $numero, int $annee, Club $club, Categorie $categorie, Pratiquant $pratiquant) 
	{
		$this->_numero = $numero;
		$this->_annee = $annee;
		$this->_leClub = $club;
		$this->_laCategorie = $categorie;
		$this->_lePratiquant = $pratiquant;
	}

	public function getCategory(): Categorie
	{
		return $this->_laCategorie;
	}

	public function pratiquant(): Pratiquant
	{
		return $this->_lePratiquant;
	}

	public function estActive(): bool
	{
		return $this->_annee == date('Y') ? true : false;
	}

	public function getCategorie() 
	{
		return $this->_laCategorie;	
	}
	public function __toString()
	{
		return $this->_numero." ".$this->_lePratiquant->GetNom()." ".$this->_lePratiquant->GetPrenom();
	}
	
}