<?php

namespace ApiCep\Model;

use ApiCep\DAO\EnderecoDAO;

class CidadeModel extends Model
{
    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

    public function getCidadesByUF($uf)
    {
        $dao = new EnderecoDAO();

        $this->rows = $dao->selectCidadesByUf($uf);
    }
}