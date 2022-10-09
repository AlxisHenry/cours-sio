<?php

class Client extends Person
{

	private string $_address;

	// public function __construct($name, $firstname, $age, $address)
	// {
	// 	parent::__construct($name, $firstname, $age);
	// 	$this->_address = $address;
	// }

	public function getJson()
	{
		return json_encode([
			'name' => $this->name,
			'firstname' => $this->firstname,
			'age' => $this->age,
			'address' => $this->_address
		]);
	}

	public static function fromJson(string $json): Person
	{
		$person = json_decode($json);
		return (new Client($person['name'], $person['fristname'], $person['age']))->setCoord($person['address']);
	}


	public function setCoord(string $address)
	{
		$this->_address = $address;
		return $this;
	}

	public function excludePerson(string $reason, int $time)
	{
		
	}

	public function __toString()
	{
		return "L'utilisateur a {$this->age} ans et son adresse est {$this->_address}";
	}

	// public function __toString()
	// {
	// 	return parent::__toString() . ' ' . $this->_address;
	// }

}