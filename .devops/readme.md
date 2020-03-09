# Compose
```$xslt
docker-compose up -d
```

# SSH into a container
```$xslt
sudo docker exec -it CONTAINER_ID /bin/sh 
```

# Kill all running containers
```$xslt
docker container kill $(docker ps -q)
```

