<?php
// $Id: functions.php,v 1.2 2012/03/31 18:15:32 ohwada Exp $

// 2008-09-15 K.OHWADA
// for Xoops Cube Legacy

// Id: functions.php 42 2005-09-18 16:28:17Z tuff 
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
##  Author of this file: NS Tai (aka tuff)                                   ##
##  URL: http://www.brandycoke.com/                                          ##
##  Project: Liaise                                                          ##
###############################################################################

function xoops_module_install_liaise(&$module){

// --- for XCL ---
//	global $moduleperm_handler;
	$moduleperm_handler =& xoops_gethandler('groupperm');

	/*
	$msgs[] = 'Setting up default permissions...';
	$m = '&nbsp;&nbsp;Grant permission of form id %u to group id %u ......%s';
	*/
	for( $i=1; $i<4; $i++ ){
		$perm =& $moduleperm_handler->create();
		$perm->setVar('gperm_name', 'liaise_form_access');
		$perm->setVar('gperm_itemid', 1);
		$perm->setVar('gperm_groupid', $i);
		$perm->setVar('gperm_modid', $module->getVar('mid'));
		$moduleperm_handler->insert($perm);
		/*
		if( !$moduleperm_handler->insert($perm) ){
			$msgs[] = sprintf($m, 1, $i, 'failed');
		}else{
			$msgs[] = sprintf($m, 1, $i, 'done');
		}
		*/
	}
	return true;
}

?>