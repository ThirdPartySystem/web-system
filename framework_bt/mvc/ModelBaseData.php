<?php
abstract class ModelBaseData
{
	private static $connInfo;
    protected static $db;
	//コンストラクタ
	public function __construct()
	{
	}
	
	public function initDb()
    {
    }
	
	public static function setConnectionInfo($connInfo)
    {
        self::$connInfo = $connInfo;
    }

    public static function connectDataBase(){

        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;port=3306;',
            self::$connInfo['host'],
            self::$connInfo['dbname']
        );
		try{
			
        	self::$db = new PDO($dsn, self::$connInfo['dbuser'], self::$connInfo['password']);
			self::$db->query('SET NAMES utf8');
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
		}catch( Exception $e ){
			die( 'Connection Faile：'.$e->getMessage() );
		}
    }
	
	public static function beginTransaction(){
		return self::$db->beginTransaction();
	}
	public static function rollBack(){
		return self::$db->rollBack();
	}
	
	public static function commit(){
		return self::$db->commit();
	}
	
}
?>