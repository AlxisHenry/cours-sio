<?php

class Rectangle extends Forme
{
	
	private float $largeur;
	private float $longueur;

	public function __construct(float $largeur, float $longueur, Points $centre = new Points(0,0))
	{
		parent::__construct($centre);
		$this->setLargeur($largeur);
		$this->setLongueur($longueur);
	}

	protected function surface(): float
	{
		return $this->largeur * $this->longueur;
	}

	protected function perimetre(): float
	{
		return 2 * ($this->largeur + $this->longueur);
	}

	protected function getLargeur() 
	{
		return $this->largeur;
	}

	protected function getLongueur()
	{
		return $this->longueur;
	}

	protected function setLargeur(int $largeur)
	{
		$this->largeur = $largeur;
	}

	protected function setLongueur(int $longueur)
	{
		$this->longueur = $longueur;
	}

	public function __toString()
	{
		return json_encode([
			'Rectangle' => $this->id,
			'Centre' => parent::__toString(),
			'Largeur' => $this->getLargeur(),
			'Longueur' => $this->getLongueur(),
			'Surface' => $this->surface(),
			'Perimetre' => $this->perimetre() 
		]);
	}

}