<?php



if(!empty($_POST))
{
    $errors = array();

    if(empty($_POST['nom']))
    {
        $errors['nom1'] = "Le champ du nom ne peut pas-être vide";
    }

    if(empty($_POST['prenom']))
    {
        $errors['prenom1'] = "Le champ du prénom ne peut pas-être vide";
    }

    if(empty($_POST['telephone']))
    {
        $errors['telephone1'] = "Le champ du téléphone ne peut pas-être vide";
    }

    if(empty($_POST['courriel']))
    {
        $errors['courriel1'] = "Le champ de l'email ne peut pas-être vide";
    }

    if(empty($_POST['message']))
    {
        $errors['message1'] = "Le champ du message ne peut pas-être vide";
    }

    if(count($errors) == 0)
    {
        exit();
    }

}

$courriel = 'joe@example.com';
$courriel2 = 'e-mail valide';

if (filter_var($courriel, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$courriel' est considérée comme valide.";
}
if (filter_var($courriel2, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$courriel2' est considérée comme valide.";
} else {
    echo "L'adresse email '$courriel2' est considérée comme invalide.";
}

?>