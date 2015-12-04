<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
		'Session','Admin.AccessControl',
		'Auth' => array(
		    'loginRedirect' => array('plugin'=>null,'controller' => 'posts', 'action' => 'index'),
		    'logoutRedirect' => array('plugin'=>'admin','controller' => 'users', 'action' => 'login'),
			'loginAction'    => '/admin/users/login',
			'authError' 	=> 'Faça login antes!',
		    'authorize' => array('Controller')
		)
	);

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout','Seção de Administração para o Aplicativo');
		$this->set('current_user', $this->Auth->user());
		$controller=$this->params['controller']; 
		$action=$this->params['action']; 
		$user = $this->Auth->user();
		$groupid=$user['group_id'];

        $this->Auth->allow('index');//'add'

		if($action != 'index'){// || $action != 'add'
			if(($this->AccessControl->access($controller,$action) == 'admins') && ($groupid ==1)){
				//
			}elseif(($this->AccessControl->access($controller,$action) == 'managers') && ($groupid ==2)){
				//
			}else{
				if($this->AccessControl->access($controller,$action) == false){
					$this->Session->setFlash(__('Privilégio não cadastrado/Acesso Negado!'));
				}else{
					$this->redirect(array('plugin'=>'admin','controller' => 'users', 'action' => 'login'));
				}
			}
		}

	} 

	public function isAuthorized($user) {
		return true;
	}

}