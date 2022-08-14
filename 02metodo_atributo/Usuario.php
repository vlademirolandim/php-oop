<?php

class Usuario
{
    public string $nome;
    public int $idade;
    public string $email;

    public function cadastrar($nome, $idade, $email): string
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;

        return "O usuário <strong>{$this->nome}</strong> possui a idade <strong>{$this->idade}</strong> com e-mail <strong>" . $this->email . "</strong> cadastrado com sucesso!";
    }
}
