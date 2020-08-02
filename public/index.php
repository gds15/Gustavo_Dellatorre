<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\PessoasController;
use App\Controllers\UsuariosController;
use App\Controllers\AuthController;

//$app = new App;

$app = new App([

    'settings' => [
        'displayErrorDetails' => true,
        'debug'               => true,
    ]

]);

$app->get('/', PessoasController::class . ':index');
$app->get('/pessoas', PessoasController::class . ':index');
$app->get('/pessoas/detalhe/{id}', PessoasController::class . ':detalhe');
$app->get('/pessoas/adicionar', PessoasController::class . ':adicionar');
$app->post('/pessoas', PessoasController::class . ':salvar');
$app->get('/pessoas/editar/{id}', PessoasController::class . ':editar');
$app->put('/pessoas/{id}', PessoasController::class . ':atualizar');
$app->delete('/pessoas/deletar/{id}', PessoasController::class . ':deletar');

$app->get('/usuarios', UsuariosController::class . ':index');
$app->get('/usuarios/detalhe/{id}', UsuariosController::class . ':detalhe');
$app->get('/usuarios/adicionar', UsuariosController::class . ':adicionar');
$app->post('/usuarios', UsuariosController::class . ':salvar');
$app->get('/usuarios/editar/{id}', UsuariosController::class . ':editar');
$app->put('/usuarios/{id}', UsuariosController::class . ':atualizar');
$app->delete('/usuarios/deletar/{id}', UsuariosController::class . ':deletar');

$app->get('/login', AuthController::class . ':index');
$app->post('/login', AuthController::class . ':entrar');
$app->get('/logout', AuthController::class . ':sair');

$app->run();
