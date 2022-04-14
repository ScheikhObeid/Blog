<?php include __DIR__ . "../layout/header.php" ?>
<div class="m-8">

<h1>Postttt.php</h1>

 <div>
  <div>
    <h3><?php echo $post['title']; ?></h3>
  </div>
  <div>
   <?php echo nl2br( $post ['content']); ?>
  </div>
 </div>

 <div>

<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
<textarea id="message" rows="4" class="block mb-4 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>

 <ul>
  <?php foreach ($comments AS $comment): ?>
    <li style="border:solid;padding:0.5rem; height:5rem">
        <?php echo $comment->content; ?>
        <?php // var_dump($comment->content)?>

    </li><br>
  <?php endforeach; ?>
</ul>
 </div>
 </div>
 <?php include __DIR__ . "../layout/footer.php" ?>