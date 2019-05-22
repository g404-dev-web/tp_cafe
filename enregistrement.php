<?php
session_start();
require('MachineACafe.php');
require('MachineACafeManager.php');
require('bdd.php');

$nom = $_POST['nom'];
$prix = $_POST['prix'];

$machine = new MachineACafe($nom, 0, 99, 10, $prix);
$manager = new MachineACafeManager($bdd);
$manager->create($machine);

$_SESSION['marque'] = $machine->getMarque();

// Redirect towards machine.php
header('Location: machine.php');