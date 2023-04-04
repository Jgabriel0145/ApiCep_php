<?php 

namespace ApiCep_php\Controller;

use ApiCep_php\Model\{EnderecoModel, CidadeModel};

use Exception;

class EnderecoController extends Controller
{
    public static function GetCepByLogradouro() : void
    {
        try
        {
            $logradouro = parent::getStringFromUrl(isset($_GET['logradouro']) ? $_GET['logradouro']: null, 'logradouro');

            $model = new EnderecoModel();
            $model->getCepByLogradouro($logradouro);

            parent::GetResponseAsJSON($model->rows);
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
            $bairro = parent::getStringFromUrl(isset($_GET['bairro']) ? $_GET['bairro'] : null, 'bairro');

            $id_cidade = parent::getIntFromUrl(isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null, 'cep');

            $model = new EnderecoModel();
            $model->getLogradouroByBairroAndCidade($bairro, $id_cidade);

            parent::GetResponseAsJSON($model->rows);
        } 
        catch (Exception $ex) 
        {
            parent::getExceptionAsJSON($ex);
        }
    }

    public static function GetLogradouroByCep() : void
    {
        try 
        {
            $cep = parent::getIntFromUrl(isset($_GET['cep']) ? $_GET['cep'] : null);

            $model = new EnderecoModel();

            parent::GetResponseAsJSON($model->GetLogradouroByCep($cep));
        }
        catch (Exception $ex)
        {
            parent::getExceptionAsJSON($ex);
        }
    }

    public static function GetBairrosByIdCidade() : void
    {
        try 
        {
            $id_cidade = parent::getIntFromUrl(isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null);

            $model = new EnderecoModel();
            $model->getBairrosByIdCidade($id_cidade);

            parent::GetResponseAsJSON($model->rows);
        }
        catch (Exception $ex) 
        {
            parent::getExceptionAsJSON($ex);
        }
    }

    public static function GetCidadesByUF() : void
    {
        try 
        {
            $uf = parent::getStringFromUrl(isset($_GET['uf'])? $_GET['uf'] : null);

            $model = new CidadeModel();
            $model->getCidadesByUF($uf);

            parent::GetResponseAsJSON($model->rows);
        } 
        catch (Exception $ex) 
        {
            parent::getExceptionAsJSON($ex);
        }
    }
}