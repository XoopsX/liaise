<?php
// $Id: admin.php,v 1.1 2012/03/31 16:00:16 ohwada Exp $
define("_AM_SAVE","Guardar");
define("_AM_COPIED","%s copiar");
define("_AM_DBUPDATED","�Base de Datos actualizada satisfactoriamente!");
define("_AM_ELE_CREATE","Crear un elemento de formulario");
define("_AM_ELE_EDIT","Editar un elemento del formulario: %s");

define("_AM_ELE_CAPTION","T�tulo");
define("_AM_ELE_DEFAULT","Valor por Defecto");
define("_AM_ELE_DETAIL","Detalle");
define("_AM_ELE_REQ","Requerido");
define("_AM_ELE_ORDER","Orden");
define("_AM_ELE_DISPLAY","Mostrar");

define("_AM_ELE_TEXT","Caja de Texto");
define("_AM_ELE_TEXT_DESC","{UNAME} imprimir� el nombre del usuario;<br />{EMAIL} imprimir� el correo del usuario");
define("_AM_ELE_TAREA","�rea de Texto");
define("_AM_ELE_SELECT","Selecciones");
define("_AM_ELE_CHECK","Casillas marcables");
define("_AM_ELE_RADIO","Botones Radio");
define("_AM_ELE_YN","Simple s�/sin botones Radio");

define("_AM_ELE_SIZE","Tama�o");
define("_AM_ELE_MAX_LENGTH","M�xima longitud");
define("_AM_ELE_ROWS","Filas");
define("_AM_ELE_COLS","Columnas");
define("_AM_ELE_OPT","Opciones");
define("_AM_ELE_OPT_DESC","Marque la casilla para elegir valores por defecto");
define("_AM_ELE_OPT_DESC1","<br />S�lo la primera selecci�n ser� usada si no estuviera activada la selecci�n m�ltiple.");
define("_AM_ELE_OPT_DESC2","Elija el valor por defecto marcando los botones Radio");
define("_AM_ELE_ADD_OPT","A�adir %s opciones");
define("_AM_ELE_ADD_OPT_SUBMIT","A�adir");
define("_AM_ELE_SELECTED","Seleccionado");
define("_AM_ELE_CHECKED","Marcado");
define("_AM_ELE_MULTIPLE","Permitir selecci�n m�ltiple");

define("_AM_ELE_CONFIRM_DELETE","�Est� seguro de que desea eliminar este elemento del formulario?");

######### version 1.1 #########
define("_AM_ELE_OTHER", 'Para una opci�n de "Otro (other)", ponga {OTHER|*n�mero*} en una de las casillas de texto. ejemplo: {OTHER|30} genera una casilla de texto con un ancho de 30 caracteres.');

######### version 1.2 additions #########
define("_AM_FORM_LISTING", "Lista del formulario de Contacto");
define("_AM_FORM_ORDER","Orden de Visualizaci�n");
define("_AM_FORM_ORDER_DESC","0 = ocultar este formulario");
define("_AM_FORM_TITLE", "T�tulo del Formulario");
define("_AM_FORM_PERM", "Grupos permitidos para usar este formulario");
define("_AM_FORM_SENDTO", "Enviar a");
define("_AM_FORM_SENDTO_ADMIN", "Correo del Admin del Sitio");
define("_AM_FORM_SEND_METHOD", "M�todo de Env�o");
define("_AM_FORM_SEND_METHOD_DESC", "Informaci�n imposible de enviarse v�a mensaje privado cuando el formulario es enviado al "._AM_FORM_SENDTO_ADMIN." o enviado por usuarios an�nimos");
define("_AM_FORM_SEND_METHOD_MAIL", "Correo-E");
define("_AM_FORM_SEND_METHOD_PM", "Mensaje Privado");
define("_AM_FORM_DELIMETER", "Delimitador para las casillas seleccionables y los botones Radio");
define("_AM_FORM_DELIMETER_SPACE", "Espacio en Blanco");
define("_AM_FORM_DELIMETER_BR", "Salto de L�nea");
define("_AM_FORM_SUBMIT_TEXT", "Texto para el bot�n de env�o");
define("_AM_FORM_DESC", "Descripci�n del Formulario");
define("_AM_FORM_DESC_DESC", "Texto que se mostar� en la p�gina principal si es listado m�s de un formulario");
define("_AM_FORM_INTRO", "Introducci�n del Formulario");
define("_AM_FORM_INTRO_DESC", "Texto que se mostrar� en la misma p�gina del formulario");
define("_AM_FORM_WHERETO", "URL a la que se ir� cuando sea enviado el formulario");
define("_AM_FORM_WHERETO_DESC", "Dejar en blanco para ir a la p�gina de inicio del sitio; {SITE_URL} imprimir� ".XOOPS_URL);

