<p align="center">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    <h1 align="center">Yii 2 framework</h1>
    <br>
</p>

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources

Установили фреймворк Yii2 с помощью Composer.

Создали базу данных в MySQL и две связанные таблицы при помощи PHPMyAdmin.

Перенесли шаблон папку /web (верстку, стили, шрифты и скрипты) в структуру фреймворка.

Создали свой шаблон /views/layouts/blog.php И переопределили шаблон по умолчанию в /config/web.php в массиве $config.

В шаблоне /views/layouts/blog.php в head взяли ссылки на ресурсы.

Подключили и зарегистрировали комплект ресурсов в /asset/AppAsset.php.

Добавили в /views/layouts/blog.php методы-маркеры открывающие, 
закрывающие и добавляющие стили и скрипты.

Использовали встроенный класс Yii в /views/layouts/blog.php,
чтобы задать кодировку, локализацию и title.

Значения для всего этого прописали в массиве $config в /config/web.php.

Сделали новый вид /views/post/index.php И добавили в него содержимое body из blog.php.

Создали PostController.php.

В /config/web.php в массиве $config переопределили дефолтный маршрут 
для главной страницы приложения на /views/post/index.php

Создали модель Post.php

При помощи метода find() получили данные из таблицы.

В PostController.php получили данные из модели Post.php и передали их в /views/post/index.php.

Настроили подключение к базе данных в /config/db.php.

<b>Вывод и форматирование данных:</b>

Использовали специальный хелпер \yii\helpers\Html и его методы. В том числе и для вывода изображений.

Есть алиас @web он ведет в папку /web.

Для формирования ссылок есть компонент $urlMeneger и 
используется класс хелпер \yii\helpers\url и метод to().

Для вывода категорий создали модель Category.php и 
связали с моделью Post.php при помощи метода getCategory() и связи hasOne().

Указываем форматирование даты в /config/web.php в массиве $formatter.

И с помощью yii::$app->formatter выводим дату в виде views/post/index.php.

<b>Постраничная разбивка:</b>

Постраничную навигацию выводим при помощи виджета LinkPager.

Подсчет и количество постов на странице делаем в PostController.php при помощи обьекта класса Pagination.

<b>Создание ЧПУ:</b>

Убираем из адреса папку web, файл index.php. Для этого создаем файл .htaccess в корне сайта.

В /config/web.php раскомментируем $urlManager; в 'request' задаем значение 'baseUrl' пустую строку.

В /config/web.php в $urlManager в 'rules' задаем значение с помощью регулярных выражений.

В PostController.php в $pages параметрам $forcePageParam и  $ pageSizeParam задаем значение false.
