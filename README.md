# Teste Simers
### _Teste técnico para vaga desenvolvedor PHP pleno_

## Descrição
Crie uma aplicação simples de cadastro de usuários que permita as seguintes operações:
-	Criar um novo usuário
-	Campos necessários: Nome, CPF, E-mail, Data de Nascimento, Telefone, Senha.
-	A senha deve ser criptografada antes de ser salva no banco.
-	Listar todos os usuários cadastrados
-	Exibir os usuários com seus dados (exceto a senha) em uma tabela.
-	Atualizar um usuário
-	Deve ser possível selecionar um usuário da lista para editar seus dados (Nome, E-mail, Data de Nascimento, Telefone, Senha).
-	Excluir um usuário
-	Deve ser possível excluir um usuário da lista.
Requisitos:
-	Usar PHP puro (sem frameworks) ou com um framework que utilizamos (ex:Yii, Yii2, Laravel, Flutter) se preferir.
-	Conectar a um banco de dados MySQL para armazenar os dados.
-	Usar PDO para manipulação de banco de dados.
-	Implementar validações básicas (ex: checar se os campos obrigatórios estão preenchidos, se o e-mail é válido, etc.).
-	Criar um layout simples usando HTML e CSS (opcional: usar Bootstrap para um design mais rápido).
-	Usar o padrão de arquitetura MVC (Model-View-Controller) para organizar o código, se possível.
-	Documentar brevemente o código com comentários explicativos.

## Tecnologias usadas

- php 8.2
- Laravel 11
- Bootstrap 5
- JQuery 3

## Instalação

```sh
cp .env.example .env
composer install 
php artisan migrate
php artisan serve
```

## Plugins
- JQuery Mask
