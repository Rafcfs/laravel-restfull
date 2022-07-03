# Teste Resolvido - RestFul API com Laravel

## Rafael Carrasqueira Ferreira Santos

### Versões:

#### PHP 8.1.2
#### Composer version 2.3.7
#### Laravel Framework 9.19.0

### Conexão Banco de Dados:

Desenvolvido utilizando MySQL.
Para alterar a conexão, altere em **"./restfull-api/.env"**. Após a TAG **TODO**
Depois de conectado, execute **"php artisan migrate"** para carregar as tabelas

### Testes

Durante o desenvolvimento, fora utilizado a Plataforma **Postman** para a execução e testes dos endpoints da api.

#### Execute **php artisan serve** para iniciar o servidor

### Rotas

Com o host padrão "http://127.0.0.1:8000", teremos as rotas para a execução das api:

#### http://localhost:8000/api/produtos
#### http://localhost:8000/api/campanhas
#### http://localhost:8000/api/descontos
#### http://localhost:8000/api/grupos
#### http://localhost:8000/api/cidades

Acrescente um Id após as rotas para selecionar, editar e deletar um dado em expecífico.
Por exemplo: 
http://localhost:8000/api/produtos/1

