<?php
App::uses('AppController', 'Controller');
/**
 * IngredientsRecipes Controller
 *
 * @property IngredientsRecipe $IngredientsRecipe
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IngredientsRecipesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->IngredientsRecipe->recursive = 0;
		$this->set('ingredientsRecipes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IngredientsRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid ingredients recipe'));
		}
		$options = array('conditions' => array('IngredientsRecipe.' . $this->IngredientsRecipe->primaryKey => $id));
		$this->set('ingredientsRecipe', $this->IngredientsRecipe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IngredientsRecipe->create();
			if ($this->IngredientsRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The ingredients recipe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients recipe could not be saved. Please, try again.'));
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
		if (!$this->IngredientsRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid ingredients recipe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->IngredientsRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The ingredients recipe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients recipe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IngredientsRecipe.' . $this->IngredientsRecipe->primaryKey => $id));
			$this->request->data = $this->IngredientsRecipe->find('first', $options);
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
		$this->IngredientsRecipe->id = $id;
		if (!$this->IngredientsRecipe->exists()) {
			throw new NotFoundException(__('Invalid ingredients recipe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->IngredientsRecipe->delete()) {
			$this->Session->setFlash(__('The ingredients recipe has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ingredients recipe could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
