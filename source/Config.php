<?php

define("ROOT", "http://diario.snapsolutions.com.br");

define("SITE", "#diario");



function url(string $uri = null): string{
    if($uri){
        return ROOT."/{$uri}";
    }

    return ROOT;
}