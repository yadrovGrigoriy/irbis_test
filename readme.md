

клонировать репозиторий или скачать ZIP архив <br>
git clone https://github.com/yadrovGrigoriy/irbis_test.git

установить зависимости <br>
composer install

переименовать в .env и отредактировать фаил .env.example (информацию о базе данных, почтовом клиенте  и адрес приложения APP_URL)

сгенерировать ключ <br>
php artisan key:generate

выполнить миграции <br>
php artisan migrate