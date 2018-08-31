<?php 

	class Client()
	{
		public $titre;
		public $prenom;
		public $nom;
		public $datenaissance;
		public $ville;
		public $adresse;
		public $codepostale;
		public $telephone;
		public $dateinscription;

		public function __construct($ti, $pre, $no, $naiss, $vi, $adres, $copost, $tel, $datincrip)
		{
			$this->titre = $ti;
			$this->prenom = $pre;
			$this->nom = $no;
			$this->datenaissance = $naiss;
			$this->ville = $vi;
			$this->adresse = $adres;
			$this->codepostale = $copost;
			$this->telephone = $tel;
			$this->dateinscription = $datincrip;
		}

		public function trititre()
		{
			
		}

		public function trialphabet()
		{
			sort($prenom, $nom);
		}

	}

 ?>