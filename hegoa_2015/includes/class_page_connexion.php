<?php
// ======================================================================
// Auteur : Donatien CELIA
// Licence : CeCILL v2
// ======================================================================

require "class_page.php";                                                       // - On inclut la class Page


class PageConnexion extends Page
{

    function __construct()
    {
    	// on génère le token de protection du formulaire de connexion
		$chaine = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQSRTUVWXYZ0123456789?+@#";
		$chaineshuffled = str_shuffle(str_shuffle($chaine));
		$_SESSION["connexion_token"]=substr($chaineshuffled,0,32);
      // - on appele le constructeur du parent
      parent::__construct();

      // - on renseigne qq infos du parent
      parent::SetNomPage( "connexion" );
      parent::SetAffichageHeader( -1 );
      parent::SetAffichageMenu( 1 );
      parent::SetAffichageFooter( 0 );

      $this->AjouterCSS("page_connexion.css");

      // - on ajoute les contenus utiles
      $this->AjouterContenu("contenu", "contenus/page_connexion.php");

      // - on ajoute les menus utiles
      //$this->AjouterMenu("accueil","Accueil");
    }

    // - Affichage de la page
    public function Afficher()
    {
      // - On initialise la session
      unset($_SESSION['account_id']);
      unset($_SESSION['account_mail']);

      parent::Afficher();

    }// - Fin de la fonction Afficher

}// - Fin de la classe

?>