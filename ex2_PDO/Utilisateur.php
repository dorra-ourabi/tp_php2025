

<?php

//creating the class user with privileges accorded
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
        return $this->role == 'adminstrateur';
    }

    public function isUser() {
        return $this->role =='user';
    }

    public function getRole() {
        return $this->role;
    }
  //creation d'une instance d'utilisateur avec les données des utilisateurs qu'on a inséré dans la table utilisateur
    public static function getById($id) {
        require("ConnexionBD.php");
        $bd = ConnexionBD::getInstance();
        $req = $bd->prepare("SELECT * FROM utilisateur WHERE id = ?");
        $req->execute([$id]);
        $user = $req->fetch(PDO::FETCH_OBJ);
        return new Utilisateur($user->id, $user->username, $user->email, $user->role);
    }
}
?>