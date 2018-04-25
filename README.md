# Sistema SOS PET

Sistema utilizando o framework Laravel para o controle de animais para ONG's.

# Requisitos Minímos

1. PHP
2. MYSQL


# Instalação do Sistema

1. Baixe o diretório do sistema
2. Crie um banco de dados no local que será instalado o sistema
3. Renomeie o arquivo **.env.example** por **.env**
4. Edite o arquivo **.env** com os dados de conexão do banco
5. Abra o **Prompt de Comandos** e vá para a raiz do diretório do sistema, exemplo:

```
cd C:\Users\Your_User\projeto
```

6. Em seguida rode o comando abaixo para importar o banco

```
php artisan migrate
```

7. Em seu navegador acesse o sistema, exemplo:

```
http://localhost/projeto/public/
```

**obs:** O index se encontra no /public

# Dados de Acesso
**E-mail:** admin@admin.com

**Senha:** 123456
