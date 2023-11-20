<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
require_once 'secret.php'
?>
<div class="container d-flex flex-column p-5">
    <p>Hello ! I dare you to find my secret ! </p>
<form action="" method="post" class="d-flex flex-column w-20 fs-2 ">


    <input type="text" name="prenominput" id="prenominput" value="" class="p-2" placeholder="Username..">
    <input type="password" name="mdpinput" id="mdpinput" value="" class="p-2" placeholder="mot de passe..">
    <button class="btn btn-primary" type="submit" id="submitFOrm">OK</button>

</form>

<span class="text-primary"><?=$secretAfficher?></span>
<span class="text-danger fs-4"><?=$messageErreur?></span>
</div>
</body>
</html>