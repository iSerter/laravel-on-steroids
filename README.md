# Laravel on Steroids 
I use the following packages quite often, so here's a giant boilerplate. 

```$xslt
composer create-project --prefer-dist iserter/laravel-on-steroids yourproject
```

#### Production Packages
- laravel/horizon
- laravel/telescope
- guzzlehttp/guzzle
- nwidart/laravel-modules
- qcod/laravel-imageup
- spatie/laravel-backup
- spatie/laravel-cors
- spatie/laravel-cookie-consent
- spatie/laravel-medialibrary
- spatie/laravel-query-builder
- spatie/laravel-activitylog
- spatie/laravel-permission
- spatie/laravel-uptime-monitor
- spatie/laravel-responsecache
- jdavidbakr/mail-tracker
- predis/predis
- tylercd100/lern  `saves exceptions into database and sends out notifications`
- tymon/jwt-auth 
- lorisleiva/laravel-deployer

#### Dev Packages
- barryvdh/laravel-debugbar
- barryvdh/laravel-ide-helper
- infyomlabs/laravel-generator 
- beyondcode/laravel-er-diagram-generator `brew install graphviz` or `sudo apt-get install graphviz`
- jeroen-g/laravel-packager
- themsaid/laravel-mail-preview `mail driver for saving rendered output as file`
- asvae/laravel-api-tester 

and some more depending on my mood. 


#### Composer 
Avoid composer's memory limit;
```
php -d memory_limit=-1 composer.phar update
```

#### JWT Auth
Don't forget to create a jwt signer key.
```$xslt
php artisan jwt:secret
```

#### Set up SYSADMIN Email Address
Set `SYSADMIN_MAIL_ADDRESS` in `.env`

#### Image Optimizers

Ubuntu
```$xslt
sudo apt-get install jpegoptim
sudo apt-get install optipng
sudo apt-get install pngquant
sudo npm install -g svgo
sudo apt-get install gifsicle
sudo apt-get install webp
```
Mac OS
```$xslt
brew install jpegoptim
brew install optipng
brew install pngquant
brew install svgo
brew install gifsicle
brew install webp
```
CentOS/Fedora/RHEL
```$xslt
sudo dnf install epel-release
sudo dnf install jpegoptim
sudo dnf install optipng
sudo dnf install pngquant
sudo npm install -g svgo
sudo dnf install gifsicle
sudo dnf install libwebp-tools
```

### Docker

##### Compose
```$xslt
docker-compose up -d
```

##### SSH into a container
```$xslt
sudo docker exec -it CONTAINER_ID /bin/sh 
```

##### Kill all running containers
```$xslt
docker container kill $(docker ps -q)
```


