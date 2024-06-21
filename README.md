    docker compose up

    docker exec -it todo-backend composer install

    docker exec -it todo-backend php artisan migrate

    docker exec -it todo-backend php artisan db:seed

### Copy .env.example file as .env

    cp .env.example .env
