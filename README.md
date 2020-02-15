## Laravel on Steroids 
I use the following packages almost on any project, so I might as well create a boilerplate. 

#### Production Packages
- laravel/horizon
- laravel/telescope
- predis/predis
- guzzlehttp/guzzle
- nwidart/laravel-modules
- spatie/laravel-backup
- spatie/laravel-cors
- spatie/laravel-medialibrary
- spatie/laravel-query-builder
- spatie/laravel-activitylog
- spatie/laravel-fractal
- spatie/laravel-permission
- tylercd100/lern  `saves exceptions into database and notifies`
- tymon/jwt-auth 

#### Dev Packages
- barryvdh/laravel-debugbar
- barryvdh/laravel-ide-helper
- infyomlabs/laravel-generator 
- beyondcode/laravel-er-diagram-generator
- jeroen-g/laravel-packager
- themsaid/laravel-mail-preview `mail driver for saving rendered output as file`
- asvae/laravel-api-tester 

and some more depending on my mood. 


#### Composer 
Avoid composer's memory limit;
```
php -d memory_limit=-1 composer.phar update
```
