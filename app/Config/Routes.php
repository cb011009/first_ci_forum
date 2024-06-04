<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/validation', 'Home::validation');
//$routes->get('/ShopPage', 'Shop::index'); //URL doesn't correspond to any View/Controller name, but the 2nd argument Corresponds to controller name and the function
$routes->get('shopPage','Shop');
$routes->get('productTotal/(:segment)/(:num)','Shop::ProductTotal/$1/$2');

$routes->add('product/(:segment)/(:num)','Shop::product/$1/$2');

// can group routes based on the first segment of their URI so you would type the url like this http://localhost/admin/product/laptop/4

$routes->group('admin',function($routes){
    $routes -> add('users','Admin\Users::index');
    $routes -> add('users','Admin\Users::getAllUsers');
    $routes -> add('product/(:any)/(:any)','Admin\Shop::product/$1/$2');
    $routes-> add('blog', 'Admin\Blog::index');
    $routes-> add('blog/new','Admin\Blog::createNew');
    $routes-> add('blog/save','Admin\Blog::saveBlog');
   
});