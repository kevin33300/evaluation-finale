<?php
    class Employe {
        // Définition des attributs
        public $firstName;
        public $familyName;
        private $salaire;
        private $idSalarie;


        public function __construct (
            $firstName,
            $familyName,
            $salaire,
            $idSalarie,
        )
        {
            $this->firstName=$firstName;
            $this->familyName=$familyName;
            $this->salaire=$salaire;
            $this->idSalarie=$idSalarie;
        }

        public function getFirstName () {
            echo 'le salarie se nomme '.$this->firstName.' ! ';
        }

        public function getFamilyName () {
            echo 'Son nom de famille est '.$this->familyName.' ! ';
        }

        private function getSalaire () {
            echo 'Son salaire est de  '.$this->salaire.' ! ';
        }

        private function getIdSalarie () {
            echo 'Son identifiant de salarie est le  '.$this->salaire.' ! ';

        
    }
    }