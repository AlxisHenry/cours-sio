<?php

$lr1 = new LigueRegionale(67, "Bas-Rhin", "Strasbourg", "contact@lr67.alsace");
$leClub = new Club(1, "BIGORRE BOWLING CLUB", "ADR1", "mail1", $lr1);
remplirDonneesTest();

function remplirDonneesTest()
{
    global $leClub;

    // Création de la LigueRegionale
    $lr1 = new LigueRegionale(67, "Bas-Rhin", "Strasbourg", "contact@lr67.alsace");

    // Création du Club
    $leClub = new Club(1, "BIGORRE BOWLING CLUB", "ADR1", "mail1", $lr1);

    // Création des Participants
    $participants = [];
    $participants[] =  new Pratiquant(123, "PAGES", "Brice", "a1", "mail1@t.fr");
    $participants[] =  new Pratiquant(124, "RINGOT", "Jean", "a2", "mail2@t.fr");
    $participants[] =  new Pratiquant(125, "DERUEL", "Manon", "a3", "mail3@t.fr");
    $participants[] =  new Pratiquant(126, "FARIE", "David", "a4", "mail4@t.fr");

    // Création d'une catégorie
    $cat1 = new Categorie(1, "JeuneAdulte", 18, 30);

    // Création d'une entreprise
    $entreprise = new Entreprise(153534, "InfoStore SA", "AdrEntr", "entr@entr.fr");

    // Création de 4 licences : 2 licences + 1 mixte + 1 Jeune
    // Ajout des licences dans les clubs
    $lic1 = new Licence(13104512, 2016, $leClub, $cat1, $participants[0]);
    $leClub->ajouterLicence($lic1);
    $lic2 = new LicenceJeune(
        14106886,
        2022,
        $leClub,
        $cat1,
        $participants[1],
        "RINGOT",
        "Fabrice",
        "05 62 97 45 62"
    );
    $leClub->ajouterLicence($lic2);
    $lic3 = new LicenceMixte(13236458, 2016, $leClub, $cat1, $participants[2], $entreprise);
    $leClub->ajouterLicence($lic3);
    $lic4 = new Licence(10245896, 2016, $leClub, $cat1, $participants[3]);
    $leClub->ajouterLicence($lic4);
}

function licences()
{
    global $leClub;
    return $leClub->recupererLicences();
}

function licencesAtives()
{
    global $leClub;
    return $leClub->getLicencesActives();
}
