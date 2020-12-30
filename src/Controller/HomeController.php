<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class HomeController extends AppController
{
	// public function beforeFilter(Event $event){
	// 	$this->Auth->allow();
	// }

	public function index(){
		$this->checkLogin();
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
			return $this->redirect($this->Auth->redirectUrl());
			}else{
				$this->Flash->error('Your username or password is incorrect');
			}
		}
	}
	public function logout(){
        $this->Flash->success('Successfully logged out');
        return $this->redirect($this->Auth->logout());
    }
}