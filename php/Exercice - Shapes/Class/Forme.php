<?php

abstract class Forme
{

	protected Points $centre;
	protected int $id = 1;
	protected static int $compteur = 1;

	public function __construct(Points $centre)
	{
		$this->centre = $centre;
		$this->count();
		$this->setId();
	}

	private function setId()
	{
		$this->id = self::$compteur;
	}

	private function count()
	{
		self::$compteur++;
	}

	abstract protected function surface();

	abstract protected function perimetre();

	public function points()
	{
		echo $this->centre;
	}

	public function bouger(float $dx, float $dy) {
		$this->centre->bouger($dx, $dy);
	}

	public function __toString()
	{
		return "Points(x:" . $this->centre->getX() . ",y:" . $this->centre->getY() . ")";
	}

}
