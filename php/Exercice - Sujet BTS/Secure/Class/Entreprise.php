<?php

class Entreprise
{
	private int $_id;
	private string $_nom;
	private string $_adresse;
	private string $_email;

	/**
	 * Array<int, Licence>
	 */
	private array $_lesLicencesMixtes;

	public function __construct(int $id, string $nom, string $adresse, string $email) 
	{
		$this->_id = $id;
		$this->_nom = $nom;
		$this->_adresse = $adresse;
		$this->_email = $email;
	}

	public function ajouterLicenceMixte(Licence $licence) 
	{
		$this->_lesLicencesMixtes[] = $licence;
	}

	public function getNom() 
	{
		return $this->_nom;
	}

} 