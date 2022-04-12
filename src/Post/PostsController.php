<?php
namespace App\Post;


class PostsController
{
    
    
    public function __construct(PostsRepository $postsRepository)
    {
       $this->postsRepository =  $postsRepository;
    }

  

    public function index()
    {
        $posts = $this->postsRepository->fetchPosts(); 
        include __DIR__ . "/../../views/post/index.php";

    }

    public function show(){
        $id = $_GET['id'];
        $post = $this->postsRepository->fetchPost($id);
        include __DIR__ . "/../../views/post/show.php";
        // $postsRepository = $container->make("postsRepository");
        // $id = $_GET['id'];
        // $post = $postsRepository->fetchPost($id);
        

    }

}







?>