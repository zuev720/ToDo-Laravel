Создать приложение ToDo


1. Настроить конфигурацию приложения для работы с **SQLite** 
и создать файл `database\database.sqlite`
2. С помощью **artisan** сгенерировать модель и миграцию для таблицы **todos**, каждая запись 
в БД должна иметь следующую структуру данных:

```php
[
    'id' => 1,
    'title' => 'Новая задача',
    'description' => 'Описание задачи…',
    'created_at' => '2021-01-17 19:19:47',
    'updated_at' => '2021-01-17 19:19:47',
]
```

Типы данных привести в соответствие с хранимой информацией

3. С помощью **artisan** сгенерировать ресурсный контроллер для 
работы с моделью **Todo**
4. Создать роут `GET: /todo`, по которому будет происходить вывод 
всех записей из таблицы **todos**
5. Создать роут `GET: /todo/{id}`, который по **id** будет находить запись 
в в таблице **todos** и выводить информацию о ней.
6. Создать роут `GET: /todo/create`, по которому будет происходить 
запись новых задач в таблицу **todos**. Данные вводить вручную, 
в функции-обработчике. После добавления делать редирект на страницу 
вывода всех записей `GET: /todo`
