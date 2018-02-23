<?php 
class UserAction extends Action{
	public function index(){

		$user=M('User');
		$rows=$user->select();
		$this->assign('rows',$rows);
		
		$this->display();
	}



}

