<?php
$pdo = new PDO(
  'mysql:host=localhost;dbname=blog; charset=utf8',
  'root',
  ''
);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
function fetch_posts()
{
   global $pdo;
   return $pdo->query("SELECT * FROM `posts`");
}

function fetch_post($id)
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
?>
