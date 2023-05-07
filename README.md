# BetterSocial Backend Engineer Test

- [Setup](#-setup)
- [Debugging](#-debugging)
- [Endpoints](#-endpoints)

## 🚀 Setup

### Prerequisites

- You need to have [docker](https://www.docker.com/get-started) installed
- You should have your `ssh` keys setup on Gitlab
- (Optional) You may install [Postman](https://www.postman.com/downloads/) to test the endpoints

### Steps

1. Clone the project repo: `git clone git@github.com:KoalaZCooL/bettersocial-test-faza.git`
2. Change into project directory: `cd bettersocial-test-faza`
3. cp .env.example .env
4. Do `composer install`
5. Run the app: `./vendor/bin/sail up`
6. Run migrations `docker-compose exec -it laravel.test php artisan migrate`

App will be accessible at: http://localhost:80. See [Endpoints](#-endpoints) for more information.


## 🐞 Debugging

**Where are the application error logs?**

The laravel log inside the container is located at `/var/www/storage/logs/laravel.log`

**Testing**

- Run `docker-compose exec -it laravel.test php artisan test`

## Endpoints

| URL                                                                                        | Use                     |
| ------------------------------------------------------------------------------------------ | ----------------------- |
| /api/v1/register                                                                           | create new username     |
