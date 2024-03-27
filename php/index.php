<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require_once './siteController/AlunniController.php';
require_once './siteController/SiteController.php';

$app = AppFactory::create();


$app->get('/', 'SiteController:index');
$app->get('/alunni', 'AlunniController.php:get_alunni');
$app->get('/alunni/{id}', 'AlunniController.php:get_alunni_by_id');
$app->post('/alunni', 'AlunniController.php:post_alunni');
$app->put('/alunni/{id}', 'AlunniController.php:put_alunni_by_id');
$app->delete('/alunni/{id}', 'AlunniController.php:delete_alunni_by_id');

$app->run();