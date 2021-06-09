

## Sobre a aplicação

Este projeto foi feito para listar suas séries favoritas! Utilizamos o framework LARAVEL e o banco de dados MySQL.

## Como utilizar

Primeiro, certifique-se de ter instalado em sua máquina uma versão do php > 7 e o composer.

Você também vai precisar rodar o comando composer update na pasta raiz do projeto. Para isso terá que instalar o Composer caso ainda não tenha instalado (veja o tutorial do site oficial https://getcomposer.org/download/).

Depois disso, basta rodar php artisan serve na raiz do projeto. Abra o site http://localhost:8080, e você verá o projeto.

Para configurar o banco de dados, vá no arquivo .env e preencha os dados do banco.

DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

Você também precisará rodar php artisan migrate
