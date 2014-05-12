<?php

/*
 * Modèle de la liste des stages
 * Définit la table où les données doivent être récupérées -> Table Stage
 * Définit la clé primaire decette table -> Num_Stage
 */
class M_ListeStages extends Modele {
	protected $table='STAGE';
	protected $clePrimaire='NUM_STAGE';
}

?>