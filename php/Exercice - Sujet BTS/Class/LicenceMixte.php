<?php

class LicenceMixte extends Licence
{
	private Entreprise $laEntreprise;

	public function __construct($numero, $annee, $club, $categorie, $pratiquant, Entreprise $entreprise)
	{
		parent::__construct($numero, $annee, $club, $categorie, $pratiquant);
		$this->laEntreprise = $entreprise;
		$this->laEntreprise->ajouterLicenceMixte($this);
	}

} 