- Criar um Provider
php artisan make:provider ValidationServiceProvider

- Criando um middleware Before
php artisan make:middleware CheckTasks

- Criando um middleware After
php artisan make:middleware AlertTalks

- Instalação do redis

exemplo controller: session(['cursos' =>  ['Laravel', 'Slim']]);

no terminal: keys *

para ver os dados já gravados no redis: 
mget laravel_cache:Z1AhTtnF6XPRxnDBnxX0ZLyJ8g6SGL3O4fr7pRxJ

https://www.digitalocean.com/community/tutorials/how-to-install-and-use-redis


Trabalhando com sessões precisamos manipular os dados

put('key', 'value') : Inclui um novo item na sessão
get('key') : recupera um valor gravado na sessão a partir da chave
has('key') : Verifica se existe o item key em nossa session e se não é null
exists('key') : Verifica se o item key existe na sessão
push('key.array', 'field') : Inclui um novo item em um array de Session já existente
forget('key') : Remove o item key da session
flush() : Remove todos os itens da session
regenerate() : Regenera o ID interno da session

Repositório GIT liguagem portugues do laravel
https://github.com/enniosousa/laravel-5.5-pt-BR-localization


- Emmet - Pacote ex: div.row + tab faz o código
emmet.io

- Criar link para pasta upload
php artisan storage:link
exemplo:
<img src="{{ asset('storage/' . str_after($client->photo, 'public/'))  }}"
alt="" width="600">

- Listar todas a s rotas do projeto
php artisan route:list

- Executando migrations
php artisan migrate

-- Criar uma tabela


-- Alterar uma tabela
php artisan make:migration alter_clients_table

- Criar um model
php artisan make:model Client

- Criar model e migration juntos
php artisan make:model Task -m

- Criar um controller
php artisan make:controller ClientController

- Criar um Cotroller Resource - Padrão Laravel de métodos
php artisan make:controller ClientController --resource

- Gerando o layout padrão do Laravel
php artisan make:auth

- Ferramenta: VS CODE

Instalando extensões:

PHP intelephense
PHP DocBlocker (Neil Brayfield) – Automatiza a criação de comentários do PHPDoc
Laravel 5 Snippets (Winnie Lin) – Snippets que facilitam o uso das facades do Laravel
Laravel Blade Snippets (Winnie Lin) – Snippets que facilitam do template engine Blade
Laravel Helpers (Rafa-Acioly) – Auto complete para os helpers do Laravel
Laravel Artisan (Ryan Naddy) – Permite executar os comandos do Artisan de forma fácil direto no editor
Laravel goto View (Codingyu) – Permite abrir as views referenciadas usando Ctrl
Laravel-goto-controller (Stef-k) – Permite abrir os controllers a partir das rotas de forma fácil
IntelliSense for CSS class name (Zignd) – Analisa arquivos CSS e disponibiliza autocomplete das classes

-Baixar i iniciar laravel

composer create-project --prefer-dist laravel/laravel blog "5.5.*"
php artisan serve


------------------------------------------------------------------------------------------------------

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
