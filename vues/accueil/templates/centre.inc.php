<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<h3>Bienvenue sur le site de gestion des stages Gestages</h3>
<?php
if (isset($this->message)) {
    echo "<strong>" . $this->message . "</strong>";
}
?>