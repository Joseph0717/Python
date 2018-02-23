<?php 
	class UserAction extends Action{

		public function regist(){

			$user=D('User');
			if($user->create()){
				$user->add();
				
					$this->redirect('login');
				}else{
					$err=$user->getError();
					$str='';
					foreach($err as $error){
						$str.=$error;
					}
			}

			$row=$user->select();
			foreach($row as $key=>$val){
				$row2[]=$val['username'];
			};
			$json=json_encode($row2);
			$this->assign('json',$json);
			$this->display();
		}



		public function login(){

			



			$this->display();
		}

			

	}


