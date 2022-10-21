<?php

class Categorie
{
	private int $_id;
	private string $_libelle;
	private int $_ageMin;
	private int $_ageMax;

	/**
	 * Array<int, Licence>
	 */
	private array $_LesLicences; // array contenant les licences de la catégorie

	public function __construct(int $id, string $libelle, int $ageMin, int $ageMax) 
	{
		$this->_id = $id;
		$this->_libelle = $libelle;
		$this->_ageMin = $ageMin;
		$this->_ageMax = $ageMax;
	}

	public function ajouterLicence(Licence $licence) 
	{
		$this->lesLicences[] = $licence;
	}

	public function getLibelle() 
	{
		return $this->_libelle;
	}

}