<?php
// $Id: admin.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $
define("_AM_SAVE","���������");
define("_AM_COPIED","%s ����������");
define("_AM_DBUPDATED","���� ������ ���� ������� ���������!");
define("_AM_ELE_CREATE","������� ������� �����");
define("_AM_ELE_EDIT","������������� ������� �����: %s");

define("_AM_ELE_CAPTION","���������");
define("_AM_ELE_DEFAULT","�������� �� ���������");
define("_AM_ELE_DETAIL","������");
define("_AM_ELE_REQ","�������������");
define("_AM_ELE_ORDER","�������");
define("_AM_ELE_DISPLAY","�����������");

define("_AM_ELE_TEXT","Text box");
define("_AM_ELE_TEXT_DESC","{UNAME} ����������� ����� ��� �������� ������������;<br />{EMAIL} ����������� ����� email �������� ������������");
define("_AM_ELE_TAREA","Text area");
define("_AM_ELE_SELECT","Selections");
define("_AM_ELE_CHECK","Check boxes");
define("_AM_ELE_RADIO","Radio buttons");
define("_AM_ELE_YN","������� ��/��� radio ������");

define("_AM_ELE_SIZE","������");
define("_AM_ELE_MAX_LENGTH","������������ �����");
define("_AM_ELE_ROWS","������");
define("_AM_ELE_COLS","�����");
define("_AM_ELE_OPT","����");
define("_AM_ELE_OPT_DESC","Tick the check boxes for selecting default values");
define("_AM_ELE_OPT_DESC1","<br />Only the first checked is used if multiple selection is not allowed");
define("_AM_ELE_OPT_DESC2","�������� �������� ��-���������");
define("_AM_ELE_ADD_OPT","�������� %s ����");
define("_AM_ELE_ADD_OPT_SUBMIT","��������");
define("_AM_ELE_SELECTED","Selected");
define("_AM_ELE_CHECKED","Checked");
define("_AM_ELE_MULTIPLE","��������� ����� ���������� ��������");

define("_AM_ELE_CONFIRM_DELETE","�� �������, ��� ������ ������� ���� �������?");

######### version 1.1 #########
define("_AM_ELE_OTHER", 'For an option of "Other", put {OTHER|*number*} in one of the text boxes. e.g. {OTHER|30} generates a text box with 30 chars width.');

######### version 1.2 additions #########
define("_AM_FORM_LISTING", "��� ��������� �����");
define("_AM_FORM_ORDER","������� ����������� ");
define("_AM_FORM_ORDER_DESC"," (0 = �������� ��� �����)");
define("_AM_FORM_TITLE", "��������� �����");
define("_AM_FORM_PERM", "������ ������� ����� ������������ ������");
define("_AM_FORM_SENDTO", "��������� ");
define("_AM_FORM_SENDTO_ADMIN", "Email �������������� �����");
define("_AM_FORM_SEND_METHOD", "E-mail ��������");
define("_AM_FORM_SEND_METHOD_DESC", " ");
define("_AM_FORM_SEND_METHOD_MAIL", "Email");
define("_AM_FORM_SEND_METHOD_PM", "��������� ���������");
define("_AM_FORM_DELIMETER", "��� ��������� check boxes � radio buttons ");
define("_AM_FORM_DELIMETER_SPACE", "������");
define("_AM_FORM_DELIMETER_BR", "������� ������");
define("_AM_FORM_SUBMIT_TEXT", "����� �� ������ ��� ��������");
define("_AM_FORM_DESC", "�������� �����");
define("_AM_FORM_DESC_DESC", " ");
define("_AM_FORM_INTRO", "�������� �����");
define("_AM_FORM_FINAL", "���������� �����");
define("_AM_FORM_INTRO_DESC", " (����� ������������ �� �������� �����)");
define("_AM_FORM_WHERETO", "URL �� ������� ���������� ����� �������� �����");
define("_AM_FORM_WHERETO_DESC", "�������� ������, ���� ������, ����� ���� ������� �� ������� ��������; {SITE_URL} ������������� ".XOOPS_URL." ��� ������������� ������");

define("_AM_FORM_ACTION_EDITFORM", "������������� ������������ �����");
define("_AM_FORM_ACTION_EDITELEMENT", "������������� �������� �����");
define("_AM_FORM_ACTION_CLONE", "����������� ��� �����");

define("_AM_FORM_NEW", "������� ����� �����");
define("_AM_FORM_EDIT", "������������� �����: %s");
define("_AM_FORM_CONFIRM_DELETE", "�� �������, ��� ������ ������� ��� ����� � ��� � ��������?");

define("_AM_ID", "�����");
define("_AM_ACTION", "��������");
define("_AM_RESET_ORDER", "�������� �������");
define("_AM_SAVE_THEN_ELEMENTS", "��������� � ������� � �������������� ���������");
define("_AM_SAVE_THEN_FORM", "��������� � ������� � �������������� ������������ �����");
define("_AM_NOTHING_SELECTED", "������ �� �������.");
define("_AM_GO_CREATE_FORM", "�� ������ ������� ������� �����");

define("_AM_ELEMENTS_OF_FORM", "�������� ����� ��� %s");
define("_AM_ELE_APPLY_TO_FORM", "��������� � �����");
define("_AM_ELE_HTML", "������� ����� / HTML");

######### version 1.23 additions #########
define("_AM_XOOPS_VERSION_WRONG", "������ ��������� �� �������� ��� ����� ������");
define("_AM_ELE_UPLOADFILE","���� ��������");
define("_AM_ELE_UPLOADIMG","������� ��������");
define("_AM_ELE_UPLOADIMG_MAXWIDTH","������������ ������ (�������)");
define("_AM_ELE_UPLOADIMG_MAXHEIGHT","������������ ����� (�������)");
define("_AM_ELE_UPLOAD_MAXSIZE","������������ ������ ����� (�����)");
define("_AM_ELE_UPLOAD_MAXSIZE_DESC","1k = 1024 ������");
define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT","0 = ��� �����������");
define("_AM_ELE_UPLOAD_ALLOWED_EXT","��������� ���������� ������");
define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC","� �������� ����������� ���������� ������ ��������� |, ��������, 'jpg|jpeg|gif|png|tif|tiff'");
define("_AM_ELE_UPLOAD_ALLOWED_MIME","��������� MIME ����");
define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC","� �������� ����������� MIME ����� ������ ��������� |, ��������, 'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
define("_AM_ELE_UPLOAD_DESC_NOLIMIT","�������� ������ ��� ������ �����������(�� ������������� � ����� ������������)");
define("_AM_ELE_UPLOAD_SAVEAS","��������� ���������� ����� �");
define("_AM_ELE_UPLOAD_SAVEAS_MAIL","������������� � ����");
define("_AM_ELE_UPLOAD_SAVEAS_FILE","���������� ��������");
define("_AM_FORM_SEND_CLIENT","�������� ������������ �������������");
define("_AM_FORM_SUBJ_CLIENT","���� ������ ��� ������������");
define("_AM_FORM_MAIL_CLIENT","����� ������ ��� ������������");
define("_AM_FORM_REPLAY_MAIL","�������� ����� ������");
define("_AM_FORM_SUBJ_ADMIN","���� ������ ��� ��������������");
define("_AM_FORM_MAIL_ADMIN","����� ������ ��� ��������������");
define("_AM_FORM_PREV_SUBMIT","��������������� �������� ����� ���������");

?>