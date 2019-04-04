

клонировать репозиторий или скачать ZIP архив 
git clone https://github.com/yadrovGrigoriy/irbis_test.git

установить зависимости <br>
composer install

переименовать в .env и отредактировать фаил .env.example (информацию о базе данных, почтовом клиенте  и адрес приложения APP_URL)

сгенерировать ключ 
php artisan key:generate



выполнить миграции
php artisan migrate