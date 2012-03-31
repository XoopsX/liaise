<?php
// $Id: admin.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $
define("_AM_SAVE","Сохранить");
define("_AM_COPIED","%s копировать");
define("_AM_DBUPDATED","База данных была успешно обновлена!");
define("_AM_ELE_CREATE","Создать элемент формы");
define("_AM_ELE_EDIT","Редактировать элемент формы: %s");

define("_AM_ELE_CAPTION","Заголовок");
define("_AM_ELE_DEFAULT","Значение по умолчанию");
define("_AM_ELE_DETAIL","Детали");
define("_AM_ELE_REQ","Объязательное");
define("_AM_ELE_ORDER","Порядок");
define("_AM_ELE_DISPLAY","Отображение");

define("_AM_ELE_TEXT","Text box");
define("_AM_ELE_TEXT_DESC","{UNAME} стандартным будет имя текущего пользователя;<br />{EMAIL} стандартным будет email текущего пользователя");
define("_AM_ELE_TAREA","Text area");
define("_AM_ELE_SELECT","Selections");
define("_AM_ELE_CHECK","Check boxes");
define("_AM_ELE_RADIO","Radio buttons");
define("_AM_ELE_YN","Простые да/нет radio кнопки");

define("_AM_ELE_SIZE","Размер");
define("_AM_ELE_MAX_LENGTH","Максимальная длина");
define("_AM_ELE_ROWS","Строки");
define("_AM_ELE_COLS","Длина");
define("_AM_ELE_OPT","Поля");
define("_AM_ELE_OPT_DESC","Tick the check boxes for selecting default values");
define("_AM_ELE_OPT_DESC1","<br />Only the first checked is used if multiple selection is not allowed");
define("_AM_ELE_OPT_DESC2","Отметьте значение по-умолчанию");
define("_AM_ELE_ADD_OPT","Добавить %s поля");
define("_AM_ELE_ADD_OPT_SUBMIT","Добавить");
define("_AM_ELE_SELECTED","Selected");
define("_AM_ELE_CHECKED","Checked");
define("_AM_ELE_MULTIPLE","Допустить выбор нескольких значений");

define("_AM_ELE_CONFIRM_DELETE","Вы уверены, что хотите удалить этот элемент?");

######### version 1.1 #########
define("_AM_ELE_OTHER", 'For an option of "Other", put {OTHER|*number*} in one of the text boxes. e.g. {OTHER|30} generates a text box with 30 chars width.');

######### version 1.2 additions #########
define("_AM_FORM_LISTING", "Все доступные формы");
define("_AM_FORM_ORDER","Порядок отображения ");
define("_AM_FORM_ORDER_DESC"," (0 = спрятать эту форму)");
define("_AM_FORM_TITLE", "Заголовок формы");
define("_AM_FORM_PERM", "Группы которые могут пользоваться формой");
define("_AM_FORM_SENDTO", "Отправить ");
define("_AM_FORM_SENDTO_ADMIN", "Email администратора сайта");
define("_AM_FORM_SEND_METHOD", "E-mail отправки");
define("_AM_FORM_SEND_METHOD_DESC", " ");
define("_AM_FORM_SEND_METHOD_MAIL", "Email");
define("_AM_FORM_SEND_METHOD_PM", "Приватное сообщение");
define("_AM_FORM_DELIMETER", "Как разделять check boxes и radio buttons ");
define("_AM_FORM_DELIMETER_SPACE", "Пробел");
define("_AM_FORM_DELIMETER_BR", "Переход строки");
define("_AM_FORM_SUBMIT_TEXT", "Текст на кнопке для отправки");
define("_AM_FORM_DESC", "Описание формы");
define("_AM_FORM_DESC_DESC", " ");
define("_AM_FORM_INTRO", "Введение формы");
define("_AM_FORM_FINAL", "Заключение формы");
define("_AM_FORM_INTRO_DESC", " (Текст отображаемый на странице формы)");
define("_AM_FORM_WHERETO", "URL на который переходить после отправки формы");
define("_AM_FORM_WHERETO_DESC", "Оставьте пустым, если хотите, чтобы юзер поподал на главную страницу; {SITE_URL} соответствует ".XOOPS_URL." для относительных ссылок");

define("_AM_FORM_ACTION_EDITFORM", "Редактировать конфигурацию формы");
define("_AM_FORM_ACTION_EDITELEMENT", "Редактировать элементы формы");
define("_AM_FORM_ACTION_CLONE", "Клонировать эту форму");

define("_AM_FORM_NEW", "Создать новую форму");
define("_AM_FORM_EDIT", "Редактировать форму: %s");
define("_AM_FORM_CONFIRM_DELETE", "Вы уверены, что хотите удалить эту форму и все её элементы?");

define("_AM_ID", "Номер");
define("_AM_ACTION", "Действия");
define("_AM_RESET_ORDER", "Изменить порядок");
define("_AM_SAVE_THEN_ELEMENTS", "Сохранить и перейти к редактированию элементов");
define("_AM_SAVE_THEN_FORM", "Сохранить и перейти к редактированию конфигурации формы");
define("_AM_NOTHING_SELECTED", "Ничего не выбрано.");
define("_AM_GO_CREATE_FORM", "Вы должны сначало создать форму");

define("_AM_ELEMENTS_OF_FORM", "Элементы формы для %s");
define("_AM_ELE_APPLY_TO_FORM", "Применить к форме");
define("_AM_ELE_HTML", "Обычный текст / HTML");

######### version 1.23 additions #########
define("_AM_XOOPS_VERSION_WRONG", "Версия двигателя не подходит для этого модуля");
define("_AM_ELE_UPLOADFILE","Файл загружен");
define("_AM_ELE_UPLOADIMG","Рисунок загружен");
define("_AM_ELE_UPLOADIMG_MAXWIDTH","Максимальная ширина (пиксели)");
define("_AM_ELE_UPLOADIMG_MAXHEIGHT","Максимальная длина (пиксели)");
define("_AM_ELE_UPLOAD_MAXSIZE","Максимальный размер файла (байты)");
define("_AM_ELE_UPLOAD_MAXSIZE_DESC","1k = 1024 байтов");
define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT","0 = без ограничений");
define("_AM_ELE_UPLOAD_ALLOWED_EXT","Допущеные расширения файлов");
define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC","В качестве разделителя расширений должен выступать |, например, 'jpg|jpeg|gif|png|tif|tiff'");
define("_AM_ELE_UPLOAD_ALLOWED_MIME","Допущеные MIME типы");
define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC","В качестве разделителя MIME типов должен выступать |, например, 'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
define("_AM_ELE_UPLOAD_DESC_NOLIMIT","Оставьте пустым для снятия ограничений(не рекомендуется в плане безопасности)");
define("_AM_ELE_UPLOAD_SAVEAS","Сохранять загруженые файлы в");
define("_AM_ELE_UPLOAD_SAVEAS_MAIL","Присоединения к мылу");
define("_AM_ELE_UPLOAD_SAVEAS_FILE","Директория загрузки");
define("_AM_FORM_SEND_CLIENT","Отсылать заполнившому подтверждение");
define("_AM_FORM_SUBJ_CLIENT","Тема письма для заполнившего");
define("_AM_FORM_MAIL_CLIENT","Текст письма для заполнившего");
define("_AM_FORM_REPLAY_MAIL","Обратный адрес письма");
define("_AM_FORM_SUBJ_ADMIN","Тема письма для администратора");
define("_AM_FORM_MAIL_ADMIN","Текст письма для администратора");
define("_AM_FORM_PREV_SUBMIT","Предварительный просмотр перед отправкой");

?>