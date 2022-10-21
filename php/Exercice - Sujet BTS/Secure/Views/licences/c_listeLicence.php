<?php

include("m_listeLicence.php");

$licences = licences();
$licencesActives = licencesAtives();

include("v_listeLicence.php");
