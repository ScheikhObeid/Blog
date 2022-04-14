<?php
namespace App\Post;

use App\Core\Controller;

class PostsController extends Controller
{

  public function __construct(
    PostsRepository $postsRepository,
    CommentsRepository $commentsRepository)
  {
      $this->postsRepository = $postsRepository;
      $this->commentsRepository = $commentsRepository;
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
      $comments = $this->commentsRepository->comments($id);

      $this->render("post/show", [
        'post' => $post,
        'comments' => $comments
      ]);
  }
}

 ?>