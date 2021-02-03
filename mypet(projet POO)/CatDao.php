<?php
include 'errors.php';
require_once 'Cat.php';
/**
 * Classe Dao (Database Acces Object) de la class CatDao
 * cette classe est chargée des requetes de base de données
 *
 */

class CatDao{
    

        private $PDO;
      
        public function __construct(){
          try{
              $this->PDO = new PDO("mysql:dbname=pet", "root", "");
          }catch(\Exception $e){
            var_dump($e);
            die();
          }
        }

    public function insert (Cat $cat){
        $sql = "INSERT INTO chat (nom, age, poids, admission)
        VALUES (:nom, :age, :poids, :admission)"; 

        $admission = $cat->getAdmission(); //objet DateTime
        $string_date = $admission->format("Y-m-d H:i:s");

        //preparation de la requete
        $statement = $this->PDO->prepare($sql);
        //execution de la requete
        $statement->execute([
            ":nom" => $cat->getName(),
            ":age" => $cat->getAge(),
            ":poids" => $cat->getPoids(),
            ":admission" => $string_date,
          ]);

          $cat->setId($this->PDO->lastInsertId());
    }
    public function getById(int $id){

    $sql = "SELECT * FROM chat WHERE id = :id";
    $statement = $this->PDO->prepare($sql);
    $statement->execute([
      ":id" => $id
    ]);
    $datas = $statement->fetch(PDO::FETCH_ASSOC);
    return $this->transformRowToCat($datas);
    }
    private function transformRowToCat(array $row){

        $cat = new Cat();
        $cat->setName($row['nom']);
        $cat->setId($row['id']);
        $cat->setPoids($row['poids']);
        $cat->setAge($row['age']);
        $cat->setAdmission(new DateTime($row['admission']));
        return $cat;
      }

    public function getAll(){
      $result = [];
      $sql = "SELECT * FROM chat";
      $statement = $this->PDO->prepare($sql);
      $statement->execute();
      $datas = $statement->fetchAll(PDO::FETCH_ASSOC);

      foreach($datas as $data){
        $cat = new Cat();
        $cat->setName($datas['name']);
        $cat->setAge($datas['age']);

        $cat = $this->transformRowToCat($data);
        $result[] = $cat;
    }
    return $result;
}
   
        public function update(Cat $cat, int $id){
            $sql = "UPDATE chat SET
                  nom = :nom,
                  age = :age,
                  poids = :poids,
                  admission = :admission)
                  WHERE id=:id ";
        
            $string_date = $cat->getAdmission()->format("Y-m-d H:i:s");
        
            $statement = $this->PDO->prepare($sql);
        
            $statement->execute([
              ":name" => $cat->getName(),
              ":age" => $cat->getAge(),
              ":poids" => $cat->getPoids(),
              ":admission_date" => $string_date,
              ":id" => $id
              ]);
        
          }
    
    public function delete(int $id){
        $sql = "DELETE chat
          WHERE id=:id ";
    $statement = $this->PDO->prepare($sql);
    $statement->execute([':id' => $id ]);

    }
}



?>