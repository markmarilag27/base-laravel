## Developers
How to get started working on this project is below.
### Requirements
To run this application you need to have:
- [PHP](https://www.php.net/releases/8.3/en.php) Version: `^8.3`
- Exif PHP Extension
- GD PHP Extension
- Imagick PHP Extension
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Fileinfo PHP extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension


### Official and third-party libraries
List of used packages:

- [Laravel Sanctum](https://laravel.com/docs/11.x/sanctum) for SPA authentication.
- [Laravel Telescope](https://laravel.com/docs/11.x/telescope) provides insight into the requests coming into your application, exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps, and more.
- [Laravel Horizon](https://laravel.com/docs/11.x/horizon#introduction) provides a beautiful dashboard and code-driven configuration for your Laravel powered Redis queues. Horizon allows you to easily monitor key metrics of your queue system such as job throughput, runtime, and job failures.
- [S3 Driver Configuration](https://laravel.com/docs/11.x/filesystem#s3-driver-configuration) The S3 driver configuration information is located in your `config/filesystems.php` configuration file. This file contains an example configuration array for an S3 driver. You are free to modify this array with your own S3 configuration and credentials. For convenience, these environment variables match the naming convention used by the AWS CLI.
- [PHPRedis](https://github.com/phpredis/phpredis) a PHP extension for Redis
- [Laravel IDE Helper Generator](https://github.com/barryvdh/laravel-ide-helper) to generate accurate autocompletion.
- [Laravel Pint](https://laravel.com/docs/11.x/pint) is an opinionated PHP code style fixer for minimalists. Pint is built on top of PHP-CS-Fixer and makes it simple to ensure that your code style stays clean and consistent.
- [PHPStan](https://phpstan.org/) scans your whole codebase and looks for both obvious & tricky bugs. Even in those rarely executed if statements that certainly aren't covered by tests.
- [Laravel Enlighten](https://www.laravel-enlightn.com/) scans your Laravel app code to provide you actionable recommendations on improving its performance, security & more.
- [Laravel Query Builder](https://spatie.be/docs/laravel-query-builder/v5/introduction) a package allows you to filter, sort and include eloquent relations based on a request. The QueryBuilder used in this package extends Laravel's default Eloquent builder. This means all your favorite methods and macros are still available. Query parameter names follow the JSON API specification as closely as possible.
- [Laravel Media Library](https://spatie.be/docs/laravel-medialibrary/v11/introduction) a package can associate all sorts of files with Eloquent models. It provides a simple, fluent API to work with.
- [Laravel Phone](https://github.com/Propaganistas/Laravel-Phone) a phone number functionality for Laravel
- [Intervention Validation](https://validation.intervention.io/v4) is an extension library for Laravel's own validation system. The package adds over 30 additional validation rules to verify data like IBAN, BIC, ISBN, creditcard numbers and more.


### Laravel Coding Standard
You can now run the test simply typing
<pre><code>./vendor/bin/pint</code></pre>

### Static Analysis Tool
PHPStan scans your whole codebase and looks for both obvious & tricky bugs. Even in those rarely executed if statements that certainly aren't covered by tests.
<pre><code>./vendor/bin/phpstan analyse</code></pre>

### Laravel IDE Helper
This package generates helper files that enable your IDE to provide accurate autocompletion. Generation is done based on the files in your project, so they are always up-to-date.
<pre><code>php artisan ide-helper:generate</code></pre>
<pre><code>php artisan ide-helper:meta</code></pre>
I recommend to use this with VSCode extension called [Laravel Intellisense](https://marketplace.visualstudio.com/items?itemName=mohamedbenhida.laravel-intellisense)

### Getting Started
Clone the repository
```
$ git clone git@github.com:markmarilag27/snel.git
```
Copy and edit environment file
```
$ cp .env.example .env
```
Run to build the app container
```
$ docker compose build app
```
Run to boot up development, create minio bucket, dynamodb table and composer install and etc.
```
$ bash ./run-start.sh
```
Enter on container shell
```
$ bash ./run-exec-container.sh
```
### Finding bugs on your code
Run this script before commit
```
$ bash ./run-before-commit.sh
```
### Mailhog
For viewing local email [Mail & Local Development](https://laravel.com/docs/11.x/mail#mail-and-local-development)
```
http://localhost:8025
```
### Laravel telescope
```
http://localhost/telescope
```
### Laravel horizon
```
http://localhost/horizon
```
### Minio UI
```
http://localhost:9000
```
