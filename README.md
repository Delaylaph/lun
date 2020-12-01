## На сервері повинні бути встановлені:
- php
- postgesql
- artisan і composer (здається, встановлюються разом з пхп, але якщо ні то потрібно встановити окремо)
### Перед першим запуском додатку:
- В файлі .env вказати того ж користувача і хост бд, що і на сервері. По дефолту так:  
 *DB_HOST* = `127.0.0.1`  
 *DB_PORT* = `5432`  
 *DB_DATABASE* = `lun` *назва повина співпадати з назвою бд у постгресі, інакше не будуть працювати міграції*  
 *DB_USERNAME* = `postgres`  
 *DB_PASSWORD* = `postgres`
- Встановити залежності:
 `composer install`
- Накатити міграції:
 `php artisan migrate`
- Наповнити бд фейковими данними:
 `php artisan db:seed --class=AnnouncementSeeder`
## Запуск додатку:
1. sudo service postgresql start
2. php artisan serve

Здається все)
