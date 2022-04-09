<?php

namespace App\Post;

class PostsRepository {

    function fetchPosts()
{
   global $pdo;
   return $pdo->query("SELECT * FROM `posts`");
}

function fetchPost($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id=:id");
  $stmt->execute(['id'=> $id]);
 /* wrong way
 $q = $pdo->query("SELECT * FROM `posts` WHERE title='{$title}'");
  var_dump($q); */
  echo "<h1>Var</h1> <br>";
  return $stmt->fetch();
}
}