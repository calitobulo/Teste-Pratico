<?php
App::uses('AppController', 'Controller');
/**
 * Tipopalestrantes Controller
 *
 * @property Tipopalestrante $Tipopalestrante
 * @property PaginatorComponent $Paginator
 */
class TipopalestrantesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tipopalestrante->recursive = 0;
		$this->set('tipopalestrantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipopalestrante->exists($id)) {
			throw new NotFoundException(__('Invalid tipopalestrante'));
		}
		$options = array('conditions' => array('Tipopalestrante.' . $this->Tipopalestrante->primaryKey => $id));
		$this->set('tipopalestrante', $this->Tipopalestrante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipopalestrante->create();
			if ($this->Tipopalestrante->save($this->request->data)) {
				$this->Session->setFlash(__('The tipopalestrante has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipopalestrante could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tipopalestrante->exists($id)) {
			throw new NotFoundException(__('Invalid tipopalestrante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tipopalestrante->save($this->request->data)) {
				$this->Session->setFlash(__('The tipopalestrante has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipopalestrante could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Tipopalestrante.' . $this->Tipopalestrante->primaryKey => $id));
			$this->request->data = $this->Tipopalestrante->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tipopalestrante->id = $id;
		if (!$this->Tipopalestrante->exists()) {
			throw new NotFoundException(__('Invalid tipopalestrante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tipopalestrante->delete()) {
			$this->Session->setFlash(__('The tipopalestrante has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The tipopalestrante could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
