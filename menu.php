<?php

//Classe1
class Receita
{

    private $descricao;
    private $valor;

    //Metodos
    public function __toString()
    {
        $retorno =
        $this->descricao;
        $this->valor;
        return $retorno;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

//Clase2
class Despesa
{

    private $descricao;
    private $valor;

    //Metodos
    public function __toString()
    {
        $retorno =
        $this->descricao;
        $this->valor;
        return $retorno;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

//Programa principal:

$opcao = 0;

//Array
$receitas = array();
$despesas = array();

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Add Receita\n";
    echo "2- Add Despesa\n";
    echo "3- Listar Receitas\n";
    echo "4- Listar Despesas\n";
    echo "5- Sumarizar\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {

        case 0: //Só mata o programa
            echo "Progama Morreu :P\n";
            break;

        case 1: //Add Receita
            echo "\n";
            $receita = new Receita();
            $receita->setDescricao(readline("Informe a Receita: "));
            array_push($receitas, $receita);
            break;

        case 2: //Add despesa
            echo "\n";
            $despesa = new Despesa();
            $despesa->setValor(readline("Informe a Despesa: "));
            array_push($despesas, $despesas);
            break;

        case 3: //Listar Receitas
            if (count($receitas) > 0) {
                echo "\nEssas são suas recitas:\n";
                foreach ($receitas as $r)
                    echo $r;
            } else
                echo "\nVoce não tem receita\n";

            break;

        case 4: //Listar Despesa
            if (count($despesas) > 0) {
                echo "\nÉ isso que voce tá devendo:\n";
                foreach ($despesas as $d)
                    echo $d;
            } else
                echo "\nVoce não tá devendo\n";

            break;

        case 5: // Sumarizar
            $totalReceitas = 0;
            $totalDespesas = 0;
            // Calcular total de receitas
            foreach ($receitas as $r) {
                $totalReceitas += $r->getValor();
            }
            // Calcular total de despesas
            foreach ($despesas as $d) {
                $totalDespesas += $d->getValor();
            }
            // Calcular saldo
            $saldo = $totalReceitas - $totalDespesas;

            //Exibir Saldo
            /*
            echo "Saldo: R$: " . number_format($saldo,',', '.') . "\n";
            echo "Total de receitas: R$: " . number_format($totalReceitas, ',', '.') . "\n";
            echo "Total de despesas: R$: " . number_format($totalDespesas, ',', '.') . "\n";

            break;
            */


        default:
            echo "Tem essa opção não mano!\n";
    }
} while ($opcao != 0);









/* 
Com IF e Else seria

If (bla bla bla bla)

welse if(bla bla bla bla bla)

welse if(bla bla bla bla bla)

welse if(bla bla bla bla bla)

welse
*/