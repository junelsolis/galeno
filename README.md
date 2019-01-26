<img src='https://github.com/junelsolis/medicoffice/blob/master/medicoffice-logo.png' width='400'>
Simple patient records for any physician's office.
<hr>


<br>

### Requirements
1. Docker & Docker Compose

### Basic installation steps
1. Clone the release branch of this repository.
1. cd to the downloaded project directory.
1. Create database secret: `mkdir secrets`, then `openssl rand -base64 32 > secrets\db_root_password`
1. Create environment file: `cp app\.env.example app\.env` and edit to match environment.
1. Run `docker-compose up -d`
1. Run database migration: `docker-compose exec php bash`, `php artisan migrate`
