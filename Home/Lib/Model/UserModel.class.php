<?php 
class UserModel extends Model{

	protected $patchValidate=true;

	protected $_validate = array(
		array('username','1,11','格式不正确!',0,'unique',1),
		array('password','6,50','密码长度至少6位!',0,'length',1),
		array('repassword','password','两次密码不一致',0,'confirm',1),
		// array('email','email','邮箱格式有误!',0,1),
		// array('fcode','chkCode','验证码有误!',0,'callback',1),
	);

}