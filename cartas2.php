<?php

//Classes (adicionei as classe dica)

class Carta
{
    private int $numero;
    private string $nome;
    private string $dica;

    public function __construct(int $numero, string $nome, string $dica)
    {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->dica = $dica;
    }

    //Get's e Set's

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of dica
     */
    public function getDica(): string
    {
        return $this->dica;
    }

    /**
     * Set the value of dica
     */
    public function setDica(string $dica): self
    {
        $this->dica = $dica;

        return $this;
    }

    public function __toString(): string
    {
        return "Carta {$this->numero} - {$this->nome}";
    }
}

//Programa Principal

// Criando o baralho com 7 cartas (mínimo exigido)
$baralho = array(
    new Carta(1, "Ás de Copas", "É a carta mais baixa do baralho"),
    new Carta(2, "Dois de Ouros", "Representa o número dois"),
    new Carta(3, "Três de Espadas", "Tem o formato de um trevo"),
    new Carta(4, "Quatro de Paus", "Número par e baixo"),
    new Carta(5, "Cinco de Copas", "Está no meio do baralho"),
    new Carta(6, "Seis de Ouros", "Número antes do sete"),
    new Carta(7, "Sete de Espadas", "A carta mais alta aqui")
);

// Sorteando uma carta aleatória para ser adivinhada
$cartaSorteada = $baralho[array_rand($baralho)];
$pontuacao = 100; // Pontuação inicial (reduz a cada erro)
$tentativas = 0;
$acertou = false;

echo "=== JOGO DE ADIVINHAÇÃO DE CARTAS ===\n";
echo "Tente adivinhar qual carta foi sorteada!\n\n";

// Mostrando dica da carta sorteada (funcionalidade que eu add)
echo "DICA: " . $cartaSorteada->getDica() . "\n\n";

do {
    // Mostrando todas as cartas disponíveis
    echo "Cartas no baralho:\n";
    foreach ($baralho as $carta) {
        echo $carta . "\n";
    }

    // Recebendo palpite do usuário
    $palpite = (int) readline("\nDigite o NÚMERO da carta que você acha que foi sorteada: ");
    $tentativas++;

    // Verificando se o palpite está correto
    if ($palpite == $cartaSorteada->getNumero()) {
        $acertou = true;
    } else {
        $pontuacao -= 10; // Reduz a pontuação a cada erro
        echo "\nErrou! Tente novamente.\n";
        echo "Pontuação atual: $pontuacao\n\n";

        // Opção para desistir (achei legal colocar)
        $desistir = readline("Quer desistir? (Sim/Não): ");
        if (strtolower($desistir) == 'Sim') {
            break;
        }
    }
} while (!$acertou);

// Mostrando resultado final
if ($acertou) {
    echo "\nPARABÉNS! Você acertou!\n";
    echo "Carta sorteada: " . $cartaSorteada . "\n";
    echo "Tentativas: $tentativas\n";
    echo "Pontuação final: $pontuacao\n";
} else {
    echo "\nVocê desistiu... A carta sorteada era: " . $cartaSorteada . "\n";
}

echo "\nFim do jogo!\n";
