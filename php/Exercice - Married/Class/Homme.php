<?php

class Homme extends Humain
{

	public function __construct(string $name, string $firstname, int $age, string $city)
	{
		parent::__construct($name, $firstname, $age, $city);
	}

}