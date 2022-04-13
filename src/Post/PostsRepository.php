<?php
namespace App\Post;

use App\Core\Data;

class PostsRepository extends Data
{

  public function getTableName()
  {
    return "posts";
  }

  public function getModelName()
  {
    return "App\\Post\\PostModel";
  }

}

?>