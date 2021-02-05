<?php

//include 'errors.php';


require_once 'Cat.php';

/**
 * Classe DAO (Database Access Objet) de la class CatDAO
 * cette classe est chargée des requêtes en base de données
 */
class CatDAO{

  private $PDO;

  public function __construct(){
    try{
        $this->PDO = new PDO("mysql:dbname=myvet", "dolibarr", "password");
    }catch(\Exception $e){
      var_dump($e);
      die();
    }
  }

  public function insert(Cat $cat){
    $sql = "INSERT INTO cat (name, age, weigth, admission_date)
            VALUES (:name, :age, :weigth, :admission_date)";

    // '2011-12-31 14:00:45'
    $admissionDate = $cat->getAdmissionDate(); //objet DateTime
    $string_date = $admissionDate->format("Y-m-d H:i:s");

    $statement = $this->PDO->prepare($sql);

    $statement->execute([
      ":name" => $cat->getName(),
      ":age" => $cat->getAge(),
      ":weigth" => $cat->getWeigth(),
      ":admission_date" => $string_date,
    ]);

    $cat->setId($this->PDO->lastInsertId());
  }

  public function getById(int $id){
    $sql = "SELECT * FROM cat WHERE id = :id";
    $statement = $this->PDO->prepare($sql);
    $statement->execute([
      ":id" => $id
    ]);
    $datas = $statement->fetch(PDO::FETCH_ASSOC);
    if($datas == false){
        return null;
    }
    return $this->transformRowToCat($datas);
  }

/**
 * transforme le resultat renvoyé par PDO (tableau associatif)
 * en objet de la classe Cat
 */
  private function transformRowToCat(array $row){
    $cat = new Cat();
    $cat->setName($row['name']);
    $cat->setId($row['id']);
    $cat->setWeigth($row['weigth']);
    $cat->setAge($row['age']);
    $cat->setAdmissionDate(new DateTime($row['admission_date']));
    return $cat;
  }

  public function  getAll(){
      $result = [];
      $sql = "SELECT * FROM cat";
      $statement = $this->PDO->prepare($sql);
      $statement->execute();
      $datas = $statement->fetchAll(PDO::FETCH_ASSOC);
      foreach($datas as $data){
        $cat = $this->transformRowToCat($data);
        $result[] = $cat;
      }

      return $result;
  }

  public function update(Cat $cat, int $id){
    $sql = "UPDATE cat SET
          name = :name,
          age = :age,
          weigth = :weigth,
          admission_date = :admission_date)
          WHERE id=:id ";

    $string_date = $cat->getAdmissionDate()->format("Y-m-d H:i:s");

    $statement = $this->PDO->prepare($sql);

    $statement->execute([
      ":name" => $cat->getName(),
      ":age" => $cat->getAge(),
      ":weigth" => $cat->getWeigth(),
      ":admission_date" => $string_date,
      ":id" => $id
      ]);
  }

  public function delete(int $id){
    $sql = "DELETE FROM cat
          WHERE id=:id ";
    $statement = $this->PDO->prepare($sql);
    $statement->execute([':id' => $id ]);
  }
}
