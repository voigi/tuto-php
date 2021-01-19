<?php
$civil = $_POST['civil'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];
$adress = $_POST['adress'];
$code = $_POST['code'];
$ville = $_POST['ville'];
$email = $_POST['email'];

$tab = [$civil, $firstname, $lastname, $date, $adress, $code, $ville, $email];
$tabname = ['civilite', 'nom', 'prenom', 'date', 'adresse', 'CP', 'ville', 'mail'];
$tabcount = count($tab);

// Afficher une seule fois echo si tous les champs existent et sont non vides
if ((isset($civil) and !empty($civil))
    && (isset($firstname) and !empty($firstname))
    && (isset($lastname) and !empty($lastname))
    && (isset($date) and !empty($date))
    && (isset($adress) and !empty($adress))
    && (isset($code) and !empty($code))
    && (isset($ville) and !empty($ville))
    && (isset($email) and !empty($email))
) {
    echo '<p>' . "Bonjour" . " " . $civil . " " . $firstname . " " . $lastname . '</p>';
    echo '<p>' . "Votre date de naissance est le " . $date . '</p>';
} else {
    echo '<p>' . 'Erreur !' . '</p>';
}

// Verification des champs avec message d'erreur automatique
for ($i = 0; $i < $tabcount; $i++) {
    if (isset($tab[$i]) and empty($tab[$i])) {
        echo '<p>' . 'Veuillez renseigner le champ ' . $tabname[$i] . '</p>';
    }
}
?>