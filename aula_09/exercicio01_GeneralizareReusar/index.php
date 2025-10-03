<?php

$aNotas = array(4.5, 7.7, 8.9);
$aFaltas = array(1,0,0,0,1,0,1);

function calculaMedia(array $aNotas){    
    $fSomaNotas = array_sum($aNotas); 
    $fQuantNotas = array_count_values($aNotas);
    $fMedia = $fSoma / $fQuantNotas;
    return $fMedia;
};

function checaAprovacaoMedia(float $fMedia){
    $aprovacao = ($fMedia >= 7);
    return $aprovacao;
};

function calculaFrequencia(array $aFaltas){
    $totalDias = array_count_values($aFaltas);
    $totalFaltas = array_sum($aFaltas);
    $frequencia = ($totalFaltas / $totalDias);
    return $frequencia;
};

function checaAprovacaoFrequencia(){
    return $bResultApFreq;
};




?>