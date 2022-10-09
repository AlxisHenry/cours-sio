<?php

final class Carre extends Rectangle
{
	
	public function __construct(Points $centre, float $largeur, float $longueur)
	{
		parent::__construct($centre, $largeur, $longueur);
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