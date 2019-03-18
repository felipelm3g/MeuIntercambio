<?php

//Recupera o diretório atual
$dir = getcwd();

//Nomea o novo diretório
$newdir = $dir . '/../user1/';

if (file_exists($newdir)) {
    echo "A pasta " . $newdir. " já existe";
} else {
    //Cria o novo diretório
    mkdir($newdir, 0777, false);
    echo "A pasta " . $newdir. " foi criada";
}

//Deleta o novo diretório
//rmdir($newdir);
?>