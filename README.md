
# Setup Docker Laravel 11 com PHP 8.3
[Assine a Academy, e Seja VIP!](https://academy.especializati.com.br)

### Passo a passo
Clone Repositório
```sh
git clone -b laravel-11-with-php-8.3 https://github.com/especializati/setup-docker-laravel.git app-laravel
```
```sh
cd app-laravel
```

Reiniciar repositorio git
```sh
rm -rf .git
```
```sh
git init
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Mudar/adicionar valores no campos dentro do arquivo .env
```sh
DB_CONNECTION=banco_do_conatiner_que_subiu
DB_HOST=nome_do_conatiner_de_banco_de_dados
DB_USERNAME=nome_db
DB_PASSWORD=senha_db
```

Mudar nome do user no Dockerfile
```sh
user=nome_que_quiser
```

Suba os containers do projeto
```sh
docker compose up -d
```

Acesse o container app
```sh
docker compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Configurar cache
```sh
php artisan config:cache
```

Rodar as migrations
```sh
php artisan migrate
```

Intalando o breeze (pacote que entrega autenticação de usuário)
```sh
composer require laravel/breeze --dev
```
```sh
php artisan breeze:install
```

Fora do container. Intalar todas as dependencias javascript do blade
```sh
npm install
```
```sh
npm run build
```
ou
```sh

npm run dev
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)
