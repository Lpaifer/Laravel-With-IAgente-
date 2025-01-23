<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnviarSMSController extends Controller
{
    public function EnviarSMS(){
        $usuarioIagente = "236576@facens.br";
        $senha = urlencode("Lp221204@");
        $celular = "15997798100";
        $nome = "Fabiana";

        // codifica os dados no formato de um formulário www
        $mensagem = urlencode("$nome, Cade meu celular?");

        // concatena a url da api com a variável carregando o conteúdo da mensagem
        $url_api = "https://api.iagentesms.com.br/webservices/http.php?metodo=envio&usuario=$usuarioIagente&senha=$senha&celular=$celular&mensagem={$mensagem}";
    
        // realiza a requisição http passando os parâmetros informados
        $api_http = file_get_contents($url_api);
    
        // imprime o resultado da requisição
        echo $api_http;
    }
}
