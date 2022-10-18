<?php

# AUTOLOADER
require_once('Config/autoload.php');

abstract class Vehicule {

	private string $_couleur;
	private int $_poids;
	private int $_nbLitresReservoir = 0;

	public function __construct(string $couleur, int $poids) {
		$this->_couleur = $couleur;
		$this->_poids = $poids;
	}

	public function rouler(): void
	{
		echo "Le véhicule roule...";
	}
	
	public function mettre_essence(int $litre): void
	{
		$this->_nbLitresReservoir += $litre;
		$this->setPoids($litre);
	}

	public function ajouter_personne(int $poids): void 
	{
		$this->_poids += $poids;
	}

	public function getCouleur(): string 
	{
		return $this->_couleur;
	}

	public function getPoids(): int 
	{
		return $this->_poids;
	}

	public function setPoids(int $poids): void
	{
		$this->_poids += $poids;
	}

	public function setCouleur(string $couleur): void
	{
		$this->_couleur = $couleur;
	}

	public function getNbLitresReservoir(): int
	{
		return $this->_nbLitresReservoir;
	}

	public function setNbLitresReservoir(int $litres): void
	{
		$this->_nbLitresReservoir += $litres;
	}

	public function __toString()
	{
		return json_encode([
			'couleur' => $this->getCouleur(),
			'poids' => $this->getPoids()
		]);
	}

}
