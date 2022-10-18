<?php

final class Carre extends Rectangle
{
	
	public function __construct(float $largeur, float $longueur, Points $centre = new Points(0,0))
	{
		parent::__construct($largeur, $longueur, $centre);
	}

	public function __toString()
	{
		return json_encode([
			'Carre' => $this->id,
			'Centre' => "Points(x:" . $this->centre->getX() . ",y:" . $this->centre->getY() . ")",
			'Longueur' => $this->getLongueur(),
			'Surface' => $this->surface(),
			'Perimetre' => $this->perimetre() 
		]);
	}

}