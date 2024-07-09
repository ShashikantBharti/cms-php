<?php 
class ArticleController {
  private $articleModel;

  public function __contruct() {
    $this->articleModel = new Article();
  }

  public function index() {
    $articles = $this->articleModel->getArticles();
    require '../src/views/article/list.php';
  }

  public function create() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'title' => trim($_POST['title']),
        'body' => trim($_POST['body']),
        'user_id' => $_SESSION['user_id']
      ];

      if($this->articleModel->createArticle($data)) {
        header('Location: article.php');
      } else {
        echo 'Article Creation Failed';
      }
    } else {
      require '../src/views/article/edit.php';
    }
  }

  public function edit($id) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'id' => $id,
        'title' => trim($_POST['title']),
        'body' => trim($_POST['body'])
      ];

      if($this->articleModel->updateArticle($data)) {
        header('Location: article.php');
      } else {
        echo 'Article Update Failed';
      }
    } else {
      $article = $this->articleModel->getArticle($id);
      require '../src/views/article/edit.php';
    }
  }

  public function delete($id) {
    if($this->articleModel->deleteArticle($id)) {
      header('Location: article.php');
    } else {
      echo 'Article Deletion Failed';
    }
  }




}


?>