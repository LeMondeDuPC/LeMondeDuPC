docker build -t symfony/apache .
docker-compose up
docker cp vendor symfony_web_1:/var/www/html