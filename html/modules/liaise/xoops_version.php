<?php
// $Id: xoops_version.php,v 1.3 2012/10/08 02:07:10 ohwada Exp $

// 2012-10-08 K.OHWADA
// 1.31

// 2008-09-15 K.OHWADA
// set ISO-2022-JP when ja_utf8

// 2007-02-18 K.OHWADA
// use captcha module

// 2006-12-20 K.OHWADA
// change mail_charset for Japanese
// add captcha

// Id: xoops_version.php 26 2005-09-04 09:52:40Z tuff 
###############################################################################
##                Liaise -- Contact forms generator for XOOPS                ##
##                 Copyright (c) 2003-2005 NS Tai (aka tuff)                 ##
##                       <http://www.brandycoke.com/>                        ##
###############################################################################
##                   XOOPS - PHP Content Management System                   ##
##                       Copyright (c) 2000 XOOPS.org                        ##
##                          <http://www.xoops.org/>                          ##
###############################################################################
##  This program is free software; you can redistribute it and/or modify     ##
##  it under the terms of the GNU General Public License as published by     ##
##  the Free Software Foundation; either version 2 of the License, or        ##
##  (at your option) any later version.                                      ##
##                                                                           ##
##  You may not change or alter any portion of this comment or credits       ##
##  of supporting developers from this source code or any supporting         ##
##  source code which is considered copyrighted (c) material of the          ##
##  original comment or credit authors.                                      ##
##                                                                           ##
##  This program is distributed in the hope that it will be useful,          ##
##  but WITHOUT ANY WARRANTY; without even the implied warranty of           ##
##  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            ##
##  GNU General Public License for more details.                             ##
##                                                                           ##
##  You should have received a copy of the GNU General Public License        ##
##  along with this program; if not, write to the Free Software              ##
##  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA ##
###############################################################################

$modversion['name'] = _MI_LIAISE_NAME;

//$modversion['version'] = '1.26';
$modversion['version'] = '1.32';

$modversion['description'] = _MI_LIAISE_DESC;
$modversion['author'] = "NS Tai (aka tuff)";
$modversion['credits'] = "<a href='http://www.brandycoke.com/' target='_blank'>Brandycoke Productions</a>";
$modversion['help'] = "";
$modversion['license'] = "<a href='http://creativecommons.org/licenses/GPL/2.0/' target='_blank'>Human-Readable Commons Deed</a><br /><a href='http://www.gnu.org/copyleft/gpl.html' target='_blank'>Full Legal Code</a>";
$modversion['official'] = 0;
$modversion['image'] = "images/liaise.png";
$modversion['dirname'] = "liaise";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "liaise_forms";
$modversion['tables'][1] = "liaise_formelements";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu -- content in main menu block
$modversion['hasMain'] = 1;

$modversion['onInstall'] = 'include/functions.php';

// Templates
$modversion['templates'][1]['file'] = 'liaise_index.html';
$modversion['templates'][1]['description'] = _MI_LIAISE_TMPL_MAIN_DESC;
$modversion['templates'][2]['file'] = 'liaise_form.html';
$modversion['templates'][2]['description'] = _MI_LIAISE_TMPL_FORM_DESC;
$modversion['templates'][3]['file'] = 'liaise_error.html';
$modversion['templates'][3]['description'] = _MI_LIAISE_TMPL_ERROR_DESC;

//	Module Configs
// $xoopsModuleConfig['t_width']
$modversion['config'][1]['name'] = 't_width';
$modversion['config'][1]['title'] = '_MI_LIAISE_TEXT_WIDTH';
$modversion['config'][1]['description'] = '';
$modversion['config'][1]['formtype'] = 'textbox';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = '35';

// $xoopsModuleConfig['t_max']
$modversion['config'][2]['name'] = 't_max';
$modversion['config'][2]['title'] = '_MI_LIAISE_TEXT_MAX';
$modversion['config'][2]['description'] = '';
$modversion['config'][2]['formtype'] = 'textbox';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = '255';

// $xoopsModuleConfig['ta_rows']
$modversion['config'][3]['name'] = 'ta_rows';
$modversion['config'][3]['title'] = '_MI_LIAISE_TAREA_ROWS';
$modversion['config'][3]['description'] = '';
$modversion['config'][3]['formtype'] = 'textbox';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = '5';

