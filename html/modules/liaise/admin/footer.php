<?php
// $Id: footer.php,v 1.3 2012/10/08 02:07:10 ohwada Exp $

// 2012-10-08 K.OHWADA
// show warning in xcl 2.2

// 2008-09-15 K.OHWADA
// for Xoops Cube Legacy

// Id: footer.php 26 2005-09-04 09:52:40Z tuff 
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
$version = number_format($xoopsModule->getVar('version')/100, 2);
$version = !substr($version, -1, 1) ? substr($version, 0, 3) : $version;

$credits = "<div style='text-align: right; font-size: x-small; margin-top: 15px;'>Powered by <a href='about.php'>Liaise ".$version."</a>";
echo $credits;

// --- for XCL ---
//$version_check = preg_match('/2\.0\.[9|10|11|12|13]/', XOOPS_VERSION);
if ( defined( 'XOOPS_CUBE_LEGACY' ) ) {
// show warning in xcl 2.2
	$pattern = '/2\.[1|2]/';
} else {
	$pattern = '/2\.0\.\d+/';
}
$version_check = preg_match( $pattern, XOOPS_VERSION );
// ------

if( !$version_check ){
	echo '<br /><span style="color: #F00;"><b>'._AM_XOOPS_VERSION_WRONG.'</b></span>';
}

echo '</div>';
?>