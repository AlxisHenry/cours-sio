<?php

abstract class Person 
{

	protected string $name;
	protected string $firstname;
	protected int $age;

	public function __construct(string $name, string $firstname, int $age)
	{
		$this->setName($name);
		$this->setFirstname($firstname);
		$this->setAge($age);
	}

	private function setName($name)
	{
		$this->name = $name;
	}

	private function setFirstname($firstname)
	{
		$this->firstname = $firstname;
	}

	private function setAge($age)
	{
		$this->age = $age;
	}

	abstract public function getJson();

	abstract public static function fromJson(string $json): Person;

	abstract protected function excludePerson(string $reason, int $time);

	public function __toString()
	{
		return $this->name . " " . $this->firstname . " " . $this->age;
	}

}