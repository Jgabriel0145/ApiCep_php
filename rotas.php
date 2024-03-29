<?php 

use ApiCep_php\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{
    case '/endereco/by-cep':
        EnderecoController::GetLogradouroByCep();
        break;

    case '/logradouro/by-bairro':
        EnderecoController::GetLogradouroByBairroAndCidade();
        break;
    
    case '/cep/by-logradouro':
        EnderecoController::GetCepByLogradouro();
        break;

    case '/cidade/by-uf':
        EnderecoController::GetCidadesByUf();
        break;

    case '/bairro/by-cidade':
        EnderecoController::GetBairrosByIdCidade();
        break;

    default:
        http_response_code(403);
        break;
}