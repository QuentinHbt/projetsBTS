<script language="JavaScript" type="text/javascript" src="../includes/fonctionsJavascript.inc.js"> </script>
<script language="JavaScript" type="text/javascript" src="../includes/jquery.js"> </script>
<script language="JavaScript" type="text/javascript" src="../includes/ajax.inc.js"> </script>
<form method="post"  name="afficher">
  <h1>Liste des stages</h1>
    <fieldset> 
    
        <legend>Choisir la classe à afficher</legend>
       
        
        <label for="etudes">Etudes :</label>
        
        <select  type="select" name="etudes" id="etudes">
            <option value="" Selected></option>
        <?php 
                   $tab1=array();//variable de stockage des id filière
                   $cpt1=0; // variable qui compte le nombre de formations
            // création du contenu du select :
            foreach ($this->lesFormations as $formations) { 
                   $tab1[$cpt1]=$formations->NUMFILIERE;     
                   echo'<option value="'.$tab1[$cpt1].'">'.$formations->LIBELLEFILIERE.'</option>';   
                   $cpt1=$cpt1+1;
                   
            }
            
        ?>
        </select>
	
        
        
            <div id="FormulaireClasse">
            <!-- div qui contiendra le select de classe en lien à la fonction affichageClasse -->    
            </div>
        
        
            <div id="FormulaireOption">
            <!-- div qui contiendra le select d'option en lien à la fonction affichageOption -->   
            </div>
        
            <input id="boutonAffichageStage" type='button' value="Afficher les stages" ></input>
            
</fieldset>
    
<fieldset>
    <table>
            <div id="FormulaireAfficheStage">
            <!-- div qui contiendra le tableau des eleves -->    
            </div>       
    </table>
    
</fieldset>
</form>
