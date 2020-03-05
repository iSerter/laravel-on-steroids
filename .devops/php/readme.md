
Build an image from Dockerfile in the current directory
```$xslt
docker build -t forwardme-php:7.4 .
```

Tag a local image with a new image name and tag
```$xslt
docker tag forwardme-php:7.4 forwardme/php-fpm:7.4 
```

Push an image to a registry 
```$xslt
docker push forwardme/php-fpm:7.4
```

