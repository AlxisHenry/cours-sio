<?php

# AUTOLOADER
require_once('Config/autoload.php');

final class Voiture extends QuatreRoues {

	private int $_nbPneuNeige;

	public function __construct(string $couleur, int $poids, int $nbPortes = 5, int $nbPneuNeige = 0)
	{
		parent::__construct($couleur, $poids, $nbPortes);
		$this->_nbPneuNeige = $nbPneuNeige;
	}

	public function repeindre(): void
	{
	}

	public function ajouter_pneu_neige(int $nb): void
	{	
		$this->setNbPneuNeige('+', $nb);
	}

	public function enlever_pneu_neige(int $nb): void
	{
		$this->setNbPneuNeige('-', $nb);
	}

	public function getNbPneuNeige(): int
	{
		return $this->_nbPneuNeige;
	}

	public function setNbPneuNeige(string $action, int $nb): void
	{
		if ($action === "+") {
			$this->_nbPneuNeige += $nb;
		} else {
			$this->_nbPneuNeige -= $nb;
		}
	}

	public function __toString()
	{
		$parent = json_decode(parent::__toString());

		return json_encode([
			 'couleur' => $parent->couleur,
			 'poids' => $parent->poids,
			 'nbPortes' => $parent->nbPortes,
			 'nbPneuNeige' => $this->getNbPneuNeige()
		]);
		
	}

}
