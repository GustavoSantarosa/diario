<?php

namespace Source\App;

class Test{
    public  function home($data){
        echo "<h1> Home</h1>";
        var_dump($data);
    }

    public  function test($data){
        echo "<h1> Test</h1>";
        var_dump($data);

        $url = URL_BASE;
        require __DIR__."/../../views/teste.phtml";
    }

    public  function error($data){
        echo "<h1> Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }
}