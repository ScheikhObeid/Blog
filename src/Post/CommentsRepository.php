<?php
namespace App\Post;
use PDO;
use App\Core\Data;

class CommentsRepository extends Data
{

  public function getTableName()
  {
    return "comments";
  }

  public function getModelName()
  {
    return "App\\Post\\CommentModel";
  }

  public function insertComment($postId, $content)
  {
    $table = $this->getTableName();
    $stmt = $this->pdo->prepare("INSERT INTO `$table` (`content`,`post_id`) VALUE (:content, :postId)");
    $stmt->execute([
      'content' => $content,
      'postId'=> $postId,
      ]);
   
  }

  public function comments($id)
  {
    $table = $this->getTableName();
    $model = $this->getModelName();
    $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE post_id = :id");
    $stmt->execute(['id' => $id]);
    $comments = $stmt->fetchAll(PDO::FETCH_CLASS, $model);

    return $comments;
  }

}

?>