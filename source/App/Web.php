<?php

namespace Source\App;

use League\Plates\Engine;

class Web{

    private $view;

    public function __construct(){
        //$this->view = engine::create(__DIR__."../../theme","php");
    }

    public function home($data): void{

        echo "<h1> home</h1>";
        var_dump($data);
    }

    public function contact($data): void{
        echo "<h1> Contato</h1>";
        var_dump($data);

        
        require __DIR__."/../../views/teste.phtml";
    }

    public function error(array $data): void{
        echo "<h1> Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }
}