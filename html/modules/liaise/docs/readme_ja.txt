Title:   liaise + captcha + XCL
Version: 1.31
Date:   2012-10-08
Author: Kenichi OHWADA
URL:    http://linux.ohwada.jp/
Email:  webmaster@ohwada.jp
=================================================

1. �Х�����
(1) �ꥹ�ȥܥå���������Ʊ����Τ�ɽ�������
(2) XCL 2.2 �ˤơ��������̤˷ٹ𤬤Ǥ�
http://linux.ohwada.jp/modules/newbb/viewtopic.php?topic_id=1316&forum=6

�ѹ������ե�����
- admin/footer.php
- class/elementrenderer.php


=================================================
Title:   liaise + captcha + XCL
Version: 1.30
Date:   2012-03-31
=================================================

1. XCL 2.2 �б�
$moduleperm_handler ��Global�ѿ��ǤϤʤ�

2. PHP 5.3 �б�
(1) new ���֤��ͤ򻲾Ȥ��������뤳�Ȥϡ��侩����ʤ�

3. MySQL 5.5 �б�
(1) TYPE=MyISAM -> ENGINE=MyISAM

�ѹ������ե�����
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

�ե�ѥå�
�����Υե������ޤȤ᤿��ΤǤ�

(1) Liaise 1.26 
http://www.brandycoke.com/home/modules/cryptica/showfile.php?file_id=31

(2) Liaise 1.23/24/26/50 extra language pack 
http://www.brandycoke.com/home/modules/cryptica/showfile.php?file_id=25

(3) Liaise 1.26 + ����ǧ�� + XCL
http://linux.ohwada.jp/modules/wfdownloads/singlefile.php?cid=1&lid=77


=================================================
Title:   liaise + captcha + XCL
Version: 1.26 + p2
Date:    2008-09-15
=================================================

Liaise 1.26 �Υϥå��ǤǤ���

1. XOOPS Cube Legacy �б�
�������Զ�����������
(1) ���󥹥ȡ���ΤȤ��˲����˥��顼���Ф�
Fatal error: Call to a member function create() on a non-object in functions.php on line 43

(2) �ե���������ΤȤ��˲����˥��顼���Ф�
Fatal error: Call to a member function on a non-object in forms.php on line 276

(3) �������̤ˤƲ����ηٹ𤬽Ф�
XOOPS�ΥС�����󤬤��Υ⥸�塼���ư�������������Ƥ��ޤ���

(4) �������̤ˤư������꤬�����Υ��顼�ˤʤ�
The requested URL system/admin.php was not found on this server.

�����ե�����
- admin/admin_header.php
- admin/footer.php
- include/common.php
- include/funcitons.php

2. ���ܸ� UTF-8 �б�
�ɲåǥ��쥯�ȥꡦ�ե�����
- language/ja_utf8/ 


=================================================
Title:   liaise 1.26 + captcha
Version: 1.26 + p1
Date:    2007-02-20
=================================================

Liaise 1.26 �Υϥå��ǤǤ���

(1) ���ѥ��к��Ȥ��� GIJOE's Ticket Class ��Ƴ������
  �ե�������Ƥǥ��顼�ˤʤ�ȡ��ե�������̤��ɽ������
(2) �����Բ��̤ˤ� GIJOE's Ticket Class ��Ƴ������
(3) ���ѥ��к��Ȥ��� ����ǧ�ڤ�Ƴ������
  �����Բ��̤�����/̤���Ѥ�����Ǥ��ޤ�
  �����ȤΤȤ���ɽ�������
(4) [���ܸ�] �᡼�뤬ʸ�����������Զ�����������
  �֥᡼���������Υ��󥳡�����ˡ�פν���ͤ� EUC-JP ���� ISO-2022-JP ���ѹ�������
(5) PHP5�б�
  Notice [PHP]: Only variable references should be returned by reference

�� ����ǧ�ڤ����Ѥ���ˤ�
(1) Captcha �⥸�塼��򥤥󥹥ȡ��뤷�Ƥ���������
(2) �����Բ��̤ΰ�������ˤơ��ֲ���ǧ�ڡפ�֤Ϥ��פˤ��Ƥ�������

�� Ʊ�������ե�����
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
