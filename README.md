# eduteka-annotation
Simulando um serviço de anotações com Laravel(PHP). Link da série de vídeos completa: https://youtu.be/8k5Rn2DF_Xw


Lembre-se de rodar os seguintes comandos para testar o projetinho:
- composer install (Instalar bibliotecas de terceiros)
- php artisan migrate (Criar migrations)
- php artisan db:seed (Popular migrations com as seeders)
- php artisan serve (Rodar a aplicação laravel)
- php artisan icons:cache (Faz o cache dos ícones utilizados no projeto, é extremamente importante rodar esse comando para melhorar a perfomance)

- Criar arquivo .env (utilizar o env.example como base)
- Se necessário criar chave da aplicação: php artisan key:generate

Obs: Se vocês adicionarem novos ícones na aplicação, seria necessário limpar e refazer o cache dos ícones. Para limpar o comando é esse: php artisan icons:clear
