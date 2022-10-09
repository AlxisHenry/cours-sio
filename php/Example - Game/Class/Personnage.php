<?php


class Personnage
{
  private $_force = 10;        // La force du personnage
  private $_experience = 50;   // Son expérience
  private $_degats = 0;        // Ses dégâts
  private $_nom;
  private static $activated = 0;
  private static $created = 0;

  public static function static_parler()
  {
    echo 'Je vais tous vous tuer !';
  }

  public function __construct(string $nom, int $force, int $experience)
  {
    echo ('<br>Constructeur<br>');
    $this->_nom = $nom;
    echo "Voici le constructeur de $this->_nom";
    $this->setForce($force);
    $this->setExperience($experience);
    $this->degats = 0;
    echo ('<br>fin Constructeur<br>');
    self::$created++;
    self::$activated++;
  }

  public function parler()
  {
    echo 'Je suis un objet de classe Personnage';
  }
  public function afficherExperience()
  {
    echo $this->_experience;
  }

  public function gagnerExperience()
  {
    $this->_experience++;
  }

  public function frapper(Personnage $ennemi)
  {
    // on inflige des dégâts à l'ennemi
    $ennemi->_degats += $this->_force;
  }

  public function experience()
  {
    return $this->_experience;
  }

  public function degats()
  {
    return $this->_degats;
  }

  public function force()
  {
    return $this->_force;
  }

  public function setForce(int $force)
  {
    // On vérifie bien qu'on ne souhaite pas assigner une valeur non comprise entre 0 et 100.
    if ($force > 100 || $force < 0) {
      trigger_error('La force d\'un personnage doit être entre 0 et 100', E_USER_WARNING);
      return;
    }

    $this->_force = $force;
  }

  // Mutateur chargé de modifier l'attribut $_experience.
  public function setExperience(int $experience)
  {

    // On vérifie bien qu'on ne souhaite pas assigner une valeur non comprise entre 0 et 100.
    if ($experience > 100 || $experience < 0) {
      trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
      return;
    }

    $this->_experience = $experience;
  }

  public static function getCreatedPersonnages()
  {
    return self::$created;
  }

  public static function getActivatedPersonnages()
  {
    return self::$activated;
  }

  public function __destruct() { // destructeur
    self::$activated--;
  }

}
