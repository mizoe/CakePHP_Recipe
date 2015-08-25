<div class="ingredientsRecipes view">
<h2><?php echo __('Ingredients Recipe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ingredientsRecipe['IngredientsRecipe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingredient Id'); ?></dt>
		<dd>
			<?php echo h($ingredientsRecipe['IngredientsRecipe']['ingredient_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recipe Id'); ?></dt>
		<dd>
			<?php echo h($ingredientsRecipe['IngredientsRecipe']['recipe_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ingredientsRecipe['IngredientsRecipe']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ingredientsRecipe['IngredientsRecipe']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingredients Recipe'), array('action' => 'edit', $ingredientsRecipe['IngredientsRecipe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ingredients Recipe'), array('action' => 'delete', $ingredientsRecipe['IngredientsRecipe']['id']), array(), __('Are you sure you want to delete # %s?', $ingredientsRecipe['IngredientsRecipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients Recipes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredients Recipe'), array('action' => 'add')); ?> </li>
	</ul>
</div>
