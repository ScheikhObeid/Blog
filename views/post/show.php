<?php include __DIR__ . "../layout/header.php" ?>
<div class="m-8">

<h1>Postttt.php</h1>

 <div>
  <div>
    <h3><?php echo e($post['title']); ?></h3>
  </div>
  <div>
   <?php echo nl2br( e($post ['content'])); ?>
  </div>
 </div>

 <div>
<form method="post" action="post?id=<?php echo e($post['id']); ?>">
<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
<textarea name="content" id="message" rows="4" class="block mb-4 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Send</button>
</form>
 <ul>
  <?php foreach ($comments AS $comment): ?>
    <li style="border:solid;padding:0.5rem; height:5rem">
        <?php echo e($comment->content); ?>
        <?php // var_dump($comment->content)?>

    </li><br>
  <?php endforeach; ?>
</ul>
 </div>
 </div>
 <?php include __DIR__ . "../layout/footer.php" ?>