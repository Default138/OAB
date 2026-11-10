# OAB

Exercícios de **orientação a objetos em PHP**, feitos durante as aulas. Cada pasta é um programa pequeno que roda no terminal e pratica um conceito.

## O que tem aqui

| Pasta | Conceito praticado |
|---|---|
| `Pessoas` | Herança: `Pessoa`, com `PessoaFisica` e `PessoaJuridica` |
| `bio` | Interface e polimorfismo: `IFormaGeometrica`, com `Circulo`, `Quadrado` e `Retangulo` |
| `mago` | Herança e composição: `Combatente`, `Mago`, `Curandeiro` e `Poder` |
| `clientes2.0` | Classe abstrata `Cliente` (com `ClientePF` e `ClientePJ`) e cadastro no **MySQL** com **DAO** (`ClienteDao`, `Conexao` e `sql_banco.sql`) |
| `Aula3`, `Aula4` | Atividades das aulas |
| `menu.php`, `menu2.php`, `cartas2.php`, `Ava.php` | Exercícios soltos com menu no terminal |

## Como executar

Precisa do PHP instalado (o do XAMPP serve). No terminal, dentro desta pasta:

```bash
php Pessoas/execucao.php
php bio/execut.php
php mago/execucao.php
php clientes2.0/execucao.php   # precisa do banco (veja abaixo)
```

No Windows com XAMPP, use `C:\xampp\php\php.exe` no lugar de `php`.

### Banco de dados (somente `clientes2.0`)

1. Inicie o MySQL no XAMPP.
2. Importe `clientes2.0/sql_banco.sql` no phpMyAdmin.
3. Confira os dados de conexão em `clientes2.0/util/Conexao.php`.

## Tecnologias

PHP (orientação a objetos), MySQL, PDO
