<?php

class Elector extends Person
{

	private string $_votePlace;
	private bool $_vote;

 
	public function getJson()
	{
		return json_encode([
			'name' => $this->name,
			'firstname' => $this->firstname,
			'age' => $this->age,
			'votePlace' => $this->_votePlace,
			'voteStatus' => $this->_vote
		]);
	}

	public static function fromJson(string $json): Person
	{
		$person = json_decode($json);
		return (new Elector($person->name, $person->firstname, $person->age))->setVotePlace($person->votePlace)->setVoteStatus($person->voteStatus);
	}

	public function setVotePlace(string $votePlace)
	{
		$this->_votePlace = $votePlace;
		return $this;
	}

	public function setVoteStatus(bool $vote)
	{
		$this->_vote = $vote;
		return $this;
	}

	public function excludePerson(string $reason, int $time)
	{
		
	}

	public function __toString()
	{
		return "La personne a {$this->age} ans, et " . ($this->_vote ? "a voté dans le bureau situé à {$this->_votePlace}" : "n'a pas voté.");
	}

	// public function __toString()
	// {
	// 	return parent::__toString() . ' ' . $this->_vote . ' ' . $this
	// }

}