# Sistema SOS PET

Sistema utilizando o framework Laravel para o controle de animais para ONG's.

# Requisitos Minímos

1. PHP
2. MYSQL


# Instalação do Sistema

1. Baixe o diretório do sistema
2. Crie um banco de dados no local que será instalado o sistema
3. Faça a importação do banco com o arquivo **db.zip**
4. Renomeie o arquivo **.env.example** por **.env**
5. Edite o arquivo **.env** com os dados de conexão do banco
6. Abra o **Prompt de Comandos** e vá para a raiz do diretório do sistema, exemplo:

```
cd C:\Users\Your_User\projeto
```

7. Depois rode o comando abaixo para atualizar o composer

```
composer update
```

8. Gere uma nova chave para o projeto com o código abaixo

```
php artisan key:generate
```

9. Em seu navegador acesse o sistema, exemplo:

```
http://localhost/projeto/public/
```

**obs:** O index se encontra no /public

# Dados de Acesso
**E-mail:** admin@admin.com

**Senha:** 123456
