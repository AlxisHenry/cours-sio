<?php

function chargerClasse($classe)
{
  require_once($classe . '.php');
}

spl_autoload_register('chargerClasse');
