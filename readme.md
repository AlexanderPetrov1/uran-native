## Тестирование[22.02.2018][pre-middle, PHP]

## Окружение

LAMP

## Инструкции для запуска

### 1. Сессии, кеши, сложные формы

Папка /1_sessions_cache_and_forms/cache должна быть доступна для записи.

### 2. Трай, кетч, простые классы 

Папка /2_try_catch_classes/logger должна быть доступна для записи.

Сообщения о некорректной настройке функции mail() находятся в файле logger/logs.txt

Неотправленные E-mail сообщения о некорректной настройке функции mail() находятся в файле logger/emails.txt

Запуск PHPUnit:
- path/to/php7/php vendor/phpunit/phpunit/phpunit tests/MailerTest.php

### 3. Трейты, интерфейсы, наследование классов

Следующие папки должны быть доступны для записи:
- /3_trait_interface_extends/CSV
- /3_trait_interface_extends/HTML
- /3_trait_interface_extends/XML

Дамп рабочей таблицы необходимо импортировать из файла products.sql

Данные для подключения к базе данных находятся в файле config.php

### 4. Code review

Никаких особых условий нет.