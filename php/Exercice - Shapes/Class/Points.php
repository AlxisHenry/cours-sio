<?php

class Points
{
	
	private float $x;
	private float $y;

	public function __construct(float $x, float $y)
	{
		$this->x($x);
		$this->y($y);
	}

	public function bouger(float $dx, float $dy)
	{
		$this->x($this->x += $dx);
		$this->y($this->y += $dy);
	}

	public function x(float $x)
	{
		$this->x = $x;
	}

	private function y(float $y)
	{
		$this->y = $y;
	}

	public function getX() {
		return $this->x;
	}
	
	public function getY() {
		return $this->y;
	}
	
	public function __toString()
	{
		return json_encode([
			'Points' => [
				'x' => $this->getX(),
				'y' => $this->getY()
			]
		]);
	}

}