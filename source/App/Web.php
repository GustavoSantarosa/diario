<?php

namespace Source\App;

use League\Plates\Engine;

class Web{

    private $view;

    public function __construct(){
        $this->view = engine::create(__DIR__."../../theme","php");
    }

    public function home($data): void{
        $users = (new User())->find()->fetch(true);
        echo $this->view->render("home",[
            "title" => "Home | ".SITE,
            "users" => $users
        ]);
    }

    public function contact($data): void{
        echo "<h1> Contato</h1>";
        var_dump($data);

        $url = URL_BASE;
        require __DIR__."/../../views/teste.phtml";
    }

    public function error(array $data): void{
        echo "<h1> Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }
}