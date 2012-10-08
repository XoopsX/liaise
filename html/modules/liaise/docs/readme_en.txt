$Id: readme_en.txt,v 1.2 2012/10/08 02:14:16 ohwada Exp $

=================================================
Title:   liaise + captcha + XCL
Version: 1.31
Date:    2012-10-08
Author:  Kenichi OHWADA
URL:     http://linux2.ohwada.net/
Email:   webmaster@ohwada.net
=================================================

1. Bugfix
(1) all checkbox show the same value
(2) in XCL 2.2, show warning in admin page
http://linux.ohwada.jp/modules/newbb/viewtopic.php?topic_id=1316&forum=6

Changed files
- admin/footer.php
- class/elementrenderer.php


=================================================
Title:   liaise + captcha + XCL
Version: 1.30
Date:    2012-03-31
=================================================

1. Support XCL 2.2
$moduleperm_handler is NOT Global variable.

2. Support PHP 5.3
(1) Assigning the return value of new by reference is now deprecated.

3. Support MySQL 5.5
(1) TYPE=MyISAM -> ENGINE=MyISAM

Changed files
- admin/elements.php
- admin/index.php
- admin/upgrade.php
- class/elementrenderer.php
- class/forms.php
- include/form_execute.php
- include/form_render.php
- sql/mysql.sql


=================================================
Title:   liaise + captcha + XCL
Version: 1.26 + p2
Date:    2008-09-15
=================================================

full pack
it is the one pack to gathere the following files.

(1) Liaise 1.26 
http://www.brandycoke.com/home/modules/cryptica/showfile.php?file_id=31

(2) Liaise 1.23/24/26/50 extra language pack 
http://www.brandycoke.com/home/modules/cryptica/showfile.php?file_id=25

(3) Liaise 1.26 + captcha + XCL
http://linux2.ohwada.net/modules/wfdownloads/singlefile.php?cid=1&lid=33


=================================================
Title:   liaise + captcha + XCL
Version: 1.26 + p2
Date:    2008-09-15
=================================================

This is hack version for Liaise 1.26

1. Supported "XOOPS Cube Legacy"
corrected the following problems
(1) fatal error in install
Fatal error: Call to a member function create() on a non-object in functions.php on line 43

(2) fatal error in form list
Fatal error: Call to a member function on a non-object in forms.php on line 276

(3) warning in admin page
Version of XOOPS does not meet the system requirement. 

(4) error in "Preferences"
The requested URL system/admin.php was not found on this server.

changed files
- admin/admin_header.php
- admin/footer.php
- include/common.php
- include/funcitons.php

2. supoort Japansese UTF-8
added directory and files
- language/ja_utf8/ 


=================================================
Title:   liaise + captcha + XCL
Version: 1.26 + p1
Date:    2007-02-20
=================================================

This is hack version for Liaise 1.26

(1) support GIJOE's Ticket Class for anti-spam
  reload form, if error ocure
(2) support GIJOE's Ticket Class in admin page too
(3) support Captcha for anti-spam
  admin can choice use or not use in admin page
  show and check when anoymous user
(4) [Japanese] bug fix: wrong charset
  changed charset EUC-JP to ISO-2022-JP
(5) support PHP5
  Notice [PHP]: Only variable references should be returned by reference

* use Captcha
(1) install Captcha module
(2) set YES in "Use Captcha" in admin page

* enclosed files
- index.php
- xoops_version.php
- admin/admin_header.php
- admin/elements.php
- admin/editelement.php
- admin/index.php
- class/elementrenderer.php
- class/elements.php
- include/form_render.php.php
- tepmlates/liaise_form.php

