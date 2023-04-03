<?php 

include 'config.php';
include 'autoload.php';
include 'rotas.php';

echo 'Servidor funcionando!';

/* TESTES

/endereco/by-cep?cep=17210580

/logradouro/by-bairro?id_cidade=4874&bairro=Jardim América

/cep/by-logradouro?logradouro=Rua Raphael

/cidade/by-uf?uf=SP

/bairro/by-cidade?id_cidade=4874

*/