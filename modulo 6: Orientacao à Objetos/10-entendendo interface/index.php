<?php

interface dataBase {
  public function listarProduto();
  public function adicionarProduto();
  public function alterarProduto();
}

class MysqlDB implements dataBase {
  public function listarProduto() {

  }
  
  public function adicionarProduto() {
    echo "Adicionar Mysql";
  }

  public function alterarProduto() {

  }

}

class OracleDB implements dataBase {
  public function listarProduto() {

  }
  
  public function adicionarProduto() {

  }

  public function alterarProduto() {

  }

}

$db = new MysqlDB();
$db->adicionarProduto();


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);