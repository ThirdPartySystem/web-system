<?php
define( 'SITE_NAME' , "WEB-SYSTEM" );
//エラーログの出力先（BTExceptionの例外のログも同一ファイルに入る）
define( 'ERROR_LOG_FILE' , ROOT_PATH.'/framework_bt/error_log.log');

//ローカル
//PHPのバージョンは[php5.6.10]
define( 'HOST' , 'localhost' );
define( 'DB_NAME' , 'web-system' );
define( 'DB_USER' , 'blacktinkerbell' );
define( 'DB_PASS' , 'blacktinkerbell0424' );
define( 'HOME_URL' , "http://web-system.local" );

//リモート5.4.45
//PHPのバージョンは[php5.6.10]
//define( 'HOST' , 'mysql461.db.sakura.ne.jp' );
//define( 'DB_NAME' , 'blackthinkerbell_data' );
//define( 'DB_USER' , 'blackthinkerbell' );
//define( 'DB_PASS' , 'kousuke1991' );
//define( 'HOME_URL' , "http://da-ta.info" );


//phpの設定

//エラーが発生した場合指定したファイルにログを取る
ini_set( 'error_log' , ERROR_LOG_FILE );

//エラー文を画面に表示するか
//本番環境では「0」を指定してユーザーに表示されないようにする。
ini_set('display_errors', 1);

//javascriptからのクッキーの読み出しを禁止する
//XSSの攻撃手段の減少を目的とするもの
ini_set('session.cookie_httponly', true);

//推測不可能なセッションIDを改善する
ini_set('session.entropy_file' , "/div/urandom");//Linuxなど多くのUnix系OSで実装されている乱数生成器
ini_set('session.entropy_length' , 32 );

//セッションIDをURLに埋め込ませないための対応
ini_set( 'session.use_cookies' , 1 );//セッションIDの保存にクッキーを使う
ini_set( 'session.use_only_cookies' , 1 );//セッションIDをクッキーのみに保存する
ini_set( 'session.use_trans_sid' , 0 );//URLにセッションIDを自動的に埋め込みする

error_reporting(E_ALL);
date_default_timezone_set('Asia/Tokyo');

?>