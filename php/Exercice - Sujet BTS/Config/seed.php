<?php

function remplirDonneesTest($club)
{
    // Création des Participants
    $participants = [];
    $participants[] =  new Pratiquant(123, "PAGES", "Brice", "a1", "mail1@t.fr");
    $participants[] =  new Pratiquant(124, "RINGOT", "Jean", "a2", "mail2@t.fr");
    $participants[] =  new Pratiquant(125, "DERUEL", "Manon", "a3", "mail3@t.fr");
    $participants[] =  new Pratiquant(126, "FARIE", "David", "a4", "mail4@t.fr");

    // Création d'une catégorie
    $categories = [];
    $categoriesName = [
        'JeuneAdulte' => [
            'min' => 18,
            'max' => 25
        ], 
        'Poussin' => [
            'min' => 6,
            'max' => 8
        ],
        'Junior' => [
            'min' => 12,
            'max' => 18
        ],
        'Benjamin' => [
            'min' => 8,
            'max' => 12
        ],
    ];
    $i = 0;

    foreach ($categoriesName as $categoryName => $age) {
        $i++;
        $categories[] = new Categorie($i, $categoryName, $age['min'], $age['max']);
    }

    // Création d'une entreprise
    $entreprise = new Entreprise(153534, "InfoStore SA", "AdrEntr", "entr@entr.fr");

    // Création de 4 licences : 2 licences + 1 mixte + 1 Jeune
    // Ajout des licences dans les clubs
    $lic1 = new Licence(13104512, 2016, $club, $categories[rand(1, count($categories) - 1)], $participants[0]);
    $club->ajouterLicence($lic1);
    $lic2 = new LicenceJeune(
        14106886,
        2022,
        $club,
        $categories[rand(1, count($categories) - 1)],
        $participants[1],
        "RINGOT",
        "Fabrice",
        "05 62 97 45 62"
    );
    $club->ajouterLicence($lic2);
    $lic3 = new LicenceMixte(13236458, 2016, $club, $categories[rand(1, count($categories) - 1)], $participants[2], $entreprise);
    $club->ajouterLicence($lic3);
    $lic4 = new Licence(10245896, 2016, $club, $categories[rand(1, count($categories) - 1)], $participants[3]);
    $club->ajouterLicence($lic4);

    return $club;
}