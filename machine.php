<?php
session_start();
require('MachineACafeManager.php');
require('bdd.php');

$manager = new MachineACafeManager($bdd);
$data = $manager->recupMachine($_SESSION['marque']);

echo "Nom de la machine: <b>{$data['marque']}</b>.<br>";

if ($data['enFonction']) {
    echo "La machine est en fonction.<br>";
} else {
    echo "La machine est éteinte.<br>";
}

echo "Nombre de dosettes restantes: <b>" . $data['cafe'] . "</b>.<br>";

?>

<form action="power.php" method="post">
    <button name="power" type="submit">Marche/Arrêt</button>
    <?php if ($data['enFonction']) { ?>
        <input type="hidden" name="enFonction" value="false">
    <?php } else { ?>
        <input type="hidden" name="enFonction" value="true">
    <?php } ?>
</form>
