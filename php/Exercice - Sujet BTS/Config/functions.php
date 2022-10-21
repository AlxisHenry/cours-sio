<?php

function licences($club)
{
    return $club->recupererLicences();
}

function licencesAtives($club)
{
    return $club->getLicencesActives();
}

function checkIfClubExist(string $clubName, array $clubs, $callback): bool|Club
{
	foreach ($clubs as $club) {
		if ($club->getNom()) {
			if ($callback) {
				return $club;
			} 
			return true;
		}
	}
	return false;
}

function getClubsOfThisLigue(string $ligueCode, array $clubs, bool $callback): bool|array
{
	$ligues_clubs = [];

	foreach ($clubs as $club) {
		if ($club->ligue()->getCode() === urldecode($ligueCode)) {
			$ligues_clubs[] = $club;
		}
	}

	if ($callback) {
		return $ligues_clubs;
	} else if (count($ligues_clubs) > 0) {
		return true;
	} else if (count($ligues_clubs) < 1) {
		return false;
	}
	
}