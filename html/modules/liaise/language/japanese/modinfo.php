<?php
	// $Id: modinfo.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $
	
	// The name of this module
	define("_MI_LIAISE_NAME","お問い合わせ");
	
	// A brief description of this module
	define("_MI_LIAISE_DESC","管理者へメッセージを送る為のモジュール");
	
	// admin/menu.php
	define("_MI_LIAISE_ADMENU1","コンタクトフォーム一覧");
	define("_MI_LIAISE_ADMENU2","コンタクトフォーム作成");
	
	//	preferences
	define("_MI_LIAISE_TEXT_WIDTH","テキストボックス横幅の初期値");
	define("_MI_LIAISE_TEXT_MAX","テキストボックス最大文字数の初期値");
	define("_MI_LIAISE_TAREA_ROWS","テキストエリア行数の初期値");
	define("_MI_LIAISE_TAREA_COLS","テキストエリア列数の初期値");
	
	######### version 1.1  additions #########
	//	preferences
	define("_MI_LIAISE_MAIL_CHARSET","メール送信時のエンコード方法");
	
	//	template descriptions
	define("_MI_LIAISE_TMPL_MAIN_DESC","お問い合わせのメインページ");
	define("_MI_LIAISE_TMPL_ERROR_DESC","エラーが発生したページ");
	
	######### version 1.2 additions #########
	//	template descriptions
	define("_MI_LIAISE_TMPL_FORM_DESC","フォームのテンプレート");
	
	//	preferences
	define("_MI_LIAISE_MOREINFO","送信内容と共に送られる補足情報");
	define("_MI_LIAISE_MOREINFO_USER","ユーザ名とユーザ情報ページのURL");
	define("_MI_LIAISE_MOREINFO_IP","投稿者のIPアドレス");
	define("_MI_LIAISE_MOREINFO_AGENT","投稿者のUser agent (ブラウザ)");
	define("_MI_LIAISE_MOREINFO_FORM","投稿フォームのURL");
	define("_MI_LIAISE_MAIL_CHARSET_DESC","空白の場合は "._CHARSET." で送信されます");
	define("_MI_LIAISE_PREFIX","必須記入項目のテキスト(文頭)");
	define("_MI_LIAISE_SUFFIX","必須記入項目のテキスト(文末)");
	define("_MI_LIAISE_INTRO","一覧表示画面の上部に表示される説明文");
	define("_MI_LIAISE_GLOBAL","各フォームの下部に表示されるテキスト");
	
	// admin/menu.php
	define("_MI_LIAISE_ADMENU3","フォーム要素作成");
	
	######### version 1.21 additions #########
	// preferences default values
	define("_MI_LIAISE_INTRO_DEFAULT","当サイトへのお問い合わせは次の各フォームからお送り下さい:");
	define("_MI_LIAISE_GLOBAL_DEFAULT","[b]* 必須記入項目[/b]");
	
######### version 1.23 additions #########
define("_MI_LIAISE_UPLOADDIR","アップロードファイル保存先の物理パス（最後の/は不要）");
define("_MI_LIAISE_UPLOADDIR_DESC","プライベートメッセージで送られたアップロードファイルは、すべてここに保存されます");

?>