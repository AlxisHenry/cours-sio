<?php

class Cercle extends Forme
{

	private float $rayon;

	public function __construct(Points $centre, float $rayon)
	{	
		parent::__construct($centre);
		$this->setRayon($rayon);
	}

	protected function surface(): float
	{
		return pi() * pow($this->rayon, 2);
	}

	protected function perimetre(): float
	{
		return 2 * (pi() * $this->rayon);
	}

	protected function setRayon(int $rayon)
	{
		$this->rayon = $rayon;
	}

	protected function getRayon()
	{
		return $this->rayon;
	}

	public function __toString()
	{
		return json_encode([
			'Cercle' => $this->id,
			'Centre' => parent::__toString(),
			'Rayon' => $this->getRayon(),
			'Surface' => $this->surface(),
			'Perimetre' => $this->perimetre() 
		]);
	}

}