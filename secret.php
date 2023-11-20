
<?php
$prenomBon =  "mey";
$prenominput = "";
$mdpinput = "";
$prenominput = $_POST['prenominput'];
$mdpinput = $_POST['mdpinput'];

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
foreach ($listeSecret as $secret ){
echo $secret['prenom'];
    if ($prenominput != $secret['prenom'] ){
        $messageErreur = "MAUVAIS PSEUDO BAHAHA";
    }
    elseif ($mdpinput != $secret['mdp'] ){
        $messageErreur = "MAUVAIS MDP BAHAHA";
    }
    elseif ($prenominput == $secret['prenom']  && $mdpinput== $secret['mdp']){
        $secretAfficher = "<h1> ".$secret['prenom'] ." : </h1> Here's my secret  ,". $secret['secret'];
    }
    else{
        $messageErreur = "MAUVAIS LOGIN BAHAHA";
    }
}

?>
