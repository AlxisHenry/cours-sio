<?php

class Pratiquant
{
	private int $_id;
	private string $_nom;
	private string $_prenom;
	private string $_adresse;
	private string $_email;
	
	/**
	 * Array<int, Licence>
	 */
	private array $_lesLicences;

	public function __construct(int $id, string $nom, string $prenom, string $adresse, string $email) 
	{
		$this->_id = $id;
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_adresse = $adresse;
		$this->_email = $email;
	}

	public function ajouterLicence(Licence $licence) 
	{
		$this->lesLicences[] = $licence;
	}

	public function getNom() 
	{
		return $this->_nom;
	}

	public function getPrenom() 
	{
		return $this->_prenom;
	}
}