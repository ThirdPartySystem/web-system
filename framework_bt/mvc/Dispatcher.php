<?php
require_once 'smarty/libs/Smarty.class.php';
require_once 'Request.php';
require_once 'Cookie.php';
require_once 'Session.php';
require_once 'Login.php';
require_once 'WebFunction.php';
require_once 'ControllerBase.php';
require_once 'ModelBaseEntity.php';
//ModelBaseDataはindex.phpにて読み込み済み
//require_once 'ModelBaseData.php';

class Dispatcher
{
	private $sysRoot;
	private $notfound_flag = false;
	
	public function __construct(){
	}
	
	//システムのルートディレクトリを設定
	public function setSystemRoot( $path )
	{
		$this->sysRoot = rtrim( $path , '/' );
	}
	
	//振り分け処理を実行
	public function dispatch()
	{
		//パラメーター取得（末尾の/は削除）
		$param = trim( $_SERVER['REQUEST_URI']  , '/');
		$params = array();
		if( '' != $param ){
			//パラメーターを"/"で分割
			$params = explode( '/' , $param );
		}
		
		//1番目のパラメーターをコントローラーとして取得
		$controller = 'index';
		if( 0 < count( $params ) ){
			if( substr( $params[0] , 0 , 1 ) == '?' ){// '/'で分けた1つ目のパラメータの最初が'?'ならコントローラーindexに対してのクエリーとする
				$controller = 'index';
			}else{
				$controller = $params[0];
			}
		}
		//１番目のパラメーターをもとにコントローラークラスインスタンス取得
		$controllerInstance = $this->getControllerInstance($controller);
		if( null == $controllerInstance ) {
			$this->notfound_flag = true;
		}
		if( $this->notfound_flag === false ){
			//２番目のパラメーターをアクションとして取得
			$action = 'index';
			if( 1 < count( $params ) ) {
				if( substr( $params[1] , 0 , 1 ) == '?' ){//パラメーターが渡された時
					$action = 'index';
				}else{
					if( preg_match( "/^[0-9]+$/" , $params[1] ) ){//１０進数のIDの値が渡されたら
						$controllerInstance->setParamId( $params[1] );
					}else{
						$action = $params[1] ;
					}
				}
			}

			//３番目のパラメーターをIDとして取得
			if( 2 < count( $params ) ) {
				if( substr( $params[2] , 0 , 1 ) == '?' ){//パラメーターが渡された時

				}else{
					if( preg_match( "/^[0-9]+$/" , $params[2] ) ){//１０進数のIDの値が渡されたら
						$controllerInstance->setParamId( $params[2] );
					}else{
						$action = $params[2] ;
					}
				}
			}

			
			//アクションメソッドの存在確認
			if( false == method_exists( $controllerInstance , $action.'Action' ) ){
				$this->notfound_flag = true;
			}
		}
		if( $this->notfound_flag ){
			$controller = "notfound";
			$action = "index";
			$controllerInstance = $this->getControllerInstance($controller);	
			if( null == $controllerInstance || ( false == method_exists( $controllerInstance ,$action.'Action' ) ) )
			{
				echo "エラーが発生しました。<br>時間をおいてからアクセスしてください。";
				exit;
			}
		}
		
		//コントローラー初期設定
		$controllerInstance->setSystemRoot( $this->sysRoot );
		$controllerInstance->setSiteUrl( HOME_URL );
		$controllerInstance->setSiteName( SITE_NAME );
		$controllerInstance->setControllerAction( $controller , $action );
		
		//処理実行
		$controllerInstance->run();
	
	}
	
	//コントローラークラスのインスタンスを取得
	private function getControllerInstance( $controller )
	{
		//一文字目のみ大文字に変換＋"Controller"
		$className = ucfirst( strtolower( $controller ) ).'Controller';
		
		//コントローラーファイル名
		$controllerFileName = sprintf( '%s/controllers/%s.php', $this->sysRoot , $className );
		
		//ファイル存在チェック
		if( false == file_exists( $controllerFileName ) ){
			return null;
		}
		
		//クラスファイルを読み込み
		require_once $controllerFileName;
		//クラスが定義されているかチェック
		if( false == class_exists( $className ) ) {
			return null;
		}
		
		
		//クラスインスタンス生成
		$controllerInstance = new $className();
		
		return $controllerInstance;
	}
}
?>