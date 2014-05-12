<?php
        //Connexion à la base de données 
        $db=mysql_connect('mysql3.000webhost.com','a5751282_root','j0l!verie');
	mysql_select_db('a5751282_Gestage',$db);
        //Instantiation des variables
        $classe='';
        $option='';
        //Récupération des variables envoyées par jquery
        if(isset($_GET['value1'])){
        $classe=$_GET['value1'];
            }
        if(isset($_GET['value2'])){
        $option=$_GET['value2'];
            }
        //Requête pour récupérer le contenu du tableau
             $requet="SELECT P.NOM, P.PRENOM, O.NOM_ORGANISATION, S.VILLE, S.DATEDEBUT, S.DATEFIN, S.DATEVISITESTAGE
                        FROM STAGE S
                        INNER JOIN PERSONNE P ON S.IDETUDIANT = P.IDPERSONNE
                        INNER JOIN ORGANISATION O ON S.IDORGANISATION = O.IDORGANISATION
                            WHERE P.ETUDES='".$classe."' AND P.IDSPECIALITE='".$option."' ;";
             $requetExe=mysql_query($requet); 
             
            // création du contenu du tableau :
            echo'<TABLE BORDER="1" CELLPADDING="8">';
            echo'<tr><th>Nom </th><th>Prenom </th><th>Organisation </th><th>Ville </th><th>Date début </th><th>Date fin </th><th>Date visite </th></tr>';
            While ($data=mysql_fetch_assoc($requetExe))  { //boucle de ligne du tableau
                      
                   echo'<tr><th>'.$data['NOM'].'</th><th>'.$data['PRENOM'].'</th><th>'.$data['NOM_ORGANISATION'].'</th><th>'.$data['VILLE'].'</th>
                       <th>'.$data['DATEDEBUT'].'</th><th>'.$data['DATEFIN'].'</th><th>'.$data['DATEVISITESTAGE'].'</th></tr>';            
            }
            echo'</TABLE>';
        ?>