// $xoopsModuleConfig['ta_cols']
$modversion['config'][4]['name'] = 'ta_cols';
$modversion['config'][4]['title'] = '_MI_LIAISE_TAREA_COLS';
$modversion['config'][4]['description'] = '';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'int';
$modversion['config'][4]['default'] = '35';

// $xoopsModuleConfig['moreinfo']
$modversion['config'][5]['name'] = 'moreinfo';
$modversion['config'][5]['title'] = '_MI_LIAISE_MOREINFO';
$modversion['config'][5]['description'] = '';
$modversion['config'][5]['formtype'] = 'select_multi';
$modversion['config'][5]['valuetype'] = 'array';
$modversion['config'][5]['default'] = array('user', 'ip', 'agent');
$modversion['config'][5]['options'] = array(_MI_LIAISE_MOREINFO_USER => 'user', _MI_LIAISE_MOREINFO_IP => 'ip', _MI_LIAISE_MOREINFO_AGENT => 'agent', _MI_LIAISE_MOREINFO_FORM => 'form');

// $xoopsModuleConfig['mail_charset']
$modversion['config'][6]['name'] = 'mail_charset';
$modversion['config'][6]['title'] = '_MI_LIAISE_MAIL_CHARSET';
$modversion['config'][6]['description'] = '_MI_LIAISE_MAIL_CHARSET_DESC';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'text';

// --- for Japanese ---
//$modversion['config'][6]['default'] = _CHARSET;
$charset = _CHARSET;
global $xoopsConfig;
if (( $xoopsConfig['language'] == 'japanese' )||
    ( $xoopsConfig['language'] == 'ja_utf8' ))
{
	$charset = 'ISO-2022-JP';
}
$modversion['config'][6]['default'] = $charset;
//------

// $xoopsModuleConfig['prefix']
$modversion['config'][7]['name'] = 'prefix';
$modversion['config'][7]['title'] = '_MI_LIAISE_PREFIX';
$modversion['config'][7]['description'] = '';
$modversion['config'][7]['formtype'] = 'textbox';
$modversion['config'][7]['valuetype'] = 'text';
$modversion['config'][7]['default'] = '';

// $xoopsModuleConfig['suffix']
$modversion['config'][8]['name'] = 'suffix';
$modversion['config'][8]['title'] = '_MI_LIAISE_SUFFIX';
$modversion['config'][8]['description'] = '';
$modversion['config'][8]['formtype'] = 'textbox';
$modversion['config'][8]['valuetype'] = 'text';
$modversion['config'][8]['default'] = '*';

// $xoopsModuleConfig['intro']
$modversion['config'][9]['name'] = 'intro';
$modversion['config'][9]['title'] = '_MI_LIAISE_INTRO';
$modversion['config'][9]['description'] = '';
$modversion['config'][9]['formtype'] = 'textarea';
$modversion['config'][9]['valuetype'] = 'text';
$modversion['config'][9]['default'] = _MI_LIAISE_INTRO_DEFAULT;

// $xoopsModuleConfig['global']
$modversion['config'][10]['name'] = 'global';
$modversion['config'][10]['title'] = '_MI_LIAISE_GLOBAL';
$modversion['config'][10]['description'] = '';
$modversion['config'][10]['formtype'] = 'textarea';
$modversion['config'][10]['valuetype'] = 'text';
$modversion['config'][10]['default'] = _MI_LIAISE_GLOBAL_DEFAULT;

// $xoopsModuleConfig['uploaddir']
$modversion['config'][11]['name'] = 'uploaddir';
$modversion['config'][11]['title'] = '_MI_LIAISE_UPLOADDIR';
$modversion['config'][11]['description'] = '_MI_LIAISE_UPLOADDIR_DESC';
$modversion['config'][11]['formtype'] = 'textbox';
$modversion['config'][11]['valuetype'] = 'text';
$modversion['config'][11]['default'] = XOOPS_UPLOAD_PATH.'/'.uniqid(rand());

// --- captcha ---
// $xoopsModuleConfig['captcha']
include_once XOOPS_ROOT_PATH.'/modules/captcha/include/lang.php';
$modversion['config'][12]['name'] = 'captcha';
$modversion['config'][12]['title'] = '_CAPTCHA_CONFIG_TITLE';
$modversion['config'][12]['description'] = '_CAPTCHA_CONFIG_DESC';
$modversion['config'][12]['formtype'] = 'yesno';
$modversion['config'][12]['valuetype'] = 'int';
$modversion['config'][12]['default'] = 1;
// --- captcha ---

?>