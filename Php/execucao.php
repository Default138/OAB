<?php

require_once("modelo/Pessoa.php");
require_once("modelo/PessoaFisica.php");
require_once("modelo/PessoaJuridica.php");

// Funcao listar pessoa
function listarPessoas($pessoas)
{
    if (count($pessoas) > 0) {
        foreach ($pessoas as $i => $pessoa) {
            if ($pessoa instanceof PessoaFisica) {
                echo ($i + 1) . "- " . $pessoa->getNome() . " - Idade: " . $pessoa->getIdade() . " - CPF: " . $pessoa->getCpf() . "\n";
            } else if ($pessoa instanceof PessoaJuridica) {
                echo ($i + 1) . "- " . $pessoa->getNome() . " - Nome fantasia: " . $pessoa->getNomeFantasia() . " - CNPJ: " . $pessoa->getCnpj() . "\n";
            }
        }
    } else {
        echo "Nenhuma pessoa cadastrada.\n";
    }
}

$pessoas = array();
$opcao = 0;

do {
    echo "\n---Menu Pessoa---\n";
    echo "1- Cadastrar pessoa física\n";
    echo "2- Cadastrar pessoa jurídica\n";
    echo "3- Listar pessoas\n";
    echo "4- Excluir pessoa\n";
    echo "0- Sair\n";
    $opcao = readline("Informe a opção: ");

    echo "\n";

    switch ($opcao) {
        case 1: //Cadastra pessoa cpf
            $pf = new PessoaFisica();
            $pf->setNome(readline("Nome: "));
            $pf->setIdade((int) readline("Idade: "));
            $pf->setCpf(readline("CPF: "));

            array_push($pessoas, $pf);
            echo "Pessoa física cadastrada com sucesso!\n";
            break;

        case 2: //Cadastra pessoa cnpj
            $pj = new PessoaJuridica();
            $pj->setNome(readline("Razão social: "));
            $pj->setNomeFantasia(readline("Nome fantasia: "));
            $pj->setCnpj(readline("CNPJ: "));

            array_push($pessoas, $pj);
            echo "Pessoa jurídica cadastrada com sucesso!\n";
            break;

        case 3: //lista pessoas
            if (count($pessoas) > 0) {
                echo "Lista de pessoas:\n";
                foreach ($pessoas as $i => $pessoa) {
                    if ($pessoa instanceof PessoaFisica) {
                        echo ($i + 1) . "- " . $pessoa->getNome() . " - Idade: " . $pessoa->getIdade() . " - CPF: " . $pessoa->getCpf() . "\n";
                    } else if ($pessoa instanceof PessoaJuridica) {
                        echo ($i + 1) . "- " . $pessoa->getNome() . " - Nome fantasia: " . $pessoa->getNomeFantasia() . " - CNPJ: " . $pessoa->getCnpj() . "\n";
                    }
                }
            } else {
                echo "Nenhuma pessoa cadastrada.\n";
            }
            break;

        case 4: //Exlui pessoa
            listarPessoas($pessoas);
            if (count($pessoas) > 0) {
                $indice = (int) readline("Informe o índice da pessoa para excluir: ");
                if ($indice > 0 && $indice <= count($pessoas)) {
                    array_splice($pessoas, $indice - 1, 1);
                    echo "Pessoa excluída com sucesso!\n";
                } else {
                    echo "Índice inválido!\n";
                }
            }
            break;

        case 0:
            echo "Programa morreu\n";
            break;

        default:
            echo "Tem essa opção não\n";
    }
} while ($opcao != 0);
