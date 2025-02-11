<!-- create rooting for application -->
 <?php
 //get the requested URL ferom the 'url' query parameter
 $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "";

 // define available routes (URL => corresponding PHP file)
 $routes = ['' => 'pages/index.php', //home route
            'contact' => 'pages/contact.php',
            'register' => 'pages/register.php',
            'login' => 'pages/login.php',
            'blog' => 'pages/blog.php',
            'admin' => 'pages/admin/dashboard.php',
            'user' => 'pages/user/dashboard.php',
            
            //config file
            'registerController' => 'controller/registerController.php',
          ];

//check if url mathes a route
if (array_key_exists($url, $routes)){
  require $routes[$url];
} 
else {
  require 'pages/error_404.php';
}