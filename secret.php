
<?php

$mdpinput = "";


$secretAfficher = "Decouvre mon secret";
$messageErreur = "";

$listeSecret = [
    [
        'prenom' => 'pierre',
        'mdp' => 'pierre',
        'secret' => "J'aime le sport",
    ],
    [
        'prenom' => 'mey',
        'mdp' => 'mey',
        'secret' => "J'aime les peluches",
    ],
    [
        'prenom' => 'natan',
        'mdp' => 'natan',
        'secret' => "J'aime Lol",
    ],
    [
        'prenom' => 'raph',
        'mdp' => 'raph',
        'secret' => "J'aime boire",
    ],
    [
        'prenom' => 'kaya',
        'mdp' => 'kaya',
        'secret' => "J'aime rl",
    ]
];
if ($_POST['prenominput']!= "" && $_POST['mdpinput']!= "" ){
foreach ($listeSecret as $secret ) {



    if ($_POST['prenominput'] != $secret['prenom']) {

        $messageErreur = "MAUVAIS PSEUDO BAHAHA";
    } elseif ($_POST['mdpinput'] != $secret['mdp']) {

        $messageErreur = "MAUVAIS MDP BAHAHA";
    } elseif ($_POST['prenominput'] == $secret['prenom'] && $_POST['mdpinput'] == $secret['mdp']) {
        $messageErreur = "Bien joué";
        $secretAfficher = "<h1> " . $secret['prenom'] . " : </h1> Here's my secret  ," . $secret['secret'];

    } else {
        echo 'else' ;
        $messageErreur = "MAUVAIS LOGIN BAHAHA";
    }
}};


$formulaire = '<form action="" method="post" class="d-flex flex-column w-20 fs-2 ">
    <input type="text" name="prenominput" id="prenominput" value="" class="p-2" placeholder="Username..">
    <input type="password" name="mdpinput" id="mdpinput" value="" class="p-2" placeholder="mot de passe..">
    <button class="btn btn-primary" type="submit" id="submitFOrm">OK</button>

</form>';

$secretdevoile = '<span class="text-primary">'.$secretAfficher.'</span>
<span class="text-danger fs-4">'.$messageErreur.'</span>';



$content = '
<div class="container d-flex flex-column p-5">
    <p>Hello ! I dare you to find my secret ! </p>'.
    $formulaire.
    $secretdevoile.'
</div>';


?>
