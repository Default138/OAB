<?php

//Classe1
class Receita
{

    private $descricao;
    private $valor;

    //Metodos
public function __toString()
    {
        $retorno = "Descrição: " . $this->descricao . " | Valor: R$ " . $this->valor . "\n";
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

//Classe2
class Despesa
{

    private $descricao;
    private $valor;

    //Metodos
public function __toString()
    {
        $retorno = "Descrição: " . $this->descricao . " | Valor: R$ " . $this->valor . "\n";
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
            $receita->setValor((float) readline("Informe o valor da Receita: "));
            array_push($receitas, $receita);
            break;

        case 2: //Add Despesa
            echo "\n";
            $despesa = new Despesa();
            $despesa->setDescricao(readline("Informe a Despesa: "));
            $despesa->setValor((float) readline("Informe o valor da Despesa: "));
            array_push($despesas, $despesa);
            break;

        case 3: //Listar Receitas
            if (count($receitas) > 0) {
                echo "\nEssas são suas receitas:\n";
                foreach ($receitas as $r)
                    echo $r;
            } else
                echo "\nVoce não tem receita\n";

            break;

        case 4: //Listar Despesa
            if (count($despesas) > 0) {
                echo "\nEssas são suas despesas:\n";
                foreach ($despesas as $d)
                    echo $d;
            } else
                echo "\nVoce não tá devendo\n";

            break;

        case 5: // Sumarizar
            $totalReceitas = 0;
            $totalDespesas = 0;

            foreach ($receitas as $r)
                $totalReceitas += $r->getValor();

            foreach ($despesas as $d)
                $totalDespesas += $d->getValor();

            $saldo = $totalReceitas - $totalDespesas;

            echo "\nTotal de receitas: R$ " . $totalReceitas . "\n";
            echo "Total de despesas: R$ " . $totalDespesas . "\n";
            echo "Saldo final: R$ " . $saldo . "\n";
            break;

        default:
            echo "Tem essa opção não mano!\n";
    }
} while ($opcao != 0);
