<?php
//representons l' entite etudiant
class Etudiant {

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
    if (is_string($nouveauNom)) {
        $this->nom = $nouveauNom;
    }else {
        throw new exception("le nom doit etre une chaine de caractere");
    }
}


public function getPrenom(){
	return $this->prenom;
}

public function setPrenom($nouveauPrenom){

	if (is_string($nouveauPrenom)) {
        $this->prenom = $nouveauPrenom;
    }else {
        throw new exception("le prenom doit etre une chaine de caractere");
    }
}

public function getMatricule(){
	return $this->matricule;
}

public function setMatricule($nouveauMatricule){
    if (is_string($nouveauMatricule)) {
        $this->matricule = $nouveauMatricule;
    }else {
        throw new exception("le matricule doit avoir des chiffres et des lettres");
    }
}



public function presEtudiant(){

		echo "bonjour<br> mon nom c'est $this->nom <br> mon prenom $this->prenom, <br> ma matricule $this->matricule <br> je suis née le $this->dateNaissance" ."<br><br>";	
}


}

      //interface pour professeur
      interface InterfaceProf {
        public function presenter();
        public function evaluerEtudiant($dateEvaluation);

      }

//representons l' entite professeur
class Professeur extends Etudiant implements InterfaceProf{

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
		echo "bonjour<br> mon nom c'est ".$this->getNom()." <br> mon prenom ".$this->getPrenom()." <br> j'ai une $this->voiture <br> et une salaire de $this->salaire par mois <br> je suis $this->specialite <br> ma matricule ".$this->getMatricule()." <br> je suis née le $this->dateNaissance. <br>";		
    }

    
    public function presenter(){
        echo "Salut, je suis professeur, je m’appelle ".$this->getNom()." ".$this->getPrenom().", spécialisé dans le domaine de $this->specialite, j’ai une voiture $this->voiture, j’ai comme salaire $this->salaire FCFA <br>";
    }
    public function evaluerEtudiant($dateEvaluation) {
        echo "chers etudiants je vous evalue le $dateEvaluation";
    }
}


$etudiant = new Etudiant("ndiaye","ndiaga","PD1205" ,"2003/05/14");
$etudiant->presEtudiant();

$professeur = new Professeur ("kane","samba","AD5050","2000/05/04","rangerRover",800000,"designer",);
$professeur->presProfesseur();

$professeur->presenter();
$professeur->evaluerEtudiant("2023/05/28");


































