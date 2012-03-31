<?php
// $Id: modinfo.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $

// The name of this module
define("_MI_LIAISE_NAME","Формы");

// A brief description of this module
define("_MI_LIAISE_DESC","Генератор контактных форм");

// admin/menu.php
define("_MI_LIAISE_ADMENU1","Список всех форм");
define("_MI_LIAISE_ADMENU2","Создать новую форму");

//	preferences
define("_MI_LIAISE_TEXT_WIDTH","Ширина по-умолчанию для текстовых полей");
define("_MI_LIAISE_TEXT_MAX","Длина по-умолчанию для текстовых полей");
define("_MI_LIAISE_TAREA_ROWS","Колисчество строк для прокручиваемых текстовых полей");
define("_MI_LIAISE_TAREA_COLS","Ширина для прокручиваемых текстовых полей");

######### version 1.1  additions #########
//	preferences
define("_MI_LIAISE_MAIL_CHARSET","Кодировка для посылки на e-mail");

//	template descriptions
define("_MI_LIAISE_TMPL_MAIN_DESC","Основная страница модуля");
define("_MI_LIAISE_TMPL_ERROR_DESC","Страница отображаемыая при ошибках");

######### version 1.2 additions #########
//	template descriptions
define("_MI_LIAISE_TMPL_FORM_DESC","Шаблон для формы");

//	preferences
define("_MI_LIAISE_MOREINFO","Пошлите дополнительную информацию вместе с представленными данными");
define("_MI_LIAISE_MOREINFO_USER","Имя пользователя и URL на инфо страницу");
define("_MI_LIAISE_MOREINFO_IP","Посылать также IP-адрес");
define("_MI_LIAISE_MOREINFO_AGENT","Посылать информауию о браузере");
define("_MI_LIAISE_MOREINFO_FORM","URL с которого была заполнена форма");
define("_MI_LIAISE_MAIL_CHARSET_DESC","Оставьте пустым для "._CHARSET);
define("_MI_LIAISE_PREFIX","Текстовой префикс для объязательных полей");
define("_MI_LIAISE_SUFFIX","Суффикс для объязательных полей");
define("_MI_LIAISE_INTRO","Вводный текст на основной странице");
define("_MI_LIAISE_GLOBAL","Текст отображаемый на каждой странице с формой");

// admin/menu.php
define("_MI_LIAISE_ADMENU3","Создать элементы формы");

######### version 1.21 additions #########
// preferences default values
define("_MI_LIAISE_INTRO_DEFAULT","Вот все доступные формы этого сайта:");
define("_MI_LIAISE_GLOBAL_DEFAULT","[b]* Объязательное поле[/b]");

######### version 1.23 additions #########
define("_MI_LIAISE_UPLOADDIR","Физический путь для загрузки файлов");
define("_MI_LIAISE_UPLOADDIR_DESC","Все загружаемые файлы сохраняются здесь, когда сообщение послано в личку");

?>