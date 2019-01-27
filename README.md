<img src='https://github.com/junelsolis/medicoffice/blob/master/medicoffice-logo.png' width='400'>
Simple patient records for any physician's office.

![](https://img.shields.io/github/license/junelsolis/medicoffice.svg)
![](https://img.shields.io/github/last-commit/junelsolis/medicoffice.svg)
<hr>


<br>

### Requirements
1. Docker & Docker Compose

### Basic installation steps
1. Clone this repository.
1. cd to the downloaded project directory.
1. Create database secret: `mkdir secrets`, then `openssl rand -base64 32 > secrets\db_root_password`
1. Create environment file: `cp app\.env.example app\.env` and edit to match your environment.
1. Run `docker-compose up -d`
1. Generate app key and run database migration: `docker-compose exec php bash`, `php artisan key:generate`, `php artisan migrate`
