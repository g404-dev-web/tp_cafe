<?php
class MachineACafe
{
	// DB Representation
	private $marque;
	private $cafe;
	private $sucre;
	private $monnaie;
	private $prix;
	private $enFonction = false;

	function __construct($marque, $cafe, $sucre, $monnaie, $prix)
	{
		$this->marque = $marque;
		$this->cafe = $cafe;
		$this->sucre = $sucre;
		$this->monnaie = $monnaie;
		$this->prix = $prix;
	}

	// Getters
	public function getMarque()
	{
		return $this->marque;
	}

	public function getCafe()
	{
		return $this->cafe;
	}

	public function getSucre()
	{
		return $this->sucre;
	}

	public function getMonnaie()
	{
		return $this->monnaie;
	}

	public function getPrix()
	{
		return $this->prix;
	}

	
}


























  
//   public function __construct($marque)
//   { 
//     $this->marque = $marque;
//   }
  
//   public function allumage($miseEnRoute, $montant)
//   {
//     if($montant >= $this->prixCafe){
//       if (is_bool($miseEnRoute)){
//           $this->enFonction = $miseEnRoute;
//           $this->rendreMoney($montant);
//           return $this->affichage();
//       }
//       echo "Pour utiliser allumage(), ecrire true ou false <br>";
//       die;
//     } 
//     else {
//       echo "payer au moins $this->prixCafe euros";
//       die;
//     }


//   }

//   private function rendreMoney($montant)
//   {
//     $m = $montant - $this->prixCafe;
//     $this->money -= $m;
//     echo " $m euros rendu <br>";
//   }
  
//   private function affichage()
//   {
//     if($this->enFonction === true){
//         echo  $this->marque . " est en fonction. <br>";
//     } elseif ($this->enFonction === false){
//         echo  $this->marque . " est éteinte. <br>";
//         die;
//     }
//   }

//   public function ajoutSucre ($sucre = 1){
//     $this->sucre += $sucre;
//   }

//   public function faireDuCafe()
//   {
//     if($this->cafe === true && $this->enFonction === true) {
//         $this->cafe = false;

//         echo "Le café est pret avec ". $this->sucre." sucre(s) dedans ! <br>";
//     }
//     elseif($this->enFonction === false) {
//         echo "La machine est éteinte <br>";
//     }
//     elseif($this->cafe === false) {
//        echo "mettre une dosette <br>";
//     die;

//     }
//   }

//   public function mettreUneDosette()
//   {
//     $this->cafe = true;
//     echo "Je mets une dosette.\n <br>";
//   }


// }
