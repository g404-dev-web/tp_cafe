<?php

class MachineACafeManager
{
    private $bdd; // Contains PDO instance

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    // CRUD (kind of)
    public function create(MachineACafe $machineACafe)
    {
        $q = $this->bdd->prepare('INSERT INTO machine(marque, cafe, sucre, monnaie, prix)
                                  VALUES(?, ?, ?, ?, ?)');
        $q->execute(array($machineACafe->getMarque(), $machineACafe->getCafe(), $machineACafe->getSucre(), $machineACafe->getMonnaie(), $machineACafe->getPrix()));
    }

    public function recupMachine($marque)
    {
        $q = $this->bdd->prepare('SELECT * FROM machine WHERE marque = ?');
        $q->execute(array($marque));

        return $q->fetch();
    }

    public function allumeMachine($enFonction, $marque) {
        $q = $this->bdd->prepare('UPDATE machine SET enFonction = ? WHERE marque = ?');
        $q->execute(array($enFonction, $marque));
    }
}
