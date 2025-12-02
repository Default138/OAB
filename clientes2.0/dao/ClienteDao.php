<?php 

require_once("modelo/Cliente.php");
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("util/Conexao.php");

class ClienteDao{

    public function inserir(Cliente $cliente)
    {
        $sql = "INSERT INTO clientes
        (tipo, nome_social, email, nome, cpf, razao_social, cnpj)
        Values
        (?, ?, ?, ?, ?, ?, ?)";

        //arma a conexão
        $conn = Conexao::getConexao();

        //statement: preparação pro comando a ser executado no mysql
        $stmt = $conn->prepare($sql);

        //só se for pessoa física
        if($cliente instanceof ClientePF)
        {
            $stmt->execute(array(
                $cliente->getTipo(), 
                $cliente->getNomeSocial(),
                $cliente->getEmail(),
                $cliente->getNome(),
                $cliente->getCpf(),
                null, 
                null
            ));
        }

        //só se for pessoa jurídica
        if($cliente instanceof ClientePJ)
        {
            $stmt->execute(array(
                $cliente->getTipo(), 
                $cliente->getNomeSocial(),
                $cliente->getEmail(),
                null, 
                null,
                $cliente->getRazaoSocial(),
                $cliente->getCnpj()
            ));
        }
        
    }

    public function listar()
    {
        $sql = "SELECT * FROM clientes";
        
        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll(); 

        //Converter os dados da array pra um objeto

        $clientes = array();
        foreach($dados as $d){
            $cliente = null;

            if($d['tipo'] == 'F'){
                $cliente = new ClientePF();
                $cliente->setNome($d['nome']);
                $cliente->setCpf($d['cpf']);

            }else{
                $cliente = new ClientePJ();
                $cliente->setRazaoSocial($d['razao_social']);
                $cliente->setCnpj($d['cnpj']);

            }

            $cliente->setId($d['id']);
            $cliente->setNomeSocial($d['nome_social']);
            $cliente->setEmail($d['email']);
            array_push($clientes, $cliente);

        }

        return $clientes;
    }

    public function buscarPorId($id){
        $sql = "SELECT * FROM clientes WHERE id = ?";

        //arma a conexão
        $conn = Conexao::getConexao();

        //statement: preparação pro comando a ser executado no mysql
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $dado = $stmt->fetch();
        
        $cliente = null;

        if($dado['tipo'] == 'F'){
                $cliente = new ClientePF();
                $cliente->setNome($dado['nome']);
                $cliente->setCpf($dado['cpf']);

            }else{
                $cliente = new ClientePJ();
                $cliente->setRazaoSocial($dado['razao_social']);
                $cliente->setCnpj($dado['cnpj']);

            }

            $cliente->setId($dado['id']);
            $cliente->setNomeSocial($dado['nome_social']);
            $cliente->setEmail($dado['email']);

            return $cliente;

    }

}