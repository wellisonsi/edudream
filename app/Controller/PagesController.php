<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');
App::build(array('Vendor' => array(APP . 'Vendor' . DS . 'coinbase' . DS . 'lib' . DS)));
App::uses('Coinbase', 'Vendor');
App::import('Vendor','Coinbase_OAuth', array('file' => 'coinbase' . DS . 'lib' . DS . 'Coinbase' . DS . 'OAuth.php')
);

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {



/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

	public function beforeFilter()
	{
		parent::beforeFilter();

		$this->Auth->allow('home', 'maintenance','index', 'main', 'dashboard', 'conquista','bitcoins','recebimento');
	}

	public function index()
	{
		$this->set('users_count', $this->User->find('count'));
	}

	public function main()
	{
		$this->layout = "main";
		$this->set('users_count', $this->User->find('count'));
		$this->Session->destroy();
	}

	public function conquista()
	{
		$this->layout = "main_nofoot";
		
	}

	public function bitcoins()
	{
		$this->layout = "main_nofoot";
		$_REDIRECT_URL = "http://" . $_SERVER['HTTP_HOST'] . '/edudream/bitcoins';
		$coinbase_auth = new Coinbase_OAuth(Configure::read('Coinbase.client'), Configure::read('Coinbase.client_secret'), $_REDIRECT_URL);
		$this->set('coinbase_auth',$coinbase_auth);

		if(isset($_GET['code']) && $this->Session->read("tokens") == null) {
			if($this->Session->check("tokens") == null){
				$tokens = $coinbase_auth->getTokens($_GET['code']);
				$this->Session->write('tokens', $tokens);
			}else{
				$tokens = $this->Session->read("tokens");
			}			
			
		}

		if($this->Session->read("tokens") != null){
			$tokens = $this->Session->read("tokens");
			$coinbase_user = Coinbase::withOauth($coinbase_auth, $tokens);
			$this->Session->write('coinbase_user',$coinbase_user);
		}

		
	}

	public function dashboard()
	{
		$this->layout = "main_nofoot";
		$coinbase = Coinbase::withApiKey(Configure::read('Coinbase.key'), Configure::read('Coinbase.secret'));
		$this->set("coinbase",$coinbase);
	}

	public function recebimento($valor = null)
	{
		$this->layout = "main_nofoot";
		if($this->Session->check('coinbase_user')){
			$coinbase = $this->Session->read('coinbase_user');
			$coinbase->requestMoney('wellison.maceio@gmail.com', $valor, "Conquista na plataforma QuoraCoin");
			$this->set('valor',$valor);
		}

	}

	public function maintenance(){}
}
