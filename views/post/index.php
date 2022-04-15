<?php include __DIR__ . "../layout/header.php" ?>

<div class="m-8 flex flex-wrap">
     
        <?php foreach ($posts AS $post): ?>
          <div class="max-w-[30%] mx-2 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <a href="post?id=<?php echo $post->id; ?>">
                  <img class="rounded-t-lg" src="../../public/img/article.jpg" alt="" />
              </a>
              <div class="p-5">
                  <a href="post?id=<?php echo $post->id; ?>">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?php echo $post->title; ?></h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="post?id=<?php echo $post->id; ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Read more
                      <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>
        <?php endforeach; ?>
</div>

<?php include __DIR__ . "../layout/footer.php" ?>
