<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


composer global require laravel/installer

vim ~/.bashrc

export PATH="$HOME/.config/composer/vendor/bin:$PATH"


composer global require cpriego/valet-linux

valet install

valet secure



sudo cat /etc/mysql/debian.cnf

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';

FLUSH PRIVILEGES;


npm install

composer require laravel/ui

php artisan ui vue --auth

npm install && npm run dev

sudo apt install php-mysql

alias art='php artisan'

art migrate

art serve

art migrate:fresh

art ti

\App\Models\User::all();

art make:model Model

art make:model Channel -m

art migrate

art make:listener Users/CreateUserChannel

art migrate:refresh --seed

art ti>\App\Models\User::all()->load('channel');

art make:controller ChannelController --resource

composer require "spatie/laravel-medialibrary:^9.8"

art vendor:publish

art migrate

\App\Models\Channel::first()->load('media')

php artisan storage:link

art make:request Channels/UpdateChannelRequest

art make:model Subscription -m

art make:controller SubscriptionController --resource

art make:factory Subscription

art make:factory Channel

art migrate:fresh

art db:seed

nmp install numeral

art make:controller UploadVideoController

composer require pbmedia/laravel-ffmpeg

art make:job Videos/ConvertForStreaming

art queue:table

art migrate

art migrate:fresh --seed

art queue:work --sleep=0 --timeout 60000

art migrate:fresh --seed

art make:job Videos/CreateVideoThumbnail

art migrate:fresh --seed

art make:controller VideoController

art migrate:fresh --seed

npm run watch

art make:request Videos/UpdateVideoRequest

art make:model Vote -m

art migrate

art migrate:rollback

art migrate

art make:controller VoteController

art make:model Comment -m -c

art make:factory Comment

art make:factory Video

art migrate:fresh --seed

npm install vue-avatar

art ti ->  \App\Models\Comment::factory(50)->create([ 'comment_id' => 'd4d30e28-797c-44f3-b00c-29eeaa55defa']);

