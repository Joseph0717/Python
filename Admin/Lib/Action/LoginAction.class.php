<?php 
class LoginAction extends Action{
	//登陆首页
	public function index(){

		$this->display();
	}
	//登陆验证
	public function check(){
		$user=M('User');
		$_POST['isadmin']=1;
		$_POST['password']=md5($_POST['password']);
		$row=$user->where($_POST)->find();
		if($row){
			$_SESSION['admin_username']=$row['username'];
			$_SESSION['admin_login']=1;
			$this->success('ok',U('Index/index'));
		}else{
			$this->error('no',U('Login/index'));
		}

	}
	//退出登陆
	public function logout(){
		$_SESSION=array();
		setcookie('PHPSESSID','',time()-1,'/');
		session_destroy();

		$this->success('退出成功',U('index'));

	}


}