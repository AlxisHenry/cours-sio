<?php

# AUTOLOADER
require_once('Config/autoload.php');

final class Moto extends DeuxRoues {

	public function __construct(string $couleur, int $poids, int $cylindree)
	{
		parent::__construct($couleur, $poids, $cylindree);

	}

	public function __toString()
	{
		$parent = json_decode(parent::__toString());

		return json_encode([
			 'couleur' => $parent->couleur,
			 'poids' => $parent->poids,
			 'nbLitresReservoir' => $this->getNbLitresReservoir()
		]);
		
	}

}
