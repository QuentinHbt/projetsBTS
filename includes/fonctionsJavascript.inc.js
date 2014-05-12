//fonction de choix de roles
function ChoixRole() {

    $monSelect = document.getElementById('role');//récupération de la valeur du roles
    $monDiv = document.getElementById('Formulaire_Etudiant');//formulaire qui sera modifié par la fonction

    switch ($monSelect.value) {
        case 'Etudiant'://affiche les options pour un étudiant
            $monDiv.style.visibility = 'visible';
            $monDiv.style.height = "100%";
            break;
        default://laisse les options cachées pour tout autre utilisateur
            $monDiv.style.visibility = 'hidden';
            $monDiv.style.height = "0";

    }
}

//validation création utilisateur
function valider()
{
    var ok = 1;

    if (document.getElementById('nom').value == "")
    {
        alert("Veuillez indiquer votre nom.");
        ok = 0;
        document.getElementById('nom').focus();
        return false;
    }
    if (document.getElementById('prenom').value == "")
    {
        alert("Veuillez indiquer votre prenom.");
        ok = 0;
        document.getElementById('prenom').focus();
        return false;
    }
    if (document.getElementById('tel').value == "")
    {
        alert("Veuillez indiquer votre téléphone.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if (isNaN(document.getElementById('tel').value))
    {
        alert("Votre téléphone ne comporte pas uniquement des chiffres. \nVeuillez corriger.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if ((document.getElementById('tel').value.length > 10) || (document.getElementById('tel').value.length < 10))
    {
        alert("Votre téléphone ne comporte pas 10 chiffres.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }

    if (isNaN(document.getElementById('tel').value))
    {
        alert("Votre téléphone portable ne comporte pas uniquement des chiffres. \nVeuillez corriger.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if ((document.getElementById('telP').value.length > 10) || (document.getElementById('tel').value.length < 10))
    {
        alert("Votre téléphone portable ne comporte pas 10 chiffres.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if (document.getElementById('mail').value == "")
    {
        alert("Veuillez indiquer votre adresse email.");
        ok = 0;
        document.getElementById('mail').focus();
        return false;
    }

    if ((document.getElementById('mail').value.indexOf("@", 0) < 0) || (document.getElementById('mail').value.indexOf(".", 0) < 0))
    {
        alert("Adresse email incorrecte. \nVeuillez corriger;");
        ok = 0;
        document.getElementById('mail').focus();
        return false;
    }
    if (document.getElementById('login').value == "")
    {
        alert("Veuillez indiquer votre login.");
        ok = 0;
        document.getElementById('login').focus();
        return false;
    }
    if (document.getElementById('mdp').value == "")
    {
        alert("Veuillez indiquer votre mot de passe.");
        ok = 0;
        document.getElementById('mdp').focus();
        return false;
    }
    if (document.getElementById('mdp').value.length < 7)
    {
        alert("Votre mot de passe doit comporter au moins 1 caractère.");
        ok = 0;
        document.getElementById('mdp').focus();
        return false;
    }
    if (document.getElementById('mdp2').value == "")
    {
        alert("Veuillez indiquer votre vérification de mot de passe.");
        ok = 0;
        document.getElementById('mdp2').focus();
        return false;
    }
    if (document.getElementById('mdp2').value.length < 7)
    {
        alert("Votre vérification de mots de passe doit comporter au moins 7 caractères.");
        ok = 0;
        document.getElementById('mdp2').focus();
        return false;
    }
    if ((document.getElementById('mdp').value) != (document.getElementById('mdp2').value))
    {
        alert("Vos mots de passe sont différents.");
        ok = 0;
        document.getElementById('mdp').focus();
        return false;
    }

    if (ok == 1) {

        document.submit();

    }
}

//VAlidation création entreprise
function validerE()
{
    var ok = 1;


    if (document.getElementById('nom').value == "")
    {
        alert("Veuillez indiquer le nom de l'entreprise.");
        ok = 0;
        document.getElementById('nom').focus();
        return false;
    }
    if (document.getElementById('ville').value == "")
    {
        alert("Veuillez indiquer la ville de l'entreprise.");
        ok = 0;
        document.getElementById('ville').focus();
        return false;
    }

    if (document.getElementById('ads').value == "")
    {
        alert("Veuillez indiquer l'adresse l'entreprise.");
        ok = 0;
        document.getElementById('ads').focus();
        return false;
    }
    if (document.getElementById('cp').value == "")
    {
        alert("Veuillez indiquer le code postal.");
        ok = 0;
        document.getElementById('cp').focus();
        return false;
    }
    if (isNaN(document.getElementById('cp').value))
    {
        alert("Le code postal ne comporte pas uniquement des chiffres. \nVeuillez corriger.");
        ok = 0;
        document.getElementById('cp').focus();
        return false;
    }
    if ((document.getElementById('cp').value.length > 5) || (document.getElementById('cp').value.length < 5))
    {
        alert("Le code postal ne comporte pas 5 chiffres.");
        ok = 0;
        document.getElementById('cp').focus();
        return false;
    }
    if (document.getElementById('tel').value == "")
    {
        alert("Veuillez indiquer le téléphone de l'entreprise.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if (isNaN(document.getElementById('tel').value))
    {
        alert("Le téléphone ne comporte pas uniquement des chiffres. \nVeuillez corriger.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if ((document.getElementById('tel').value.length > 10) || (document.getElementById('tel').value.length < 10))
    {
        alert("Le téléphone ne comporte pas 10 chiffres.");
        ok = 0;
        document.getElementById('tel').focus();
        return false;
    }
    if (document.getElementById('fj').value == "")
    {
        alert("Veuillez indiquer sa forme juridique.");
        ok = 0;
        document.getElementById('fj').focus();
        return false;
    }
    if (ok == 1) {

        document.submit();

    }

}


//Validation création stage
function validerS()
{
    var ok = 1;

    if (document.getElementById('dateDebut').value == "")
    {
        alert("Veuillez indiquer la date de début.");
        ok = 0;
        document.getElementById('dateDebut').focus();
        return false;
    }
    if (document.getElementById('dateFin').value == "")
    {
        alert("Veuillez indiquer la date de fin.");
        ok = 0;
        document.getElementById('dateFin').focus();
        return false;
    }
    if (document.getElementById('dateVisite').value == "")
    {
        alert("Veuillez indiquer la date de visite.");
        ok = 0;
        document.getElementById('dateVisite').focus();
        return false;
    }
    if (document.getElementById('villeStage').value == "")
    {
        alert("Veuillez indiquer la ville du stage.");
        ok = 0;
        document.getElementById('villeStage').focus();
        return false;
    }
    if (document.getElementById('classe').value == "")
    {
        alert("Veuillez indiquer la classe.");
        ok = 0;
        document.getElementById('classe').focus();
        return false;
    }
    if (document.getElementById('option').value == "")
    {
        alert("Veuillez indiquer l'option.");
        ok = 0;
        document.getElementById('option').focus();
        return false;
    }
    if (document.getElementById('choixEleve').value == "")
    {
        alert("Veuillez choisir un élève.");
        ok = 0;
        document.getElementById('choixEleve').focus();
        return false;
    }

    if (ok == 1) {

        document.submit();

    }
}

// fonction d'impression
function imprimer() {
    document.body.className += "print";
    windows.print();
    document.body.className = document.body.classNAme.replace(/\bprint\b/, "");

}

// Fonction de saisie des maitres de stage
function saisieMaitreStage() {
    $('#boutonMaitreStage').click(function() {
        var value = '';
        value = $('#entreprise').val();

        $.ajax({
            type: "GET",
            url: "../pagePhpAjax/afficheSaisiMaitreStage.inc.php",
            data: "value=" + value,
            success: function(retour) {
                $("#FormulaireAjoutMaitreStage").html('').html(retour);
            }
        });
    });
}
;