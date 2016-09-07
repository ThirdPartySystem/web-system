<?php
abstract class ControllerBase
{
	protected $systemRoot;
	protected $controller = 'index';
	protected $action = 'index';
	protected $view;
	protected $request;
	protected $cookie;
	protected $login;
	protected $session;
	protected $siteName;
	protected $siteUrl;
	protected $pageTitle;
	protected $pageDescription;
	protected $paramId = "";
	protected $file_upload;

	protected $login_flag;//ログインしているかチェック
	protected $user_info;

	//コンストラクタ
	public function __construct()
	{
		$this->request = new Request();
		$this->cookie = new Cookie();
		$this->session = new Session();
		$this->wF = new WebFunction();

		//ログイン関係
		$this->login = new Login();
		$this->login_flag = $this->login->loginCheck();
		$this->user_info = false;
	}
	
	//システムのルートディレクトリパスを設定（Dispatcherで設定）
	public function setSystemRoot( $path )
	{
		$this->systemRoot = $path;
	}
	
	public function setParamId( $paramId ){
		$this->paramId = $paramId;
	}
	protected function getParamId( ){
		return $this->paramId;
	}
	protected function setPageTitle( $pageTitle ){
		$this->pageTitle = $pageTitle;
	}
	protected function getPageTitle( ){
		return $this->pageTitle;
	}

	protected function setPageDescription( $description ){
		$this->pageDescription = $description;
	}

	protected function getPageDescription(){
		return $this->pageDescription;
	}
	
	//コントローラーとアクションの文字列設定（Dispatcherで設定）
	public function setControllerAction( $controller , $action )
	{
		$this->controller = $controller;
		$this->action = $action;
	}
	
	public function setSiteUrl( $url ){
		$this->siteUrl = $url;
	}
	public function setSiteName( $name ){
		$this->siteName = $name;
		$this->pageTitle = $name;//ページのタイトルにも設定
	}
	
	//処理実行
	public function run()
	{
		try{
			
			//ビューの初期化
			$this->initializeView();
			
			//共通前処理
			$this->preAction();
			
			//変数の割り当て
			$this->varAssign();
			//アクションメソッド
			$methodName = sprintf( '%sAction' , $this->action );
			
			$this->$methodName();
			
			//共通変数の割り当て
			$this->commonVarAssign();
			
			
			//View
			if( $this->view->templateExists( $this->templatePath ) ){
				$this->view();
			}
			
			
		}catch( Exception $e ){
			//ログ出力等の処理を記述
			echo $e->getMessage();
			echo 'エラーが発生しました。';
		}
	}
	
	//ビューの初期化
	protected function initializeView()
	{
		$this->view = new Smarty();
		$this->view->template_dir = sprintf( '%s/views/templates/' , $this->systemRoot );
		$this->view->compile_dir = sprintf( '%s/views/templates_c/' , $this->systemRoot );
		$this->templatePath = sprintf( '%s/%s.tpl' , $this->controller , $this->action );
		
	}
	
	//共通前処理（オーバーライド前提）
	protected function preAction()
	{
	}
	
	//変数の割り当て（オーバーライド前提）
	protected function varAssign()
	{
	}
	
	//実際にWebの表示をする（場合によってはオーバーロード）
	protected function view(){
			//表示
			$this->view->display( 'common.tpl' );
		
	}
	
	//変数の割り当て（共通）
	private function commonVarAssign()
	{
		$this->view->assign('controller' , $this->controller );
		$this->view->assign('action' , $this->action );
		$this->view->assign('templatePath' , $this->templatePath );
		
		$this->view->assign('sideberTemplateExistsFlag' , $this->view->templateExists( 'sideber/'.$this->templatePath ) );
		$this->view->assign('sideberTemplatePath' , 'sideber/'.$this->templatePath );
		$this->view->assign('siteName' , $this->siteName );
		$this->view->assign('pageTitle' , $this->pageTitle );
		$this->view->assign('pageDescription' , $this->pageDescription );
		$this->view->assign('systemRoot' , $this->systemRoot );
		$this->view->assign('imageDir' , $this->siteUrl.'/htdocs/images' );
		$this->view->assign('styleDir' , $this->siteUrl.'/htdocs/style' );
		$this->view->assign('javaScriptDir' , $this->siteUrl.'/htdocs/javascript' );
		$this->view->assign('javaScriptLoadFlag' , file_exists( $this->systemRoot."/htdocs/javascript/{$this->controller}/{$this->action}.js" ) );
		$this->view->assign('siteUrl' , $this->siteUrl );
		$this->view->assign('systemRoot' , $this->systemRoot );
		$this->view->assign('login_flag' , $this->login_flag );
		$this->view->assign('login_info' , $this->user_info );
	}
		
	
	//モデルインスタンス生成処理
	protected function createModel( $className )
	{
		$classFile = sprintf( '%s/models/%s.php' , $this->systemRoot , $className );
		if( false == file_exists( $classFile ) ){
			return null;
		}
		require_once $classFile;
		if( false == class_exists( $className ) ){
			return null;
		}
		
		return new $className();
	}
	

		
	
}
?>