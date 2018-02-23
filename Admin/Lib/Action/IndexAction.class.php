<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$title='富士施乐';
    	$this->assign('title',$title);

    	if(!$_SESSION['admin_login']){
    		$this->error('no',U('Login/index'));
    		exit;
    	}
    	$username=$_SESSION['admin_username'];
    	$this->assign('username',$username);

		$this->display();
    }
}