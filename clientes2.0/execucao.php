<?php

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDao.php");

system("clear");

//Teste da conexão com o banco
/*
require_once("util/Conexao.php");
$pdo = Conexao::getConexao();
print_r($pdo);
exit;
*/

do {
    echo "\n\n----CADASTRO DE CLIENTES----\n";
    echo "1- Cadastrar Cliente PF\n";
    echo "2- Cadastrar Cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Cliente\n";
    echo "5- Excluir Cliente\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: \n");
    switch ($opcao) {
        case 1:
            $cliente = new ClientePF();
            $cliente->setNome(readline("Nome: "));
            $cliente->setNomeSocial(readline("Nome Social: "));
            $cliente->setEmail(readline("Email: "));
            $cliente->setCPF(readline("CPF: "));

            //persistir o objeto no banco de dados
            //tem que salvar o nosso objeto lá no banco em formato de tabela
            //esse processo é a persistência:

            //pacote DAO = data access object
            $dao = new ClienteDao;
            $dao->inserir($cliente);
            echo("Cliente inserido com sucesso.\n");

            break;

        case 2:
            
            $cliente = new clientePJ();
            $cliente->setNomeSocial(readline("Nome social: "));
            $cliente->setEmail(readline("Email:"));
            $cliente->setRazaoSocial(readline("Razão social: "));
            $cliente->setCnpj(readline("CNPJ: "));

            //agora a persistência pro banco de dados

            $dao = new ClienteDao;
            $dao->inserir($cliente);
            echo("Cliente inserido com sucesso.\n");

            break;

        case 3:
            echo "\nLista de clientes:\n";
            $dao = new ClienteDao;
            $clientes = $dao->listar();
            
            foreach($clientes as $c)
            {
                echo $c . "\n";
            }

            break;

        case 4:
            $dao = new ClienteDao;
            $clientes = $dao->listar();
            
            foreach($clientes as $c)
            {
                echo $c->getId() . " - " . $c->getNomeSocial() . "\n";
            }

            $id = readline("Informe o Id: ");

            $cliente = $dao->buscarPorId($id);

            print("\n".$cliente."\n");
            break;

        case 5:
            echo "Não implementado!\n";
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);
