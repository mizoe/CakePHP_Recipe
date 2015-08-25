<?php
/**
 * IngredientsRecipeFixture
 *
 */
class IngredientsRecipeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ingredients_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'recipes_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'ingredients_id' => 1,
			'recipes_id' => 1,
			'created' => '2015-08-25 03:29:03',
			'modified' => '2015-08-25 03:29:03'
		),
	);

}
