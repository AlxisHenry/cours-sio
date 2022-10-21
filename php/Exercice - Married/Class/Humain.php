<?php

class Humain
{

	protected string $name;
	protected string $firstname;
	protected int $age;
	protected string $city;
	protected ?Humain $partner;

	/**
	 * Magics functions
	 */

	public function __construct(string $name, string $firstname, int $age, string $city)
	{
		$this->name = $name;
		$this->firstname = $firstname;
		$this->age = $age;
		$this->city = $city;
	}

	public function __destruct()
	{
		echo "Destruction de l'objet";
	}

	public function __toString()
	{
		return $this->name . " " . $this->firstname . " " . $this->age . " " . $this->city;
	}

	/**
	 * Custom functions
	 */

	public function toMarry(Humain $humain)
	{
		$this->setPartner($humain);
	}

	public function divorce()
	{
		$this->partner = null;
	}

	public function aboutPartner()
	{
		return $this->getPartner()?->__toString() ?? 'aucun';
	}

	/**
	 * Getters
	 */

	protected function getName()
	{
		return $this->name;
	}

	protected function getFirstname()
	{
		return $this->firstname;
	}

	protected function getAge()
	{
		return $this->age;
	}

	protected function getCity()
	{
		return $this->city;
	}

	protected function getPartner()
	{
		return $this->partner;
	}

	/**
	 * Setters
	 */

	protected function setName(string $name)
	{
		$this->name = $name;
	}

	protected function setFirstname(string $firstname)
	{
		$this->firstname = $firstname;
	}

	protected function setAge(int $age)
	{
		$this->age = $age;
	}

	protected function setCity(string $city)
	{
		$this->city = $city;
	}

	protected function setPartner(Humain $partner)
	{
		$this->partner = $partner;
	}

}