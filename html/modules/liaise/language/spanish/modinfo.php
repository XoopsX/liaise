<?php
// $Id: modinfo.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $

// The name of this module
define("_MI_LIAISE_NAME","Liaise");

// A brief description of this module
define("_MI_LIAISE_DESC","Generador de Formularios de Contacto");

// admin/menu.php
define("_MI_LIAISE_ADMENU1","Listado de formularios de Contacto");
define("_MI_LIAISE_ADMENU2","Crear un nuevo formulario");

//	preferences
define("_MI_LIAISE_TEXT_WIDTH","Ancho por defecto para las cajas de texto");
define("_MI_LIAISE_TEXT_MAX","M�xima longitud por defecto para las cajas de texto");
define("_MI_LIAISE_TAREA_ROWS","Filas por defecto para las �reas de texto");
define("_MI_LIAISE_TAREA_COLS","Columnas por defecto para las �reas de texto");

######### version 1.1  additions #########
//	preferences
define("_MI_LIAISE_MAIL_CHARSET","Codificaci�n del texto para el env�o de correos-e");

//	template descriptions
define("_MI_LIAISE_TMPL_MAIN_DESC","P�gina principal para Liaise");
define("_MI_LIAISE_TMPL_ERROR_DESC","P�gina que se mostar� en caso de error");

######### version 1.2 additions #########
//	template descriptions
define("_MI_LIAISE_TMPL_FORM_DESC","Plantilla para los formularios");

//	preferences
define("_MI_LIAISE_MOREINFO","Informaci�n adicional a enviar junto a los datos suministrados");
define("_MI_LIAISE_MOREINFO_USER","Nombre del usuario y url de la p�gina de informaci�n del mismo");
define("_MI_LIAISE_MOREINFO_IP","Direcciones IP de los usuarios que env�an");
define("_MI_LIAISE_MOREINFO_AGENT","Informaci�n del navegador de los usuarios que env�an");
define("_MI_LIAISE_MOREINFO_FORM","URL del formulario enviado");
define("_MI_LIAISE_MAIL_CHARSET_DESC","Dejar en blanco para "._CHARSET);
define("_MI_LIAISE_PREFIX","Pr�fijo del texto para los campos requeridos");
define("_MI_LIAISE_SUFFIX","Sufijo del texto para los campos requeridos");
define("_MI_LIAISE_INTRO","Texto de introducci�n para la p�gina principal");
define("_MI_LIAISE_GLOBAL","Texto a mostrar en cada p�gina de formulario");

// admin/menu.php
define("_MI_LIAISE_ADMENU3","Crear elementos de formulario");

######### version 1.21 additions #########
// preferences default values
define("_MI_LIAISE_INTRO_DEFAULT","Cont�ctenos en base a los siguientes t�rminos:");
define("_MI_LIAISE_GLOBAL_DEFAULT","[b]* Requerido[/b]");

######### version 1.23 additions #########
define("_MI_LIAISE_UPLOADDIR","Ruta f�sica para almacenar los archivos guardados");
define("_MI_LIAISE_UPLOADDIR_DESC","Todos los archivos subidos ser�n almacenados aqu� cuando un formulario sea enviado v�a mensaje privado");

?>