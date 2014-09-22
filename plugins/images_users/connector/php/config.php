<?php

var_dump(Yii::app()->user);

//Корневая директория сайта
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
//Директория с изображениями (относительно корневой)
define('DIR_IMAGES', '/public/storage_users/images');
//Директория с файлами (относительно корневой)
define('DIR_FILES', '/public/storage_users/data');


//Высота и ширина картинки до которой будет сжато исходное изображение и создана ссылка на полную версию
define('WIDTH_TO_LINK', 225);
define('HEIGHT_TO_LINK', 225);

//Атрибуты которые будут присвоены ссылке (для скриптов типа lightbox)
define('CLASS_LINK', 'lightview');
define('REL_LINK', 'lightbox');

date_default_timezone_set('Europe/Moscow');

?>
