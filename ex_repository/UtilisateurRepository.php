<?php
    require_once("Repository.php");
    class UtilisateurRepository extends Repository{
        public function __construct()
    {
        parent::__construct('utilisateurs');
    }
    }
?>