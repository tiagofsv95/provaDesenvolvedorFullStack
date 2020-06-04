<?php

$siglas = ['ES', 'MG', 'RJ', 'SP'];
$estados = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

$estadoPorSigla = [];
// regex to get only uppercase characters
$expr = '/(?<=\s|^)[A-Z]/';

foreach($siglas as $sigla) {
  foreach($estados as $estado) {
    preg_match_all($expr, $estado, $matches);    
    $result = implode('', $matches[0]);
    if($sigla === $result) $estadoPorSigla[$sigla] = $estado;
  }
}

foreach($estadoPorSigla as $key => $value) {
  echo($key.'-'.$value."\r\n");
}
// echo(var_dump($estadoPorSigla));