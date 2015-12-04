<?php
App::uses('AppController', 'Controller');
/**
 * Tipoeventos Controller
 *
 * @property Tipoevento $Tipoevento
 * @property PaginatorComponent $Paginator
 */
class TipoeventosController extends AppController {

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
		$this->Tipoevento->recursive = 0;
		$this->set('tipoeventos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipoevento->exists($id)) {
			throw new NotFoundException(__('Invalid tipoevento'));
		}
		$options = array('conditions' => array('Tipoevento.' . $this->Tipoevento->primaryKey => $id));
		$this->set('tipoevento', $this->Tipoevento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipoevento->create();
			if ($this->Tipoevento->save($this->request->data)) {
				$this->Session->setFlash(__('The tipoevento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoevento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Tipoevento->exists($id)) {
			throw new NotFoundException(__('Invalid tipoevento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tipoevento->save($this->request->data)) {
				$this->Session->setFlash(__('The tipoevento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoevento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Tipoevento.' . $this->Tipoevento->primaryKey => $id));
			$this->request->data = $this->Tipoevento->find('first', $options);
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
		$this->Tipoevento->id = $id;
		if (!$this->Tipoevento->exists()) {
			throw new NotFoundException(__('Invalid tipoevento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tipoevento->delete()) {
			$this->Session->setFlash(__('The tipoevento has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The tipoevento could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
