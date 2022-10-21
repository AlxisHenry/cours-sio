<?php

class LigueRegionale
{

	private string $_code;
	private string $_nom;
	private string $_adresse;
	private string $_email;
	private array $_lesClubs; // array contenant les clubs de la ligue

	public function __construct(string $code, string $nom, string $adresse, string $email) 
	{
		$this->_code = $code;
		$this->_nom = $nom;
		$this->_adresse = $adresse;
		$this->_email = $email;	
	}

	public function ajouterClub(string $club) 
	{
		$this->_lesClubs[] = $club;
	}

	public function getCode() 
	{
		return $this->_code;
	}

	public function getNom() 
	{
		return $this->_nom;
	}

	public function getLesClubs() 
	{
		return $this->_lesClubs;
	}
 
}