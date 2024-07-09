<?php
require '../config/config.php';
require '../src/controllers/ArticleController.php';

$articleController = new ArticleController();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action) {
  case 'create':
    $articleController->create();
    break;
  case 'edit':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $articleController->edit($id);
    break;
  case 'delete':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $articleController->delete($id);
    break;
  default: 
    $articleController->index();
    break;
}



?>