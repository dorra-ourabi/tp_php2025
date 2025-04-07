<?php
require_once("ConnexionBD.php");

class Etudiant {
    private $conn;

    public function __construct() {
        $this->conn = ConnexionBD::getInstance();
    }

    public function ajouter($name, $birthday, $image, $section_id) {
        $sql = "INSERT INTO etudiant (name, birthday, image, section_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$name, $birthday, $image, $section_id]);
    }

    public function lister() {
        $sql = "SELECT * FROM etudiant";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function supprimer($id) {
        $sql = "DELETE FROM etudiant WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function modifier($id, $name, $birthday, $image, $section_id) {
        $sql = "UPDATE etudiant SET name = ?, birthday = ?, image = ?, section_id = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$name, $birthday, $image, $section_id, $id]);
    }

    public function getById($id) {
        $sql = "SELECT * FROM etudiant WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
?>
