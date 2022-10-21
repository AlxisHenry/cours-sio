<?php

class Club
{
	private int $_id;
	private string $_nom;
	private string $_adresse;
	private string $_email;
	private LigueRegionale $_laLigueRegionale; // ligue à laquelle le club appartient

	/**
	 * Array<int, Licence>
	 */
	private array $_lesLicences;

	public function __construct(int $id, string $nom, string $adresse, string $email, LigueRegionale $laLigueRegionale) 
	{
		$this->_id = $id;
		$this->_nom = $nom;
		$this->_adresse = $adresse;
		$this->_email = $email;
		$this->_laLigueRegionale = $laLigueRegionale;
	}
	
	public function ajouterLicence(Licence $licence) 
	{
		$this->_lesLicences[] = $licence;
	}

	public function getLicencesActives(): array
	{
		$licencesActives = [];
		foreach ($this->_lesLicences as $licence) {
			if ($licence->estActive()) {
				$licencesActives[] = $licence;
			}
		}
		return $licencesActives;
		
	}

	public function recupererLicences(): array
	{
		return $this->_lesLicences;
	}

	public function getNom() 
	{
		return $this->_nom;
	}

}