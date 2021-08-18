<?php

/** --------------------------------------------------------------------------------------------------------
 * Add your routes here.
 * At this point, variables in a route are not supported like in Laravel: user/{user_id}/edit
 *  I add this in a future version.
 * 
 * Protect your routes with one ore more Middleware classes, like WhenNotLoggedIn or Permissions.
 *  See the classes for more information.
 * Add Middleware in an associative array with a key, like the admin route
 * ---------------------------------------------------------------------------------------------------------
 */

use App\Middleware\WhenNotLoggedin;
use App\Middleware\Permissions;

$router->get('admin', 'App/Controllers/AdminController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);


/* USERS */
$router->get('user', 'App/Controllers/UserController.php@index', [
    'show' => Permissions::class
]);

$router->get('user/{id}', 'App/Controllers/UserController.php@show', [
    'read' => Permissions::class
]);
$router->get('user/{id}/edit', 'App/Controllers/UserController.php@edit', [
    'update' => Permissions::class
]);
$router->get('user/create', 'App/Controllers/UserController.php@create');
$router->post('user/{id}/update', 'App/Controllers/UserController.php@update', [
    'update' => Permissions::class
]);
$router->post('user/store', 'App/Controllers/UserController.php@store', [
    'store' => Permissions::class
]);
$router->get('user/{id}/destroy', 'App/Controllers/UserController.php@destroy', [
    'delete' => Permissions::class
]);


/* EDUCATIONS */
$router->get('user/{id}/educations', 'App/Controllers/EducationsController.php@index', [
    'show' => Permissions::class
]);

$router->get('educations/create', 'App/Controllers/EducationsController.php@create', [
    'store' => Permissions::class
]);

$router->post('educations/store', 'App/Controllers/EducationsController.php@store', [
    'store' => Permissions::class
]);

$router->get('educations/{id}/edit', 'App/Controllers/EducationsController.php@edit', [
    'update' => Permissions::class
]);

$router->post('educations/{id}/update', 'App/Controllers/EducationsController.php@update', [
    'update' => Permissions::class
]);

$router->get('educations/{id}/destroy', 'App/Controllers/EducationsController.php@destroy', [
    'delete' => Permissions::class
]);


/* JOBS */
$router->get('user/{id}/jobs', 'App/Controllers/JobsController.php@index', [
    'show' => Permissions::class
]);

$router->get('jobs/create', 'App/Controllers/JobsController.php@create', [
    'store' => Permissions::class
]);

$router->post('jobs/store', 'App/Controllers/JobsController.php@store', [
    'store' => Permissions::class
]);

$router->get('jobs/{id}/edit', 'App/Controllers/JobsController.php@edit', [
    'update' => Permissions::class
]);

$router->post('jobs/{id}/update', 'App/Controllers/JobsController.php@update', [
    'update' => Permissions::class
]);

$router->get('jobs/{id}/destroy', 'App/Controllers/JobsController.php@destroy', [
    'delete' => Permissions::class
]);


/* SKILLS */
$router->get('user/{id}/skills', 'App/Controllers/SkillsController.php@index', [
    'show' => Permissions::class
]);

$router->get('skills/create', 'App/Controllers/SkillsController.php@create', [
    'store' => Permissions::class
]);

$router->post('skills/store', 'App/Controllers/SkillsController.php@store', [
    'store' => Permissions::class
]);

$router->get('skills/{id}/edit', 'App/Controllers/SkillsController.php@edit', [
    'update' => Permissions::class
]);

$router->post('skills/{id}/update', 'App/Controllers/SkillsController.php@update', [
    'update' => Permissions::class
]);

$router->get('skills/{id}/destroy', 'App/Controllers/SkillsController.php@destroy', [
    'delete' => Permissions::class
]);


/* HOBBIES */
$router->get('user/{id}/hobbies', 'App/Controllers/HobbiesController.php@index', [
    'show' => Permissions::class
]);

$router->get('hobbies/create', 'App/Controllers/HobbiesController.php@create', [
    'store' => Permissions::class
]);

$router->post('hobbies/store', 'App/Controllers/HobbiesController.php@store', [
    'store' => Permissions::class
]);

$router->get('hobbies/{id}/edit', 'App/Controllers/HobbiesController.php@edit', [
    'update' => Permissions::class
]);

$router->post('hobbies/{id}/update', 'App/Controllers/HobbiesController.php@update', [
    'update' => Permissions::class
]);

$router->get('hobbies/{id}/destroy', 'App/Controllers/HobbiesController.php@destroy', [
    'delete' => Permissions::class
]);



$router->get('me', 'App/Controllers/ProfileController.php@index');
$router->get('', 'App/Controllers/HomeController.php@index');
$router->get('home', 'App/Controllers/HomeController.php');
$router->get('login', 'App/Controllers/LoginController.php@index');
$router->get('logout', 'App/Controllers/LoginController.php@logout');
$router->post('login/auth', 'App/Controllers/LoginController.php@login');
$router->get('contact', 'App/Controllers/ContactController.php@index');
$router->get('register', 'App/Controllers/RegisterController.php@index');
$router->post('register', 'App/Controllers/RegisterController.php@store');
