<?php

function loadInterfaces($interface)
{
  require_once($interface . '.php');
}

spl_autoload_register('loadInterfaces');

function loadClasses($class)
{
  require_once($class . '.php');
}

spl_autoload_register('loadClasses');
