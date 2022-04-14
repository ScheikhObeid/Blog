<?php
require __DIR__ . "/../init.php";
// if(isset($_SERVER['PATH_INFO'])){
$pathInfo = $_SERVER['PATH_INFO'];
// }else{

//   $pathInfo = '/index';
// }

$routes = [
  '/index' => [
    'controller' => 'postsController',
    'method' => 'index'
  ],
  '/post' => [
    'controller' => 'postsController',
    'method' => 'show'
  ]
];

if (isset($routes[$pathInfo])) {
  $route = $routes[$pathInfo];
  $controller = $container->make($route['controller']);
  $method = $route['method'];
  $controller->$method();
}


/*
if ($pathInfo == "/index") {
  $postsController = $container->make("postsController");
  $postsController->index();
} elseif ($pathInfo == "/post") {
  $postsController = $container->make("postsController");
  $postsController->show();
}
*/
 ?>
