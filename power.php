<?php
session_start();
require('MachineACafe.php');
require('MachineACafeManager.php');
require('bdd.php');


$enFonction = $_POST['enFonction'];

if ($enFonction == "true") {
    $enFonction = 1;
}

if ($enFonction == "false") {
    $enFonction = 0;
}

$manager = new MachineACafeManager($bdd);
$manager->allumeMachine($enFonction, $_SESSION['marque']);

header('Location: machine.php');