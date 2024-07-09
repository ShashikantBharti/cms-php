<?php 
require '../config/config.php';
require '../src/models/Article.php';

$articleModel = new Article();

if(isset($_GET['q'])) {
  $q = trim($_GET['q']);
  $articles = $articleModel->searchArticles($q);
} 
require '../src/views/article/search.php';



?>