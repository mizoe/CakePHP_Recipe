<div class="ingredientsRecipes form">
<?php echo $this->Form->create('IngredientsRecipe'); ?>
	<fieldset>
		<legend><?php echo __('Add Ingredients Recipe'); ?></legend>
	<?php
		echo $this->Form->input('ingredient_id');
		echo $this->Form->input('recipe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ingredients Recipes'), array('action' => 'index')); ?></li>
	</ul>
</div>
