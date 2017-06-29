
<?php

function chargerClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("chargerClasse");

personnage::parler();
$perso = new personnage(Personnage::FORCE_GRANDE);

 ?>
