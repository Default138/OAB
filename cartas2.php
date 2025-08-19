<?php

//Classes (adicionei as classe dica)

class Carta
{
    private $numero;
    private $nome;
    private $dica;

    //Metodo Construct
    
    public function __construct($numero, $nome, $dica)
    {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->dica = $dica;
    }

    //To string
    
    public function __toString(): string
    {
        return "Carta {$this->numero} - {$this->nome}";
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
}

//Programa Principal

//Criando o baralho com 7 cartas
$baralho = array(
    new Carta(1, "Ás de Copas", "É a carta mais baixa do baralho"),
    new Carta(2, "Dois de Espadas", "Um duelo de espadas"),
    new Carta(3, "Três de Ouros", "OS trevos tem esse numero de folhas"),
    new Carta(4, "Quatro de Paus", "Número par e baixo"),
    new Carta(5, "Cinco de Copas", "Está no meio do baralho"),
    new Carta(6, "Seis de Ouros", "Uma carta com bastante ouro"),
    new Carta(7, "Sete de Espadas", "Dizem ser o número da sorte")
);

//Sortea a carta
$cartaSorteada = $baralho[array_rand($baralho)]; //array rand é literalmet array aleatorio
$pontuacao = 100; //Pontuação inicial (reduz a cada erro)
$tentativas = 0;
$acertou = false;

echo "=== JOGO DE ADIVINHAÇÃO DE CARTAS ===\n";
echo "Tente adivinhar qual carta foi sorteada!\n\n";

//Mostra uma dica (funcionalidade que eu add)
echo "DICA: " . $cartaSorteada->getDica() . "\n\n";

do {
    //Mostra a cartas
    echo "Cartas no baralho:\n";
    foreach ($baralho as $carta) {
        echo $carta . "\n";
    }

    //Rece o chute
    $palpite = readline("\nDigite o NÚMERO da carta que você acha que foi sorteada: ");
    $tentativas++;

    //Ve se ta certo
    if ($palpite == $cartaSorteada->getNumero()) {
        $acertou = true;
    } else {
        $pontuacao -= 10; //Diminui a pontação
        echo "\nErrou! Tente novamente.\n";
        echo "Pontuação atual: $pontuacao\n\n";
    }
} while (!$acertou); 

//Mostra o resultado final
    echo "\nPARABÉNS! Você acertou!\n";
    echo "Carta sorteada: " . $cartaSorteada . "\n";
    echo "Tentativas: $tentativas\n";
    echo "Pontuação final: $pontuacao\n";

echo "\nFim do jogo!\n";
