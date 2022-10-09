<?php

function chargerClasse($class)
{
  require_once('Class/' . $class . '.php');
}

spl_autoload_register('chargerClasse');
