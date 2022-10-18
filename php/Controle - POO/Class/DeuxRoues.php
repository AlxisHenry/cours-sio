<?php

# AUTOLOADER
require_once('Config/autoload.php');

class DeuxRoues extends Vehicule {

	private int $_cylindree;

	public function __construct(string $couleur, int $poids, int $cylindree)
	{
		parent::__construct($couleur, $poids);
		$this->_cylindree = $cylindree;
	}

	public function mettre_essence(int $litre): void
	{	

	}

	public function getCylindree(): int
	{
		return $this->_cylindree;
	}

	public function __toString()
	{
		$parent = json_decode(parent::__toString());

		return json_encode([
			 'couleur' => $parent->couleur,
			 'poids' => $parent->poids,
			 'cylindree' => $this->getCylindree()
		]);
	}

}
