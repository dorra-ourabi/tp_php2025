<?php
require_once("ConnexionBD.php");

class Section {
    private $conn;

    public function __construct() {
        $this->conn = ConnexionBD::getInstance();
    }

    public function ajouter($designation, $description) {
        $sql = "INSERT INTO section (designation, description) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$designation, $description]);
    }

    public function lister() {
        $sql = "SELECT * FROM section";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function supprimer($id) {
        $sql = "DELETE FROM section WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function modifier($id, $designation, $description) {
        $sql = "UPDATE section SET designation = ?, description = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$designation, $description, $id]);
    }

    public function getById($id) {
        $sql = "SELECT * FROM section WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
?>
