<?php
// $Id: modinfo.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $

// The name of this module
define('_MI_LIAISE_NAME', 'Връзка с нас');

// A brief description of this module
define('_MI_LIAISE_DESC', 'Генератор на контактни форми');

// admin/menu.php
define('_MI_LIAISE_ADMENU1', 'Списък с контактните форми');
define('_MI_LIAISE_ADMENU2', 'Създава нова форма');

//	preferences
define('_MI_LIAISE_TEXT_WIDTH', 'Ширина по подразбиране на текстовите кутии');
define('_MI_LIAISE_TEXT_MAX', 'Дължина по подразбиране на текстовите кутии');
define('_MI_LIAISE_TAREA_ROWS', 'Редове по подразбиране в текстовите полета');
define('_MI_LIAISE_TAREA_COLS', 'Колони по подразбиране в текствовите полета');

######### version 1.1  additions #########
//	preferences
define('_MI_LIAISE_MAIL_CHARSET', 'Кодова таблица за пращане на поща');

//	template descriptions
define('_MI_LIAISE_TMPL_MAIN_DESC', 'Главна страница на Връзка с нас');
define('_MI_LIAISE_TMPL_ERROR_DESC', 'Коя страница да показва като възникне грешка');

######### version 1.2 additions #########
//	template descriptions
define('_MI_LIAISE_TMPL_FORM_DESC', 'Структура за форми');

//	preferences
define('_MI_LIAISE_MOREINFO', 'Изпраща допълнителна информация заедно с изпратената заявка');
define('_MI_LIAISE_MOREINFO_USER', 'Потребителско име и страница към потребителската информация');
define('_MI_LIAISE_MOREINFO_IP', 'IP адрес на изпращача');
define('_MI_LIAISE_MOREINFO_AGENT', 'Информация за браузъра');
define('_MI_LIAISE_MOREINFO_FORM', 'Връзка на изпратената форма');
define('_MI_LIAISE_MAIL_CHARSET_DESC', 'Остави празно за \\\"._CHARSET);define(\\\"_MI_LIAISE_PREFIX\\\",\\\"Text prefix for required fields');
define('_MI_LIAISE_SUFFIX', 'Суфикс за задължителните полета');
define('_MI_LIAISE_INTRO', 'Уводен текст на главната страница');
define('_MI_LIAISE_GLOBAL', 'Текст който да се показва на всяка форма');

// admin/menu.php
define('_MI_LIAISE_ADMENU3', 'Създава елементи за форма');

######### version 1.21 additions #########
// preferences default values
define('_MI_LIAISE_INTRO_DEFAULT', 'Можете да се свържете с нас, чрез следното:');
define('_MI_LIAISE_GLOBAL_DEFAULT', '[b]* Задължително[/b]');

######### version 1.23 additions #########
define('_MI_LIAISE_UPLOADDIR', 'Физически път за запис на качените файлове без \\\"/\\\" накрая');
define('_MI_LIAISE_UPLOADDIR_DESC', 'Всички качени файлове ще бъдат записани когато формата е изпратена като лично съобщение');

?>