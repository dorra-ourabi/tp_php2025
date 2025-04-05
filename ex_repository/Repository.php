<?php
require_once("ConnexionBD.php");
abstract class Repository
{
    protected $db;
    public function __construct(protected $tableName)
    {
        $this->db = ConnexionBD::getInstance();
    }
    public function findAll()
    {
        $query = "SELECT * from {$this->tableName}";
        /* Un objet de type Mysql non utilisable */
        $response = $this->db->query($query);
        /* Je veux le transformer en un tableau d'enregistrement */
        $elements = $response->fetchAll(PDO::FETCH_OBJ);
        return $elements;
    }
    public function findById($id)
    {
        $query = "SELECT * from {$this->tableName} where id = :id";
        /* Un objet de type Mysql non utilisable */
        $response = $this->db->prepare($query);
        $response->execute(['id' => $id]);
        /* Je veux le transformer en un tableau d'enregistrement */
        return $response->fetch(PDO::FETCH_ASSOC);
    }
    public function delete($id)
    {
        $query = "delete from {$this->tableName} where id = :id";
        /* Un objet de type Mysql non utilisable */
        $response = $this->db->prepare($query);
        $response->execute(['id' => $id]);
    }
    public function create($params)
    {
        $keys = array_keys($params);
        //        ['username', 'password','role']
        $keyString = implode(",", $keys);
        //        'username', 'password','role'
        //        ['?', '?', '?']
        $paramselements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramselements);
        $request = "INSERT INTO $this->tableName (`id`, $keyString) VALUES (NULL, $paramString);";
        $reponse = $this->db->prepare($request);
        $reponse->execute(array_values($params));
        return $reponse->fetch(PDO::FETCH_OBJ);
    }
}
