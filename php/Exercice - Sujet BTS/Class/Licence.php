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

	public function pratiquant(): Pratiquant
	{
		return $this->_lePratiquant;
	}

	public function getCategorie() 
	{
		return $this->laCategorie;	
	}
	public function getDescription() 
	{
		return $this->numero." ".$this->lePratiquant->GetNom()." ".$this->lePratiquant->GetPrenom();
	}
	
}