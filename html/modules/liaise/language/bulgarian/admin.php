<?php
// $Id: admin.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $
define('_AM_SAVE', 'Записва');
define('_AM_COPIED', '%s копие');
define('_AM_DBUPDATED', 'Базата е обновена успешно !');
define('_AM_ELE_CREATE', 'Създава елемент за форма');
define('_AM_ELE_EDIT', 'Редактира елемент за форма: %s ');

define('_AM_ELE_CAPTION', 'Заглавие');
define('_AM_ELE_DEFAULT', 'Стойност по подразбиране');
define('_AM_ELE_DETAIL', 'Детаили');
define('_AM_ELE_REQ', 'Задължително');
define('_AM_ELE_ORDER', 'Ред');
define('_AM_ELE_DISPLAY', 'Показва');

define('_AM_ELE_TEXT', 'Текстова кутия');
define('_AM_ELE_TEXT_DESC', '{UNAME} ще изведе потребителско име;<br />{EMAIL} ще изведе потребителски email');
define('_AM_ELE_TAREA', 'Текстово поле');
define('_AM_ELE_SELECT', 'Избрани');
define('_AM_ELE_CHECK', 'Check boxes');
define('_AM_ELE_RADIO', 'Radio buttons');
define('_AM_ELE_YN', 'Обинковени ДА/НЕ радио бутони');

define('_AM_ELE_SIZE', 'Размер');
define('_AM_ELE_MAX_LENGTH', 'Максимална дължине');
define('_AM_ELE_ROWS', 'Линии');
define('_AM_ELE_COLS', 'Колони');
define('_AM_ELE_OPT', 'Опции');
define('_AM_ELE_OPT_DESC', 'Tick the check boxes for selecting default values');
define('_AM_ELE_OPT_DESC1', '<br />Only the first checked is used if multiple selection is not allowed');
define('_AM_ELE_OPT_DESC2', 'Избира стойности по подразбиране от радио бутоните');
define('_AM_ELE_ADD_OPT', 'Добавя %s опции');
define('_AM_ELE_ADD_OPT_SUBMIT', 'Добавя');
define('_AM_ELE_SELECTED', 'Избира');
define('_AM_ELE_CHECKED', 'Проверен');
define('_AM_ELE_MULTIPLE', 'Разшреава няколко избора');

define('_AM_ELE_CONFIRM_DELETE', 'Сигурен ли сте, че искате да изтриете този елемент ?');

######### version 1.1 #########
define('_AM_ELE_OTHER', 'For an option of \\\"Other\\\", put {OTHER|*number*} in one of the text boxes. e.g. {OTHER|30} generates a text box with 30 chars width.');

######### version 1.2 additions #########
define('_AM_FORM_LISTING', 'Списък с контактни форми');
define('_AM_FORM_ORDER', 'Ред на показване');
define('_AM_FORM_ORDER_DESC', '0 = скрива формата');
define('_AM_FORM_TITLE', 'Име на формата');
define('_AM_FORM_PERM', 'Групи които могат да ползват тази форма');
define('_AM_FORM_SENDTO', 'Изпраща до');
define('_AM_FORM_SENDTO_ADMIN', 'email на Администратора');
define('_AM_FORM_SEND_METHOD', 'Режим на изпращане');
define('_AM_FORM_SEND_METHOD_DESC', 'Information cannot be sent via private message when the form is sent to \\\"._AM_FORM_SENDTO_ADMIN.\\\" or sent by anonymous users');
define('_AM_FORM_SEND_METHOD_MAIL', 'Email');
define('_AM_FORM_SEND_METHOD_PM', 'Лично съобщение');
define('_AM_FORM_DELIMETER', 'Delimeter for check boxes and radio buttons');
define('_AM_FORM_DELIMETER_SPACE', 'Бяло поле');
define('_AM_FORM_DELIMETER_BR', 'Край на линия');
define('_AM_FORM_SUBMIT_TEXT', 'Текст за бутона изпращане');
define('_AM_FORM_DESC', 'Описание на формата');
define('_AM_FORM_DESC_DESC', 'Текст който да се показва на страницата, ако има повече от една форма');
define('_AM_FORM_INTRO', 'Уводен текст на формата');
define('_AM_FORM_INTRO_DESC', 'Текст който да се показва на самата форма');
define('_AM_FORM_WHERETO', 'Връзка на която да отиде след като формата е изпратена');
define('_AM_FORM_WHERETO_DESC', 'Leave blank for the home page of this site; {SITE_URL} will print \\\".XOOPS_URL);

define(\\\"_AM_FORM_ACTION_EDITFORM\\\", \\\"Edit form settings');
define('_AM_FORM_ACTION_EDITELEMENT', 'Редактира елементи за формата');
define('_AM_FORM_ACTION_CLONE', 'Клонира формата');

define('_AM_FORM_NEW', 'Създава нова форма');
define('_AM_FORM_EDIT', 'Редактира форма: %s');
define('_AM_FORM_CONFIRM_DELETE', 'Сигурен ли сте, че искате да изтриете тази форма и всичките и елементи ?');

define('_AM_ID', 'ID');
define('_AM_ACTION', 'Действие');
define('_AM_RESET_ORDER', 'Ред за обновяване');
define('_AM_SAVE_THEN_ELEMENTS', 'Запазва елементите преди реакция');
define('_AM_SAVE_THEN_FORM', 'Запазва настройките преди промяна');
define('_AM_NOTHING_SELECTED', 'Нищо не е избрано');
define('_AM_GO_CREATE_FORM', 'Трябва да създате списък с формите.');

define('_AM_ELEMENTS_OF_FORM', 'Елементи от форма %s');
define('_AM_ELE_APPLY_TO_FORM', 'Добави към форма');
define('_AM_ELE_HTML', 'Чист текст / HTML');

######### version 1.23 additions #########
define('_AM_XOOPS_VERSION_WRONG', 'Версията на XOOPS не покрива системните изисквания на модула. Модула може и да не работи правилно.');
define('_AM_ELE_UPLOADFILE', 'Файла е качен');
define('_AM_ELE_UPLOADIMG', 'Картинката е качена');
define('_AM_ELE_UPLOADIMG_MAXWIDTH', 'Максимална ширина (пиксели)');
define('_AM_ELE_UPLOADIMG_MAXHEIGHT', 'Максимална височина (пиксели)');
define('_AM_ELE_UPLOAD_MAXSIZE', 'Максимален размер на файла (байтове)');
define('_AM_ELE_UPLOAD_MAXSIZE_DESC', '1к = 1024 байта');
define('_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT', '0 = без лимит');
define('_AM_ELE_UPLOAD_ALLOWED_EXT', 'Разрешени файлови разширения');
define('_AM_ELE_UPLOAD_ALLOWED_EXT_DESC', 'Разделете файловите разширения с |, само с малки букви. Като \\\'jpg|jpeg|gif|png|tif|tiff\\\'');
define('_AM_ELE_UPLOAD_ALLOWED_MIME', 'Разрешени MIME типове');
define('_AM_ELE_UPLOAD_ALLOWED_MIME_DESC', 'Разделете MIME типовете с |, само с малки букви. Като \\\'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff\\\'	');
define('_AM_ELE_UPLOAD_DESC_NOLIMIT', 'Оставете празно за неограничено (не е препоръчително, по съображения за сигурност)');
define('_AM_ELE_UPLOAD_SAVEAS', 'Записва качения файл в');
define('_AM_ELE_UPLOAD_SAVEAS_MAIL', 'Прикачен файл');
define('_AM_ELE_UPLOAD_SAVEAS_FILE', 'Директория за качване');

?>