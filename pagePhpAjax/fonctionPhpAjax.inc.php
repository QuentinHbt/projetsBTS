<?php

function afficheClasse($chaine){
   //connexion à la base de données 
   $db=mysql_connect('mysql3.000webhost.com','a5751282_root','j0l!verie');
   mysql_select_db('a5751282_Gestage',$db);
   $result=array(); 
   $requet="SELECT * FROM CLASSE WHERE NUMFILIERE='".$chaine."' 
            GROUP BY NOMCLASSE
            ORDER BY NOMCLASSE DESC ;";//création de la requête
   
   $requetExe=mysql_query($requet);//récupération du contenu de la requête
   while($data=mysql_fetch_assoc($requetExe))
        {
         //$result[]=$data['NOMCLASSE'];
         $result[]=$data;
        }
   return $result;
        
}
?>
