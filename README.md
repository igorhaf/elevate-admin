<p align="center">

<p align="center">⛵<code>elevate-admin</code> is administrative interface builder for laravel which can help you build CRUD backends just with few lines of code.</p>



<p align="center">
    Inspired and forked from Laravel Admin, special thanks for ([z-song](https://github.com/z-song))]. 
</p>

Requirements
------------
 - PHP >= 7.0.0
 - Laravel >= 5.5.0
 - Fileinfo PHP Extension

Installation
------------

composer require igorhaf/elevate-admin


Then run these commands to publish assets and config：

php artisan vendor:publish --provider="Igorhaf\Admin\AdminServiceProvider"

After run command you can find config file in config/admin.php, in this file you can change the install directory,db connection or table names.

At last run following command to finish install.
php artisan admin:install


Open http://localhost/admin/ in browser,use username admin and password admin to login.

Configurations
------------
The file config/admin.php contains an array of configurations, you can find the default configurations in there.

Right to left support
------------
just go to this path <YOUR_PROJECT_PATH>\vendor\igorhaf\elevate-admin\src\Traits\HasAssets.php and modify $baseCss array for loading right to left (rtl) version of bootstap and AdminLTE css files.    
**bootstrap.min.css** change it to **bootstrap.rtl.min.css**    
**AdminLTE.min.css** change it to **AdminLTE.rtl.min.css**  

## Extensions

| Extension                                        | Description                              | elevate-admin                              |
| ------------------------------------------------ | ---------------------------------------- |---------------------------------------- |

## Contributors
 This project exists thanks to all the people who contribute. [[Contribute](CONTRIBUTING.md)].
<a href="graphs/contributors"><img src="https://opencollective.com/elevate-admin/contributors.svg?width=890&button=false" /></a>
 ## Backers
 Thank you to all our backers! 🙏 [[Become a backer](https://opencollective.com/elevate-admin#backer)]
 <a href="https://opencollective.com/elevate-admin#backers" target="_blank"><img src="https://opencollective.com/elevate-admin/backers.svg?width=890"></a>
...


## Planned Features
------------
elevate-admin:

- Upgrade to Laravel 12
- Replace legacy development setup with Laravel Sail
- Migrate front-end styling to Tailwind CSS
- Implement login authentication using Laravel Sanctum
- Modernize JavaScript stack with Vue.js

License
------------
elevate-admin is licensed under [The MIT License (MIT)](LICENSE).
