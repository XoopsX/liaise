<?php
	// $Id: main.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $
	define("_LIAISE_MSG_SUBJECT", $xoopsConfig['sitename'].' - %s');
	define("_LIAISE_MSG_SENT", "あなたのメッセージは送信されました。<br />コメントありがとうございました。");
	
	######### version 1.1 #########
	//	"Other" option for check boxes/radio buttons/selections
	define("_LIAISE_OPT_OTHER", "その他: ");
	define("_LIAISE_PROXY", " (Proxy: %s)");
	
	//	error messages
	define("_LIAISE_ERR_HEADING", "しばらくお待ちください...");
	define("_LIAISE_ERR_INVALIDMAIL", "メールアドレスが間違っています");
	define("_LIAISE_ERR_REQ", '"%s" 欄は必須記入項目です');
	
	######### version 1.2 additions #########
	define("_LIAISE_FORM_IS_HIDDEN", "このフォームは非公開です");
	define("_LIAISE_MSG_UNAME", "送信者: %s");
	define("_LIAISE_MSG_UINFO", "\nユーザ情報ページのURL:\n%s");
	define("_LIAISE_MSG_IP", "IPアドレス: %s");
	define("_LIAISE_MSG_AGENT", "User agent: %s");
	define("_LIAISE_MSG_FORMURL", "このメッセージは次のURLから送信されました:\n%s");
	
	######### version 1.23 additions #########
	define("_LIAISE_ATTACHED_FILE", "添付ファイル: %s");
	define("_LIAISE_UPLOADED_FILE", "アップロードファイル: %s");

?>