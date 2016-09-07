<?php
class Login extends Session{
	
	
	public function __construct(){
		parent::__construct();
	}
	
	//パスワードの暗号化
	public function passEncryption( $user_id , $pass )
	{
		$encryption_pass = "";//暗号化後のパスワード
		$user_id_md5 = md5( $user_id );//md5はやめる
		$encryption_pass = md5( $pass );
		for( $i = 0; $i < 424; $i++ ){
			$encryption_pass = $user_id_md5.$encryption_pass.$user_id;
			$encryption_pass = hash( 'sha256' , $encryption_pass );
		}
		return $encryption_pass;
	}
	
	
	public function loginCheck()
	{
		if( !$this->setCheck( "user_id" ) && !$this->setCheck( "user_name" ) )
		{
			//未ログイン
			return false;
		}else{
			//ログイン済み
			return true;
		}
	}
	
	public function loginProcess( $user_id , $user_name )
	{
		$this->setValues( "user_id" , $user_id );
		$this->setValues( "user_name" , $user_name );
	}
	
	public function logoutProcess()
	{
		//セッションの破棄
		$this->sessionDestruction();
	}
	
	public function notLoginRedirect( $siteUrl ){
		if( !$this->loginCheck() ){
			header('Location: '.$siteUrl.'/login');
			exit();
		}
	}
			
	public function adminRedirect( $siteUrl ){
		if( $this->loginCheck() ){
			header('Location: '.$siteUrl);
			exit();
		}
	}
	
	
}
?>