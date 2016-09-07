<?php
//define( 'ROOT_PATH' , $_SERVER['DOCUMENT_ROOT'].'/data/' );
define( 'ROOT_PATH' ,  rtrim( $_SERVER['DOCUMENT_ROOT'] , '/' ) );
require_once ROOT_PATH.'/framework_bt/config.php';
require_once ROOT_PATH.'/framework_bt/functions.php';
require_once ROOT_PATH.'/framework_bt/mvc/Dispatcher.php';
require_once ROOT_PATH.'/framework_bt/mvc/ModelBaseData.php';
require_once ROOT_PATH.'/framework_bt/class/BTException.php';


// DB接続情報設定
$connInfo = array(
    'host'     => HOST,
    'dbname'   => DB_NAME,
    'dbuser'   => DB_USER,
    'password' => DB_PASS
);
ModelBaseData::setConnectionInfo($connInfo );
ModelBaseData::connectDataBase();
$dispatcher = new Dispatcher();
$dispatcher->setSystemRoot(ROOT_PATH);
$dispatcher->dispatch();
?>