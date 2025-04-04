<?php
require_once("Utilisateur.php");

// 🔐 Simulation de connexion (id=1 par exemple)
session_start();
if (!isset($_SESSION['utilisateur'])) {
    $_SESSION['utilisateur'] = Utilisateur::getById(7); // admin ou user
}
$utilisateur = $_SESSION['utilisateur'];
?>


<?php

class Utilisateur {
    private $id;
    private $username;
    private $email;
    private $role;

    public function __construct($id, $username, $email, $role) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->role = $role;
    }

    public function isAdmin() {
        return $this->role === 'admin';
    }

    public function isUser() {
        return $this->role === 'user';
    }

    public function getRole() {
        return $this->role;
    }

    public static function getById($id) {
        require_once("ConnexionBD.php");
        $bd = ConnexionBD::getInstance();
        $req = $bd->prepare("SELECT * FROM utilisateur WHERE id = ?");
        $req->execute([$id]);
        $user = $req->fetch(PDO::FETCH_ASSOC);
        return new Utilisateur($user['id'], $user['username'], $user['email'], $user['role']);
    }
}
?>