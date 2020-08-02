<?php
namespace Config;

class Db
{
  public static function conexao()
  {
    $conexao = new \PDO("mysql:host=localhost;dbname=gustavo_dellatorre;charset=utf8","root","25578237");
    return $conexao;
  }
}
