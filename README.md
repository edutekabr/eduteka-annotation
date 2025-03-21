# eduteka-annotation
Simulando um serviço de anotações (organização da rotina semanal).


Lembre-se de rodar os seguintes comandos para testar o projetinho:
- composer install (Instalar bibliotecas de terceiros)
- php artisan migrate (Criar migrations)
- php artisan db:seed (Popular migrations com as seeders)
- php artisan serve (Rodar a aplicação laravel)
- php artisan icons:cache (Faz o cache dos ícones utilizados no projeto, é extremamente importante rodar esse comando para melhorar a perfomance da aplicação.)

- Criar arquivo .env (utilizar o env.example como base)
- Se necessário criar chave da aplicação: php artisan key:generate

Obs: Se vocês adcionarem novos ícones na aplicação é necessário limpar e refazer o cache dos ícones. Para limpar o comando é esse: php artisan icons:clear
