<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * $routes->get('/usuario', 'Usuario::index');         // Mostrar a lista de usuários
 */

 $routes->get('/', 'Usuario::index'); // Define a rota padrão para o método index do controlador Usuario
$routes->get('/lista-usuario', 'Usuario::listaUsuario'); // Mostrar a lista de usuários

$routes->get('/novo-usuario', 'Usuario::criarUsuario'); // Formulário de novo usuário
$routes->get('/create', 'Usuario::criarUsuario'); // Formulário de novo usuário

$routes->post('/store', 'Usuario::store');  // Salvar usuário

$routes->get('/edit/(:num)', 'Usuario::edit/$1');  //editar usuário

$routes->post('/update/(:num)', 'Usuario::update/$1'); //atualizar usuário

$routes->get('/delete/(:num)', 'Usuario::delete/$1');//excluir usuário

$routes->get('login', 'Usuario::login');
$routes->post('login', 'Usuario::autenticar');

$routes->get('registro', 'Usuario::registro');
$routes->post('registrar', 'Usuario::registrar');n