<?php
	// $Id: admin.php,v 1.1 2012/03/31 16:00:15 ohwada Exp $
	define("_AM_SAVE","保存");
	define("_AM_COPIED","%s copy");
	define("_AM_DBUPDATED","データーベースを更新しました!");
	define("_AM_ELE_CREATE","フォーム要素の作成");
	define("_AM_ELE_EDIT","フォーム要素の編集: %s");
	
	define("_AM_ELE_CAPTION","表題");
	define("_AM_ELE_DEFAULT","初期値");
	define("_AM_ELE_DETAIL","詳細");
	define("_AM_ELE_REQ","必須項目");
	define("_AM_ELE_ORDER","順番");
	define("_AM_ELE_DISPLAY","表示");
	
	define("_AM_ELE_TEXT","テキストボックス");
	define("_AM_ELE_TEXT_DESC","{UNAME} はユーザーの名前を表示;<br />{EMAIL} はユーザーのEメールを表示");
	define("_AM_ELE_TAREA","テキストエリア");
	define("_AM_ELE_SELECT","セレクトボックス");
	define("_AM_ELE_CHECK","チェックボックス");
	define("_AM_ELE_RADIO","ラジオボタン");
	define("_AM_ELE_YN","シンプルな yes/no ラジオボタン");
	
	define("_AM_ELE_SIZE","サイズ");
	define("_AM_ELE_MAX_LENGTH","最大の長さ");
	define("_AM_ELE_ROWS","行数");
	define("_AM_ELE_COLS","列数");
	define("_AM_ELE_OPT","オプション");
	define("_AM_ELE_OPT_DESC","初期値にチェックを入れてください。");
	define("_AM_ELE_OPT_DESC1","<br />複合選択を許可しない場合、1番目にチェックされた項目だけが使用されます。");
	define("_AM_ELE_OPT_DESC2","ラジオボタンにチェックすると、初期値に設定されます");
	define("_AM_ELE_ADD_OPT","オプション %s を追加");
	define("_AM_ELE_ADD_OPT_SUBMIT","追加");
	define("_AM_ELE_SELECTED","Selected");
	define("_AM_ELE_CHECKED","Checked");
	define("_AM_ELE_MULTIPLE","複数選択を許可する");
	
	define("_AM_ELE_CONFIRM_DELETE","このフォーム要素を削除しますか?");
	
	######### version 1.1 #########
	define("_AM_ELE_OTHER", '追加オプションについては、テキストボックスに {OTHER|*数字*} を入れてください。例えば {OTHER|30} が、30の幅を備えたテキストボックスを生成します。');
	
	######### version 1.2 additions #########
	define("_AM_FORM_LISTING", "コンタクトフォームリスト");
	define("_AM_FORM_ORDER","表示順");
	define("_AM_FORM_ORDER_DESC","0=非表示");
	define("_AM_FORM_TITLE", "フォームタイトル");
	define("_AM_FORM_PERM", "送信者グループ");
	define("_AM_FORM_SENDTO", "送信先");
	define("_AM_FORM_SENDTO_ADMIN", "サイト管理の電子メール");
	define("_AM_FORM_SEND_METHOD", "送信方法");
	define("_AM_FORM_SEND_METHOD_DESC", "送信方法でプライベートメッセージを選択すると "._AM_FORM_SENDTO_ADMIN." またはゲストユーザは送信する事が出来なくなります。");
	define("_AM_FORM_SEND_METHOD_MAIL", "Eメール");
	define("_AM_FORM_SEND_METHOD_PM", "プライベートメッセージ");
	define("_AM_FORM_DELIMETER", "チェックボックスとラジオボタンの並び方");
	define("_AM_FORM_DELIMETER_SPACE", "空白スペース(横並び)");
	define("_AM_FORM_DELIMETER_BR", "改行(縦並び)");
	define("_AM_FORM_SUBMIT_TEXT", "送信ボタンに表示されるテキスト文");
	define("_AM_FORM_DESC", "フォーム一覧に表示するコメント");
	define("_AM_FORM_DESC_DESC", "複数のフォームを利用する場合に一覧ページに表示されるフォームの説明文");
	define("_AM_FORM_INTRO", "フォームページに表示するコメント");
	define("_AM_FORM_INTRO_DESC", "フォームページの上部に表示されるテキスト");
	define("_AM_FORM_WHERETO", "フォームの送信後にジャンプするページのURL");
	define("_AM_FORM_WHERETO_DESC", "サイトのホームページを記入してください; {SITE_URL} と記載すれば ".XOOPS_URL." が表示されます");
	
	define("_AM_FORM_ACTION_EDITFORM", "フォーム要素の設定を編集");
	define("_AM_FORM_ACTION_EDITELEMENT", "フォーム要素の形式を編集");
	define("_AM_FORM_ACTION_CLONE", "このフォームの複製を作成");
	
	define("_AM_FORM_NEW", "新規フォーム要素を作成");
	define("_AM_FORM_EDIT", "フォームの編集: %s");
	define("_AM_FORM_CONFIRM_DELETE", "このフォーム及びすべてのフォーム要素を削除しますか?");
	
	define("_AM_ID", "ID");
	define("_AM_ACTION", "作業項目");
	define("_AM_RESET_ORDER", "表示順の変更");
	define("_AM_SAVE_THEN_ELEMENTS", "保存して要素を編集");
	define("_AM_SAVE_THEN_FORM", "保存して要素を編集");
	define("_AM_NOTHING_SELECTED", "未選択");
	define("_AM_GO_CREATE_FORM", "最初にフォームを作成しなければなりません。");
	
	define("_AM_ELEMENTS_OF_FORM", "%s のフォーム要素");
	define("_AM_ELE_APPLY_TO_FORM", "フォームの応用");
	define("_AM_ELE_HTML", "テキスト / HTML");
	
	######### version 1.23 additions #########
	define("_AM_XOOPS_VERSION_WRONG", "XOOPSのバージョンがこのモジュールの動作する条件を満たしていません。Liaiseは適正に働かないかもしれません。");
	define("_AM_ELE_UPLOADFILE","ファイルのアップロード");
	define("_AM_ELE_UPLOADIMG","画像のアップロード");
	define("_AM_ELE_UPLOADIMG_MAXWIDTH","最大の幅 (ピクセル)");
	define("_AM_ELE_UPLOADIMG_MAXHEIGHT","最大の高さ (ピクセル)");
	define("_AM_ELE_UPLOAD_MAXSIZE","最大のファイルサイズ (バイト)");
	define("_AM_ELE_UPLOAD_MAXSIZE_DESC","1k = 1024 バイト");
	define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT","0 = 無制限");
	define("_AM_ELE_UPLOAD_ALLOWED_EXT","受け入れるファイルの拡張子");
	define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC","拡張子を|で区切って入力してください。 例:'jpg|jpeg|gif|png|tif|tiff'");
	define("_AM_ELE_UPLOAD_ALLOWED_MIME","受け入れるMIMEタイプ");
	define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC","MIMEタイプを|で区切って入力してください。例:'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
	define("_AM_ELE_UPLOAD_DESC_NOLIMIT","空白にすることで制限しなくなります。(セキュリティ上の問題が生まれるので推奨しません)");
	define("_AM_ELE_UPLOAD_SAVEAS","アップロードされたファイルの保存先");
	define("_AM_ELE_UPLOAD_SAVEAS_MAIL","メールに添付");
	define("_AM_ELE_UPLOAD_SAVEAS_FILE","アップロード用のディレクトリ");
?>