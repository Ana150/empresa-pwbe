<?php

function lerArquivo($nomeArquivo){
    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

function buscarFuncionario($funcionarios, $first_name){
    $funcionariosFiltro = [];

    foreach ($funcionarios as $funcionario){
        if($funcionario->first_name == $first_name){
            $funcionariosFiltro[] = $funcionario;
        }
    }
    return $funcionariosFiltro;
}

function strpos_arr($haystack, $needle) {
    if( !is_array($needle) ) $needle = array($needle);
    $min = false;
    foreach($needle as $what) 
        if( ($pos = strpos($haystack, $what)) !== false && ($min == false || $pos < $min) ) 
            $min = $pos;
    return $min;
}
