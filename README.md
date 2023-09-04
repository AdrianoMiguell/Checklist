
# Checklist Sistem 

Sistema de checklist para organização de tarefas diárias, semanais mensais. Feito em laravel.
<p align="right"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="150" alt="Laravel Logo"></a></p>

## Inicio

O github disponibiliza de diversos modos para fazer upload do codigo. 
<p align="center"> 
<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/checklist-git-upload-code.png" width="400" alt="Upload code">
</p>
Aqui estão duas dessas formas:
<p style="display: block"> 
   <strong> 1 - </strong>  Vá até uma pasta reservada para o projeto e use o comando no "git bash" : 
    
    git clone https://github.com/AdrianoMiguell/Checklist.git

</p>
<p style="display: block"> 
    <strong> 2 - </strong>  Baixe o arquivo .zip do código, clicando no botão "Download .ZIP"
</p>

## Pré Requisitos

``` Ter suporte a linguagem PHP em sua maquina ```

``` Ter um editor de código (Ex.: Visual Studio Code) ```

``` Ter um sistema de hospedagem local, com suporte a banco de dados (Ex.: Xampp ) ```

``` Ter instalado em sua maquina o Gerenciador de dependências Composer ```

``` Ter instalado em sua maquina o framework Laravel ```


## Preparando ambiente

-- Abra o terminal, e na pasta do projeto, execute o código: ``` composer install ```

-- Ligue o seu servidor local apache e o servidor de banco de dados

-- Acesse a sua ferramenta de banco de dados, e crie um banco de dados com um nome que desejar (Ex: checklist);

<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/checklist-create-database.png" width="600" alt="criando o database" />

-- Agora, vá a raiz do código, copie um arquivo chamado  ``` .env.example ```  e cole-o nesse mesmo local.

-- Encontre esse trecho do código ``` DB_DATABASE ```  e troque o nome do banco, pelo nome do banco de dados que você acabou de criar. 

<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/copiar-colar-.env-e-renomear-DB_DATABASE.png" width="600" alt="criando o database" />

-- Vá ao terminal e digite este código para que as tabelas do banco sejam construidas altomaticamente:  ``` php artisan migrate ``` .  
As seguintes tabelas devem aparecer no banco de dados.

<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/checklist-tabelas-criadas.png" width="600" alt="criando o database" />

-- Agora, execute esse código no terminal, para geração de uma chave criptografada exigida pelo artisan: ``` php artisan key:generate ```

-- Finalmente, execute o código no terminal, para visualização do sistema:  ``` php artisan serve ``` . 

<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/checklist-view-sistem.png" alt="visualização do sistema" />






<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

*/
