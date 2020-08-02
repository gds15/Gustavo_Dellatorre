<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Pessoa;

class PessoasController extends Controlle
{
  public function __construct()
  {
    session_start();
    if(!isset($_SESSION['id'])){
      header("Location: /login");
      die();
    }
  }


  public function index(ServerRequestInterface $request, ResponseInterface $response)
  {
    $modelo = Pessoa::all();

    $this->modelo = $modelo;

    return $this->view('pessoas/index',$response);
  }

  public function detalhe(ServerRequestInterface $request, ResponseInterface $response)
  {
    $id = $request->getAttribute('id');
    $modelo = Pessoa::find($id);
    $this->modelo = $modelo;

    return $this->view('pessoas/show',$response);
  }

  public function adicionar(ServerRequestInterface $request, ResponseInterface $response)
  {
    return $this->view('pessoas/create',$response);
  }

  public function salvar(ServerRequestInterface $request, ResponseInterface $response)
  {
    $dados = $request->getParsedBody();
    $modelo = new Pessoa;

    $modelo->nome = $dados['nome'];
    $modelo->cpf = $dados['cpf'];
    $modelo->email = $dados['email'];
    $modelo->datanascimento = $dados['datanascimento'];
    $objModelo = $modelo->save();

    if($objModelo){
      //sucesso
    }else{
      //erro
    }
    
    return $response->withRedirect('/pessoas');
  }

  public function editar(ServerRequestInterface $request, ResponseInterface $response)
  {
    $id = $request->getAttribute('id');
    $modelo = Pessoa::find($id);
    $this->modelo = $modelo;
    return $this->view('pessoas/edit',$response);
  }

  public function atualizar(ServerRequestInterface $request, ResponseInterface $response)
  {
    $dados = $request->getParsedBody();
    $id = $request->getAttribute('id');
    $modelo = Pessoa::find($id);
    //var_dump($modelo);exit;
    //$modelo = new Pessoa;

    $modelo->nome = $dados['nome'];
    $modelo->cpf = $dados['cpf'];
    $modelo->email = $dados['email'];
    $modelo->datanascimento = $dados['datanascimento'];
    $objModelo = $modelo->save();

    return $response->withRedirect('/pessoas');
  }

  public function deletar(ServerRequestInterface $request, ResponseInterface $response)
  {

    $id = $request->getAttribute('id');
    $modelo = Pessoa::find($id);


    $ok = $modelo->delete();

    return $response->withRedirect('/pessoas');
  }


}