define("_AM_FORM_ACTION_EDITFORM", "Editar configuraciones del formulario");
define("_AM_FORM_ACTION_EDITELEMENT", "Editar elementos del formulario");
define("_AM_FORM_ACTION_CLONE", "Clonar este formulario");

define("_AM_FORM_NEW", "Crear un nuevo formulario");
define("_AM_FORM_EDIT", "Editar formulario: %s");
define("_AM_FORM_CONFIRM_DELETE", "�Est� seguro de que desea eliminar este formulario y todos sus elementos?");

define("_AM_ID", "ID");
define("_AM_ACTION", "Acci�n");
define("_AM_RESET_ORDER", "Actualizar Orden");
define("_AM_SAVE_THEN_ELEMENTS", "Guardar y luego editar elementos");
define("_AM_SAVE_THEN_FORM", "Guardar y luego editar las configuraciones del formulario");
define("_AM_NOTHING_SELECTED", "No seleccion� nada.");
define("_AM_GO_CREATE_FORM", "Primero tendr� que crear un formulario.");

define("_AM_ELEMENTS_OF_FORM", "Elementos de formulario para %s");
define("_AM_ELE_APPLY_TO_FORM", "Aplicar al formulario");
define("_AM_ELE_HTML", "Texto planto / HTML");

######### version 1.23 additions #########
define("_AM_XOOPS_VERSION_WRONG", "La versi�n de XOOPS parece no cumplir los requerimientos. Liaise podr�a no trabajar correctamente");
define("_AM_ELE_UPLOADFILE","Subir archivo");
define("_AM_ELE_UPLOADIMG","Subir Imagen");
define("_AM_ELE_UPLOADIMG_MAXWIDTH","Ancho m�ximo (p�xeles)");
define("_AM_ELE_UPLOADIMG_MAXHEIGHT","Alto m�ximo (p�xeles)");
define("_AM_ELE_UPLOAD_MAXSIZE","Tama�a m�ximo del archivo (bytes)");
define("_AM_ELE_UPLOAD_MAXSIZE_DESC","1k = 1024 bytes");
define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT","0 = Sin l�mite");
define("_AM_ELE_UPLOAD_ALLOWED_EXT","Extensiones permitidas");
define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC","Separar extensiones de los nombres de fichero con un |, distingue may�sculas de min�sculas. Ejemplo: 'jpg|jpeg|gif|png|tif|tiff'");
define("_AM_ELE_UPLOAD_ALLOWED_MIME","MIME types permitidos");
define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC","Separar MIME types con un |, distingue may�sculas de min�sculas. ejemplo: 'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
define("_AM_ELE_UPLOAD_DESC_NOLIMIT","Dejar en blanco para no limitar (no es recomendado por razones de seguridad)");
define("_AM_ELE_UPLOAD_SAVEAS","Guardar el archivo subido a");
define("_AM_ELE_UPLOAD_SAVEAS_MAIL","Adjunto del Correo");
define("_AM_ELE_UPLOAD_SAVEAS_FILE","Directorio de Subida (upload)");

?>