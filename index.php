<?php
session_start();
use CoffeeCode\Router\Router;

require __DIR__ . '/vendor/autoload.php';

$router = new Router(SITE["baseUrl"]);

$router->namespace('Source\App');
$router->group(null);
// navegation
$router->get('/', "Web:home", "web.home");
$router->get('/chat', "Chat:chat", "web.chat");
// validade login
$router->post('/chat', "Chat:validade", "chat.valildade");
// send message
$router->post('/sendMessage', 'Chat:sendMessage', "chat.sendMessage");

$router->dispatch();
