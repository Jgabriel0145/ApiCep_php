<?php 

namespace ApiCep\Controller;

use ApiCep\Model\{EnderecoModel, CidadeModel};

use Exception;

class EnderecoController extends Controller
{
    public static function GetCepByLogradouro() : void
    {
        try
        {
            $logradouro = $_GET['logradouro'];

            $model = new EnderecoModel();
            $model->getCepByLogradouro($logradouro);

            parent::GetResponseAsJSON($logradouro);
        }
        catch (Exception $e)
        {
            parent::getExceptionAsJSON($e);
        }
    }

    public static function GetLogradouroByBairroAndCidade() : void 
    {
        try 
        {
            //$bairro
        } 
        catch (Exception $ex) 
        {
            
        }
    }

    public static function GetLogradouroByCep() : void
    {

    }

    public static function GetBairroByIdCidade() : void
    {

    }

    public static function GetCidadeByUF() : void
    {
        
    }
}