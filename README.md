Перенес сторонний шаблон в структуру фреймворка верстку, стили, шрифты и скрипты.

Создал свой layout /views/layouts/blog.php И переопределил layout по умолчанию в /config/web.php

Подключил и зарегистрировал комплект ресурсов в /asset/AppAsset.php

Добавил в /views/layouts/blog.php методы-маркеры открывающие, закрывающие и добавляющие стили и скрипты.

Использовал встроенный класс Yii в /views/layouts/blog.php, чтобы задать кодировку, локализацию и title.

Значения для всего этого прописал в массиве $config в /config/web.php

В /config/web.php в массиве $config переопределил дефолтный маршрут для главной страницы приложения на /views/post/index.php

<b>Вывод и форматирование данных:</b>

Использовал специальный хелпер \yii\helpers\Html и его методы. В том числе и для вывода изображений.

Для формирования ссылок использовал компонент $urlMeneger и класс хелпер \yii\helpers\url и метод to().

Для вывода категорий создал модель Category.php и связал с моделью Post.php при помощи метода getCategory() и связи hasOne().

Указал форматирование даты в /config/web.php в массиве $formatter.

И с помощью yii::$app->formatter вывел дату в виде views/post/index.php

<b>Постраничная разбивка:</b>

Постраничную навигацию вывел при помощи виджета LinkPager.

Подсчет и количество постов на странице сделал в PostController.php при помощи обьекта класса Pagination.

<b>Создание ЧПУ:</b>

Убирал из адреса папку web, файл index.php. Для этого создал файл .htaccess в корне сайта.

В /config/web.php раскомментировал $urlManager; в 'request' задал значение 'baseUrl' пустую строку.

В /config/web.php в $urlManager в 'rules' задал значение с помощью регулярных выражений.

В PostController.php в $pages параметрам $forcePageParam и $ pageSizeParam задал значение false.

Дамп базы находится в файле yii2mini.sql
