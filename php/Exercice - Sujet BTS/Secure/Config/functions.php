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
		if ($club->getNom() === urldecode($clubName)) {
			if ($callback) {
				return $club;
			} 
			return true;
		}
	}
	return false;
}