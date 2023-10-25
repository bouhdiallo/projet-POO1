<?php

//representez les entites "etudiants" et "professeur" suivant le poo en PHP

Class etudiant {

//proprieté de etudiant
private $nom;
private $prenom;
private $matricule;
public $dateNaissance;

// constructeur
public function __construct($monNom,$monPrenom,$maMatricule,$maDateNaissance) {

	$this->nom = $monNom;
	$this->prenom = $monPrenom;
	$this->matricule = $maMatricule;
	$this->dateNaissance = $maDateNaissance;

}

public function getNom(){
	return $this->nom;
}

public function setNom($nouveauNom){

	$this->nom = $nouveauNom;
}


public function getPrenom(){
	return $this->prenom;
}

public function setPrenom($nouveauPrenom){

	$this->prenom = $nouveauPrenom;
}

public function getMatricule(){
	return $this->matricule;
}

public function setMatricule($nouveauMatricule){

	$this->matricule = $nouveauMatricule;
}

public function presEtudiant(){

		echo "bonjour<br> mon nom c'est $this->nom <br> mon prenom $this->prenom, <br> ma matricule $this->matricule <br> je suis née le $this->dateNaissance" ."<br><br>";	
}
}

$etudiant = new Etudiant("fall","ndiaga","PD1205" ,"2003/05/14");
$etudiant->presEtudiant();

/*
Class professeur extends etudiant{

    public $voiture;
    public $salaire;
    public $specialite;

    public function __construct($monNom,$monPrenom,$maMatricule,$maDateNaissance,$maVoiture,$monSalaire,$maSpecialite)
    {
        parent:: __construct($monNom,$monPrenom,$maMatricule,$maDateNaissance);

        $this->voiture = $maVoiture;
        $this->salaire = $monSalaire;
        $this->specialite = $maSpecialite;
    }
    public function presProfesseur() {
		echo "bonjour<br> mon nom c'est ".$this->getNom()." <br> mon prenom ".$this->getPrenom()." <br> j'ai une $this->voiture <br> et une salaire de $this->salaire par mois <br> je suis $this->specialite <br> ma matricule ".$this->getMatricule()." <br> je suis née le $this->dateNaissance.";		
    }
}


$etudiant = new Etudiant("fall","ndiaga","PD1205" ,"2003/05/14");
$etudiant->presEtudiant();


$professeur = new Professeur ("kane","samba","AD5050","2000/05/04","rangerRover",800000,"designer",);
$professeur->presProfesseur();



*/






























