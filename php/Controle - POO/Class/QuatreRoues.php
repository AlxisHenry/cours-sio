<?php

# AUTOLOADER

require_once('Config/autoload.php');

class QuatreRoues extends Vehicule {

	protected int $_nbPortes;

	public function __construct(string $couleur, int $poids, int $nbPortes = 5)
	{
		parent::__construct($couleur, $poids);
		$this->_nbPortes = $nbPortes;
	}
	
	public function getNbPortes(): int
	{
		return $this->_nbPortes;
	}

	public function __toString()
	{
		$parent = json_decode(parent::__toString());

		return json_encode([
			 'couleur' => $parent->couleur,
			 'poids' => $parent->poids,
			 'nbPortes' => $this->getNbPortes()
		]);
	}

}
