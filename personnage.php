<?php
class Personnage {

  private $_force;
  private $_localisation;
  private $_experience;
  private $_degats;

  private static $_texteADire = "Faisont l'amour pas la guerre, sinon je vous tue tous!";

  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;

  public function __construct($forceInitiale)
  {
    $this->setForce($forceInitiale);
  }

  // public function __construct($force,$degats)
  // {
  //   echo "<p> Voici le constructeur";
  //   $this->setForce($force);
  //   $this->setDegats($degats);
  //   $this->_experience = 1;
  // }

  public function deplacer()
  {

  }

  public function frapper(Personnage $persoAFrapper)
  {
    $persoAFrapper->_degats+=$this->_force;
  }

  public function afficherExperience()
  {
    echo $this->_experience;
  }

  public function gagnerExperience()
  {
    $this->_experience++;
  }

  public function degats()
  {
    return $this->_degats;
  }

  public function force()
  {
    return $this->_force;
  }

  public function experience()
  {
    return $this->_experience;
  }

  public static function parler()
  {
      echo self::$_texteADire;
  }

  public function setForce($force)
  {
    if(in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
    {
      $this->_force = $force;
    }
  }

  public function setExperience($experience)
  {
    if (!is_int($experience))
    {
      trigger_error('l\'experience doit etre un nombre',E_USER_WARNING);
      return;
    }
    if ($experience>100)
    {
      trigger_error('l\'experience doit être inferieure a 100',E_USER_WARNING);
      return;
    }
    $this->_experience = $experience;
  }
  public function setDegats($degats)
  {
    if (!is_int($degats))
    {
      trigger_error("les deagts doivent être des entiers",E_USER_WARNING);
      return;
    }
    $this->_degats = $degats;
  }


}


// $perso1 = new Personnage(Personnage::FORCE_MOYENNE);
// $perso2 = new Personnage(Personnage::FORCE_GRANDE);
//
// $perso1->parler();
//
// $perso1->setExperience(5);
//
// $perso2->setExperience(8);
//
// $perso1->frapper($perso2);
// $perso1->gagnerExperience();
//
// $perso2->frapper($perso1);
// $perso2->gagnerExperience();
//
//
//
// echo "<p>Le personange 1 à ",$perso1->force(), " de force, alors que le personnage 2 à ",$perso2->force(), " de force.";
// echo "<p>Le personnage 1 à ",$perso1->degats(), " de degats alors que le personnage 2 à ",$perso2->degats()," de degats.";
// echo "<p>Le personnage 1 à ",$perso1->experience(), " d'experience alors que le personnage 2 à ",$perso2->experience()," d'experience.";

 ?>
