<?php

//include 'errors.php';

require_once 'Cat.php';
require_once 'CatDAO.php';
require_once 'CatService.php';

session_start();

$action = $_GET['action'];

switch ($action) {
    case 'create':
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $weight = htmlspecialchars($_POST['weight']);

        $cat = new Cat();
        $cat->setName($name);
        $cat->setAge(intval($age));
        $cat->setWeigth(floatval($weight));

        $catService = new CatService();
        $result = $catService->createCat($cat);
        if ($result instanceof Cat) {
            unset($_SESSION['errors']);
            $id = $result->getId();
            header("location: catController.php?action=details&id=$id");
        } else {
            $_SESSION['errors'] = $result;
            header("location: new.php");
        }
        break;
    case 'delete':
        $id = $_GET["id"];
        $dao = new CatDAO();
        $dao->delete($id);
        header("location: catController.php?action=list");
        break;
    case 'list':
        $dao = new CatDAO();
        $cats = $dao->getAll();
        $_SESSION['list'] = $cats;
        header("location: list.php");
        break;
    case 'update':
        $dao = new CatDAO();
        /**
         * Todo
         */
        break;
    case 'details':
        $id = $_GET["id"];
        $dao = new CatDAO();
        $cat = $dao->getById($id);
        if($cat === null){
            header("location: 404.php");
        }
        else{
            $_SESSION['cat'] = $cat;
            header("location: details.php");
        }
        break;
}
