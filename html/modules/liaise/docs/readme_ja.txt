Title:   liaise + captcha + XCL
Version: 1.31
Date:   2012-10-08
Author: Kenichi OHWADA
URL:    http://linux.ohwada.jp/
Email:  webmaster@ohwada.jp
=================================================

1. バグ修正
(1) リストボックスに全て同じものが表示される
(2) XCL 2.2 にて、管理画面に警告がでる
http://linux.ohwada.jp/modules/newbb/viewtopic.php?topic_id=1316&forum=6

変更したファイル
- admin/footer.php
- class/elementrenderer.php


=================================================
Title:   liaise + captcha + XCL
Version: 1.30
Date:   2012-03-31
=================================================

1. XCL 2.2 対応
$moduleperm_handler がGlobal変数ではない

2. PHP 5.3 対応
(1) new の返り値を参照で代入することは、推奨されない

3. MySQL 5.5 対応
(1) TYPE=MyISAM -> ENGINE=MyISAM

変更したファイル
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

フルパック
下記のファイルをまとめたものです

(1) Liaise 1.26 
http://www.brandycoke.com/home/modules/cryptica/showfile.php?file_id=31

(2) Liaise 1.23/24/26/50 extra language pack 
http://www.brandycoke.com/home/modules/cryptica/showfile.php?file_id=25

(3) Liaise 1.26 + 画像認証 + XCL
http://linux.ohwada.jp/modules/wfdownloads/singlefile.php?cid=1&lid=77


=================================================
Title:   liaise + captcha + XCL
Version: 1.26 + p2
Date:    2008-09-15
=================================================

Liaise 1.26 のハック版です。

1. XOOPS Cube Legacy 対応
下記の不具合を修正した。
(1) インストールのときに下記にエラーが出る
Fatal error: Call to a member function create() on a non-object in functions.php on line 43

(2) フォーム一覧のときに下記にエラーが出る
Fatal error: Call to a member function on a non-object in forms.php on line 276

(3) 管理画面にて下記の警告が出る
XOOPSのバージョンがこのモジュールの動作する条件を満たしていません。

(4) 管理画面にて一般設定が下記のエラーになる
The requested URL system/admin.php was not found on this server.

修正ファイル
- admin/admin_header.php
- admin/footer.php
- include/common.php
- include/funcitons.php

2. 日本語 UTF-8 対応
追加ディレクトリ・ファイル
- language/ja_utf8/ 


=================================================
Title:   liaise 1.26 + captcha
Version: 1.26 + p1
Date:    2007-02-20
=================================================

Liaise 1.26 のハック版です。

(1) スパム対策として GIJOE's Ticket Class を導入した
  フォーム投稿でエラーになると、フォーム画面を再表示する
(2) 管理者画面にも GIJOE's Ticket Class を導入した
(3) スパム対策として 画像認証を導入した
  管理者画面より使用/未使用が選択できます
  ゲストのときに表示される
(4) [日本語] メールが文字化けする不具合を修正した。
  「メール送信時のエンコード方法」の初期値を EUC-JP から ISO-2022-JP に変更した。
(5) PHP5対応
  Notice [PHP]: Only variable references should be returned by reference

● 画像認証を利用するには
(1) Captcha モジュールをインストールしてください。
(2) 管理者画面の一般設定にて、「画像認証」を「はい」にしてださい。

● 同封したファイル
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
