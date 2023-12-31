<?php
require_once "inc/init.inc.php";
/* 
URL: index.php?controller=user&method=update&id=32
*/
// 1 syntaxe
// if (isset($_GET["controller"])) {
//     $controller = $_GET["controller"];
// } else {
//     $controller = "home";
// }
// 2eme syntaxe
// if (isset($_GET["controller"]))
//     $controller = $_GET["controller"];
// else
//     $controller = "home";
// 3eme syntaxe
// $controller = $_GET["controller"] ? $_GET["controller"] : "home";
// 4eme syntaxe
// $controller = $_GET["controller"] ?? "home";
// tout cela veux dire la meme chose

// var_dump($_GET);
// on recupere les valeur du tableau $_GET[""] sinon (??) la valeur "  "
$controller = $_GET["controller"] ?? "home";
$method    = $_GET["method"] ?? "list";
$id         = $_GET["id"] ?? null;
debug($controller);
debug($method);
debug($id );
// ucfirst: met la première lettre d'un string en majuscule
$classeController = "Controller\\" . ucfirst($controller) . "Controller";  
/* $classeController = "Controller\UserController" 
   $method = "list"
*/
debug(ucfirst($controller));
debug($classeController);

// echo $controller . "<br>";
// echo $method . "<br>";
// echo $id . "<br>";

/* On peut instancier un objet en utilisant un string pour le nom de la classe.
    _⚠ le nom de la classe doit être dans une variable pour pouvoir utiliser 'new'
*/
$controller = new $classeController;
// $UserController->update($id);
$controller->$method($id);