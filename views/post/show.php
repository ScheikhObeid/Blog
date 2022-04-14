<?php include __DIR__ . "../layout/header.php" ?>

<h1>Post.php</h1>

 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $post['title']; ?></h3>
  </div>
  <div class="panel-body">
   <?php echo nl2br( $post ['content']); ?>
  </div>
 </div>

 <div>
 <ul>
  <?php foreach ($comments AS $comment): ?>
    <li style="border:solid;padding:0.5rem; height:5rem">
        <?php echo $comment->content; ?>
        <?php // var_dump($comment->content)?>

    </li><br>
  <?php endforeach; ?>
</ul>
 </div>
 <?php include __DIR__ . "../layout/footer.php" ?>