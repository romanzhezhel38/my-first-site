# Мой первый сайт
 ___
 ___
 ## Домашнее задание №1
 ___
 
    * Установите Open Server и добейтесь его корректного запуска
    * Создайте локальный сайт mps.local и файл index.php в нём, добейтесь, чтобы он открывался по адресу http://mps.local/index.php
    * В файле разместите три своих любимых стихотворения
    * Выделите в них абзацы и переносы строк
    * Разделяйте стихотворения горизонтальной чертой
    * У каждого стихотворения подпишите название (перед ним) и автора (после него)
    * Сделайте смысловое выделение имени автора, чтобы оно отличалось от текста стиха
    * Подпишите свою страницу своим именем (например "Личная страница Алексея Иванова"), оставьте на ней свои контакты. Используйте для этого соответствующие по смыслу теги

  ## Домашнее задание №2
 ___ 
1. Возьмите за образец свой любимый новостной сайт. Изучите, как построена на нём лента новостей - как выделяются заголовки, тексты новостей, даты, подписи, другие элементы.
1. Попробуйте повторить страницу с лентой новостей. Новости можете взять настоящие, а можете - придумать. На странице должно быть не менее трех новостей, у каждой должны присустсвовать как минимум заголовок, текст, дата выхода. Очень хорошо, если будет лид (подзаголовок), указание на рубрику.
1. Продумайте стилевое оформление. Используйте следующие стили:

    1. color
    1. background
    1. font-family (выбирайте из универсальных семейств!)
    1. font-size
    1. font-weight
    1. font-style
    другие свойства, которые покажутся вам интересными

  ## Домашнее задание №3
 ___ 

Создайте сайт. Выберите одну тему из предложенных:

   * Сайт, посвященный вашему любимому музыкальному исполнителю
   * Сайт, посвященный вашему увлечению, хобби
   * Свой персональный сайт о вас и ваших профессиональных интересах

Сайт должен состоять из страниц:

   * Главная
   * Не менее двух "внутренних" (например, если это сайт о музыкальной группе то это могут быть страницы "Состав группы" и "Дискография")

Обязательным является использование изображений и внешнего файла со стилями. 

В качестве дополнительного задания * изучите самостоятельно теги ul, ol, li, nav и примените их для создания навигации (меню) для вашего сайта.

  ## Домашнее задание №4
 ___ 
 
 

Используя фреймворк Bootstrap создайте сайт из трех страниц (минимум):

   * Главная страница с навигацией по сайту
   * Страница с фотогалереей
   * Страница с комментариями (показать 2-3 уже добавленных кем-то комментария) и формой добавления комментариев (например - гостевая книга)

Вы можете продолжить работу с тем же сайтом, который начинали разрабатывать в предыдущих домашних заданиях.

Используйте следующие элементы:

   * Сетку (12 колонок)
   * Формы
   * Адаптивные изображения
   * Иконки
   * Навигацию (не Navbar!)
   * Миниатюры изображений

В качестве задания "со звездочкой" попробуйте применить какую-либо бесплатную тему для Bootstrap.

  ## Домашнее задание №5
 ___ 
 
 

В ходе решения этого задания продолжайте работу с тем сайтом, который вы сделали в предыдущем ДЗ. Доделайте его до требований предыдущего ДЗ, если вы это еще не сделали.

   1. На странице фотогалереи снабдите каждую фотографию ссылкой на страницу /image.php?file=ИМЯФАЙЛАИЗОБРАЖЕНИЯ
    Внимание! Только имя файла, без папок!
   1. Создайте скрипт image.php. Он должен делать следующее:
        Получить имя файла через $_GET
        Отобразить страницу, на которой указанная фотография будет выведена крупно, на ширину 100%
        На странице предусмотрите кнопку-ссылку "Назад", которая вернет вас в фотогалерею
    1. * Создайте (или используйте уже готовую) страницу с комментариями. Пусть у вас на ней будет некий объект и у него - 3 комментария. Сделайте так, чтобы по клику на короткий текст комментария открывалась страница с его полным текстом. Причем сам полный текст должен браться из отдельного текстового файла, используя include
  ## Домашнее задание №6
 ___ 
 
 1. Напишите свою функцию, которая будет на вход получать путь до папки, а возвращать массив - список файлов из этой папки. В результате не должно быть файлов "." и ".."!
1. Переработайте свою фотогалерею в соответствии с тем, что вам показывалось на уроке - страница галереи должна самостоятельно получать список фотографий из папки. Используйте свою функцию из п.1
1. Переделайте свою страницу комментариев. Пусть каждый уже имеющийся комментарий будет находиться в отдельном текстовом файле, страница получит список таких файлов и прочитает каждый из них, вставляя на страницу. Используйте свою функцию из п.1 и функцию file_get_contents().

  ## Домашнее задание №7
 ___ 
 
 

   1. Напишите калькулятор. Основывайтесь на коде, который был показан на уроке. Добавьте в форму выбор операции (сложение, вычитание, умножение, деление). Для создания выбора операции используйте элемент select ( http://htmlbook.ru/html/select ). В обработчике формы вам может быть полезен оператор switch...case ( http://php.net/manual/ru/control-structures.switch.php )
     
  1.  Переделайте свой скрипт гостевой книги. Добавьте в него форму добавления комментария и обработку данных из этой формы так, как было показано на уроке. Разберитесь с функцией file() самостоятельно ( http://php.net/manual/ru/function.file.php ), сделайте так, чтобы в конец строк из текстового файла не добавлялся символ переноса строки.
     
 1.   Доделайте свою фотогалерею из предыдущих уроков. Добавьте к ней форму загрузки нового файла и обработку загрузки.
     
 1.   * Подумайте - как можно ограничить размер заливаемых файлов? А их расширения (добавлять, например, только .jpg и .png)?


