## Sobre o sistema

 O Gerador de Laudos Balísticos foi desenvolvido utilizando o framework Laravel. Com ele é possível gerar os laudos de eficiência e prestabilidade preenchendo os formulários necessários, sem se preocupar com a formatação do documento final.
 
 
 Copyright © Rodrigo de Freitas Camargo

## Requisitos

##### Ter instalado docker compose e git
* docker-compose build
* docker-compose up -d

## Como Usar

Tenha instalados todos os requisitos.

Clone o repositório.

Crie uma base de dados no MySql.

No repositório clonado do projeto, faça uma cópia do arquivo .env.exemple com o nome .env
   
Modifique a database, username e password do banco de dados no arquivo .env Dockerfile

 * DB_DATABASE=nome_do_bd
 * DB_USERNAME=nome_usuário
 * DB_PASSWORD=senha


No repositório, rode os seguintes comando:
 * composer update
 * php artisan key:generate
 * php artisan migrate --seed
 * php artisan serve
 
 Acesse localhost:8000

### Dados de Acesso:

##### Administrador
email: admin@mail.com
senha: abc123

##### Perito
email: perito@mail.com
senha: abc123
 



