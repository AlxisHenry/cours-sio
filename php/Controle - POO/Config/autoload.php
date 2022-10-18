<?php

spl_autoload_register(function ($class)
  {
    $filename = $class;
    $filepath = "Class";
    $file = "$filepath/$filename.php";

    if (file_exists($file)) {
      require_once($file);
      return true;
    }

    $filepath = "Interfaces";
    $file = "$filepath/$filename.php";
    
    if (file_exists($file)) {
      require_once($file);
      return true;
    }

    return false;

  }
);
