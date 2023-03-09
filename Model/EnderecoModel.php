<?php

namespace ApiCep\Model;

use ApiCep\DAO\EnderecoDAO;
use \Exception;

class EnderecoModel extends Model
{
    public $id_logradouro, $tipo, $descricao, $id_cidade, $uf, $complemento, $descricao_sem_numero, $descricao_cidade, $codigo_cidade_ibge, $descricao_beirro;

    

}