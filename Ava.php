<?php

    class Produto{
        private string $descricao; 
        private string $unidadeMedida;
        private int $quantidade;
        private float $valorUnitario;

        public function __construct(string $descricao, string $unidadeMedida, int $quantidade, float $valorUnitario){
            $this->descricao = $descricao;
            $this->unidadeMedida = $unidadeMedida;
            $this->quantidade = $quantidade;
            $this->valorUnitario = $valorUnitario;
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
             * Get the value of unidadeMedida
             */
            public function getUnidadeMedida(): string
            {
                    return $this->unidadeMedida;
            }

            /**
             * Set the value of unidadeMedida
             */
            public function setUnidadeMedida(string $unidadeMedida): self
            {
                    $this->unidadeMedida = $unidadeMedida;

                    return $this;
            }

            /**
             * Get the value of quantidade
             */
            public function getQuantidade(): int
            {
                    return $this->quantidade;
            }

            /**
             * Set the value of quantidade
             */
            public function setQuantidade(int $quantidade): self
            {
                    $this->quantidade = $quantidade;

                    return $this;
            }

            /**
             * Get the value of valorUnitario
             */
            public function getValorUnitario(): float
            {
                    return $this->valorUnitario;
            }

            /**
             * Set the value of valorUnitario
             */
            public function setValorUnitario(float $valorUnitario): self
            {
                    $this->valorUnitario = $valorUnitario;

                    return $this;
            }

        public function getValorTotal(): float{ 
            
            $quantidade = $this->getQuantidade();
            $valorUnitario = $this->getvalorUnitario();
            $ValorTotal = $quantidade * $valorUnitario;
            return $ValorTotal;
        }
        
        public function descProduto(): string{
            $descricao = $this->getDescricao();
            $quantidade = $this->getQuantidade();
            $valorUnitario = $this->getValorUnitario();
            $unidadeMedida = $this->getUnidadeMedida();
            $ValorTotal = $this->getValorTotal();

            return "$descricao ($unidadeMedida) | $quantidade x $valorUnitario = $ValorTotal";

        }
    }
    
    for($i = 0; $i < 3; $i ++){
        $descricao = readline("descreva o item: ");
        $unidadeMedida = readline("\nunidade de medida (uma unidade é um...): ");
        $quantidade = readline("\nquantidade: ");
        $valorUnitario = readline("\nvalor unitário: ");
        switch ($i){
            case 0:
                $produto1 = new Produto($descricao,$unidadeMedida,$quantidade,$valorUnitario);
                break;
            case 1:
                $produto2 = new Produto($descricao,$unidadeMedida,$quantidade,$valorUnitario);
                break;
            case 2:
                $produto3 = new Produto($descricao,$unidadeMedida,$quantidade,$valorUnitario);
                break;
        }
    }

    
