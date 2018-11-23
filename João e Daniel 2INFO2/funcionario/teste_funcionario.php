<?php

    require __DIR__."/Funcionario.php";
    require __DIR__."/Data.php";

    
    $Usuario1 = new Funcionario();
    $Usuario2 = new Funcionario();

		//      --- Usuario1 ---
 
    $Usuario1->departamento = "Balconista";
    $Usuario1->salario = 1500;
    $Usuario1->CPF = "245.346.234-23";

    $Data_Contrato = new Data();
    $Data_Contrato->dia = 8;
    $Data_Contrato->mes = 8;
    $Data_Contrato->ano = 2008;

    $Usuario1->Data_Contrato = $Data_Contrato;

    $Salario_Aumento = $Usuario1->Acrecimo();
    $Salario_Anual = $Usuario1->Recebido_Ano();

    echo $Usuario1;
    echo "\n \n";


    	//      --- Usuario2 ---

    $Usuario2->departamento = "Estagiário";
    $Usuario2->salario = 2300;
    $Usuario2->CPF = "653.236.532-87";

    $Data_Contrato2 = new Data();
    $Data_Contrato2->dia = 20;
    $Data_Contrato2->mes = 8;
    $Data_Contrato2->ano = 2013;

    $Usuario2->Data_Contrato = $Data_Contrato;

    $Salario_Aumento = $Usuario2->Acrecimo();
    $Salario_Anual = $Usuario2->Recebido_Ano();

    echo $Usuario2;
    echo "\n \n";




