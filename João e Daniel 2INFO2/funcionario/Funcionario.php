<?php
class Funcionario{

    public $departamento;
    public $salario;
    public $CPF;
    public $Data_Contrato;

    public function Acrecimo(){
        $Acrescimo_Bonus = $this->salario * 0.1;
        $this->salario = $this->salario + $Acrescimo_Bonus;
    }

    public function Recebido_Ano(){
        $Total_Ano = $this->salario * 13;
        $this->ganhoAnual = $Total_Ano;
    }

    public function mostra(){
        return "O funcionário do departamento {$this->departamento},desde {$this->Data_Contrato->mostra()}, possui salário de R$ {$this->salario}";
    }

    public function __toString() {
        return $this->mostra();
    }
}

