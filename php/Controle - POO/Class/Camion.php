<?php

# AUTOLOADER
require_once('Config/autoload.php');

final class Camion extends QuatreRoues {

	private int $_longueur_remorque_actuelle = 0;
	private int $_longueur;

	public function __construct(string $couleur, int $poids, int $longueur, int $nbPortes = 2)
	{
		parent::__construct($couleur, $poids, $nbPortes);
		$this->_longueur = $longueur;
	}

	public function ajouter_remorque($longueur): void
	{
		$this->_longueur_remorque_actuelle = $longueur;
		$this->setLongueur('+', $longueur);
	}

	public function retirer_remorque(): void
	{
		$this->setLongueur('-', $this->_longueur_remorque_actuelle);
	}

	public function setLongueur(string $action, int $m): void
	{
		if ($action === "+") {
			$this->_longueur += $m;
		} else {
			$this->_longueur -= $m;
		}
	}

	public function getLongueur(): int
	{
		return $this->_longueur;
	}

	public function getRemorqueLongueur(): int
	{
		return $this->_longueur_remorque_actuelle;
	}

	public function __toString()
	{
		$parent = json_decode(parent::__toString());

		return json_encode([
			 'couleur' => $parent->couleur,
			 'poids' => $parent->poids,
			 'nbPortes' => $parent->nbPortes,
			 'longueur' => $this->getLongueur()
		]);
		
	}

}
