<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = array(
            [
                "title" => "Laravel ou Zend Framework?",
                "subtitle" => "Veja as diferenças destes frameworks do ponto de vista do autor",
                "author" => "Danilo Dorotheu",
                "date" => "06 de Junho de 2016"
            ],
            [
                "title" => "Laravel em alta!",
                "subtitle" => "Pesquisas mostram que codificar utilizando o Framework Laravel pode ser muito produtivo",
                "author" => "Danilo Dorotheu",
                "date" => "06 de Junho de 2016"
            ],
            [
                "title" => "Dicas de AngularJS",
                "subtitle" => "Confira as dicas de AngularJS e dê um upgrade na sua aplicação",
                "author" => "Danilo Dorotheu",
                "date" => "06 de Junho de 2016"
            ],
            [
                "title" => "Me formei. E agora?",
                "subtitle" => "Principais dúvidas dos recém formados, solucionados em um único tópico",
                "author" => "Danilo Dorotheu",
                "date" => "06 de Junho de 2016"
            ],
        );
        return view('index.index', compact('posts'));
    }
}
