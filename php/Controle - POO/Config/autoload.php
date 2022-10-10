<?php

function loadInterfaces($interface)
{
  require_once('Interfaces/' . $interface . '.php');
}

spl_autoload_register('loadInterfaces');

function loadClasses($class)
{
  require_once('Class/' . $class . '.php');
}

spl_autoload_register('loadClasses');
