<img src='https://github.com/junelsolis/medicoffice/blob/master/galeno-logo.svg' width='300'>

![](https://img.shields.io/github/license/junelsolis/medicoffice.svg)
![](https://img.shields.io/github/last-commit/junelsolis/medicoffice.svg)

Some medical practices are under-equipped when it comes to maintaining patient records. Many still rely on paper to keep track of their patients. This web application aims to solve that problem in the simple, easy-to-use, and open-source way.

### Demo Site
Since the project reboot, the demo site has been taken down. Once I have more of a frontend done, I will create a new demo site. This will happen after I'm done building some unit and feature tests.

### How to run the demo on your own server/computer
1. Clone this repository
1. cd to the project directory
1. Run demo setup script: `./demo-setup.sh`
1. Copy `secrets/db_root_password` contents to `DB_PASSWORD` in the `app\.env` file.
1. Run database migration: `docker-compose exec php php artisan migrate --seed`


### System Requirements
* Docker & Docker Compose

### Basic installation steps
1. Clone this repository.
1. cd to the downloaded project directory.
1. Create database secret: `mkdir secrets`, then `openssl rand -base64 32 > secrets\db_root_password`
1. Create environment file: `cp app\.env.example app\.env` and edit to match your environment.
1. Run `docker-compose up -d`
1. Generate app key and run database migration: `docker-compose exec php bash`, `php artisan key:generate`, `php artisan migrate`
