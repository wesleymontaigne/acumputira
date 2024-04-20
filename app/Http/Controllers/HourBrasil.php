<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HourBrasil extends Controller
{
    public function index(){

   // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
   date_default_timezone_set('America/Sao_Paulo');
   // CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
   return  date('d-m-Y');

   
    }

    public function comparehour($atualDate,$requestData){
    // Use strtotime() function to convert 
    // date into dateTimestamp 
    $dateTimestamp1 = strtotime($atualDate); 
    $dateTimestamp2 = strtotime($requestData);
    // Compare the timestamp date  
    if ($dateTimestamp1 > $dateTimestamp2) 
    dd("Não é possivel fazer agendamento para data passadas");
    else
    return true;     
     
    }

}