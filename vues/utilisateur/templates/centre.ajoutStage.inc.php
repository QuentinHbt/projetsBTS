<script language="JavaScript" type="text/javascript" src="../includes/fonctionsJavascript.inc.js"> </script>
<script language="JavaScript" type="text/javascript" src="../includes/jquery.js"> </script>
<script language="JavaScript" type="text/javascript" src="../includes/ajax.inc.js"> </script>


<form method="post" action=".?controleur=utilisateur&action=validationcreerstage">    
    <h1>Ajouter un stage</h1>
    <fieldset>
    <legend>Informations Etudiant</legend>
       
        <label for="etudes">Etudes :</label>
        
        <select type="select" name="etudes" id="etudes">
            <option value="" Selected></option>
        <?php 
            $tab1=array();//variable de stockage des id filière
            $cpt1=0;
            // création du contenu du select :
            foreach ($this->lesFormations as $formations) { 
                   $tab1[$cpt1]=$formations->NUMFILIERE;     
                   echo'<option value="'.$tab1[$cpt1].'">'.$formations->LIBELLEFILIERE.'</option>';   
                   $cpt1=$cpt1+1;   
            } 
        ?>
        </select>

        <div id="FormulaireClasse">
        <!-- div qui contient le select des classes  -->    
        </div>

        <div id="FormulaireOption">
        <!-- div qui contient le select des options  -->   
        </div>
        
        <div id="FormulaireEtudiantClasseStage">
        <!-- div qui contient le select des élèves  -->    
        </div>
        
        <input id="boutonAffichageEleveStage" type='button' value="Afficher les élèves" ></input>
        
    </fieldset>
    
    <fieldset>
        <legend>Informations Stage</legend>
        <div id="FormulaireEntrepriseStage">
        <!-- div qui contient le select des entreprises  -->    
        </div>
        
        <div id="FormulaireMaitreStage">
        <!-- div qui contient le select des maîtres de stage  -->
        </div>
        
        <div id="FormulaireAjoutMaitreStage">
        <!-- div qui contient le select des maîtres de stage  -->
        </div>        

        <div id="FormulaireStage">
        <!-- div qui contient les éléments d'info du stage  -->
        </div>
        
    </fieldset>
    
     
            <fieldset>
        <input type="submit" value="Sauvegarder" OnClick="return validerS()"/>
        <input type="button" value="Retour" onclick="history.go(-1)">
            </fieldset>
        
</form>
<?php
//affichage de message pour la validation ou non de la création de stage 
if (isset($this->message)) {
    echo "<strong>".$this->message."</strong>";
}
?>