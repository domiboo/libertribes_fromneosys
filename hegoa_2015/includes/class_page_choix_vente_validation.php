<?php
// ======================================================================
// Auteur : Donatien CELIA, Dominique Dehareng
// Licence : CeCILL v2
// ======================================================================

require "class_page.php";                                                       // - On inclut la class Page



class PageChoixVenteValidation extends Page
{

    function __construct()
    {
      // - on appele le constructeur du parent
      parent::__construct();

      // - on renseigne qq infos du parent
      parent::SetNomPage( "choix_vente_validation","Choix de vente" );

      // - on ajoute les menus utiles

    }

    // - Affichage de la page
    public function Afficher()
    {
		if(isset($_SESSION["compte"])&&!empty($_SESSION["compte"])){
      		// - gestion spécifique de la page
     		 $account_id           = $_SESSION['compte']->id;
      		$choix_vente_type     = $_POST['choix_vente_type'];


      		if ( $choix_vente_type == "bourse" )
      		{
      		  // - redirection vers la page commerce avec onglet marche
      		  header('Location: index.php?page=jeu&espace=commerce&type=bourse');
      		  exit();
      		}

      		if ( $choix_vente_type == "marche" )
      		{
      		  // - redirection vers la page commerce avec onglet marche
      		  header('Location: index.php?page=jeu&espace=commerce&type=marche');
      		  exit();
      		}

      		// - redirection vers la page choix_djun par defaut
      		header('Location: index.php?page=choix_vente');
      		exit();
      }
      else {
			header('Location: index.php?page=connexion&erreur=3');
			exit;
		}
    }// - Fin de la fonction Afficher

}// - Fin de la classe

?>