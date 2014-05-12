<!-- VARIABLES NECESSAIRES -->
<!-- Constantes globales  de includes/version.inc.php -->
<!-- $this->loginAuthentification : login si authentification ok -->
<!-- $this->listeCateg : tableau de <Enregistrement> avec les champs 'cat_code' et 'cat_libelle' -->
<ul class="menugauche">
    <p><b>Menu</b></p><p class="note">
    <li><a href="./index.php" >Accueil</a></li>
    <hr/>
    <?php
    if (isset($this->loginAuthentification)){  
        echo "<h6>".$this->loginAuthentification."</h6>";
        //menu de gauche présent pour tout les utilisateurs
        echo "<li><a href=\".?controleur=accueil&action=seDeconnecter\">Se d&eacute;connecter</a></li>";
        echo "<li><a href=\".?controleur=utilisateur&action=coordonees\">Mes informations</a></li>";
        echo "<li><a href=\".?controleur=utilisateur&action=afficherEntreprise\">Afficher les entreprises prenant des stagiaires</a></li>";
        
    }else{
        echo "<li><a href=\".?controleur=accueil&action=seConnecter\">Se connecter</a></li>";
    }  
        if (isset($this->loginAuthentification) && MaSession::get('role')==1){ 
            //ajout menu de gauche pour l'administrateur
    echo "<li><a href=\".?controleur=administrateur&action=creerUtilisateur\">Cr&eacute;er un utilisateur</a></li>";
    echo "<li><a href=\".?controleur=administrateur&action=afficherEleve\">Afficher tous les élèves</a></li>";
    
    
    }
        if(isset($this->loginAuthentification) && MaSession::get('role')!=2){
            //ajout menu de gauche pour les utilisateurs autre que secrétaire
        echo "<li><a href=\".?controleur=utilisateur&action=creerEntreprise\">Ajouter une entreprise à la BDD</a></li>";
        echo "<li><a href=\".?controleur=utilisateur&action=MajEntreprise\">M.A.J entreprise</a></li>";
        echo "<li><a href=\".?controleur=utilisateur&action=ajoutStage\">Ajouter un stage</a></li>";
        }

        if(isset($this->loginAuthentification) && MaSession::get('role')==1 || MaSession::get('role')==2 || MaSession::get('role')==3){
            //ajout menu de gauche pour les utilisateurs autre que secrétaire
        echo "<li><a href=\".?controleur=utilisateur&action=afficheStage\">Afficher les stages</a></li>";
        }
    
    
    ?>
</ul>
