<?php
namespace App\Post;

use App\Core\Controller;

class PostsController extends Controller
{

  public function __construct(PostsRepository $postsRepository)
  {
      $this->postsRepository = $postsRepository;
  }

  public function index()
  {
      $posts = $this->postsRepository->all();

      $this->render("post/index", [
        'posts' => $posts
      ]);
  }

  public function show()
  {
      $id = $_GET['id'];
      $post = $this->postsRepository->find($id);

      $this->render("post/show", [
        'post' => $post
      ]);
  }
}

 ?>