<?php
App::uses('IngredientsRecipe', 'Model');

/**
 * IngredientsRecipe Test Case
 *
 */
class IngredientsRecipeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ingredients_recipe',
		'app.ingredients',
		'app.recipes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IngredientsRecipe = ClassRegistry::init('IngredientsRecipe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IngredientsRecipe);

		parent::tearDown();
	}

}
