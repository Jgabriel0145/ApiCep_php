<?php

namespace ApiCep_php\Model;

use ApiCep_php\DAO\EnderecoDAO;

class CidadeModel extends Model
{
    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

    public function getCidadesByUF($uf)
    {
        $dao = new EnderecoDAO();

        $this->rows = $dao->selectCidadesByUf($uf);
    }
}