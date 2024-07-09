<?php 
class Article {
  private $db;

  public function __contruct() {
    $this->db = new Database;
  }

  public function getArticles() {
    $this->db->query('SELECT * FROM `articles` ORDER BY `created_at` DESC');
    $results = $this->db->resultSet();
  }

  public function getArticleById($id) {
    $this->db->query('SELECT * FROM `articles` WHERE `id` = :id');
    $this->db->bind(':id', $id);
    $row = $this->db->single();
  }

  public function createArticle($data) {
    $this->db->query('INSERT INTO `articles`(`title`, `body`, `user_id`) VALUES(:title, :body, :user_id)');
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':body', $data['body']);
    $this->db->bind(':user_id', $data['user_id']);
    
    return $this->db->execute();
  }

  public function updateArticle($data) {
    $this->db->query('UPDATE `articles` SET `title`=:title, `body` = :body WHERE `id` = :id');
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':body', $data['body']);
    $this->db->bind(':id', $data['id']);

    return $this->db->execute();
  }

  public function deleteArticle($id) {
    $this->db->query('DELETE FROM artiles WHERE `id` = :id');
    $this->db->bind(':id', $id);

    return $this->db->execute();
  }

}

?>