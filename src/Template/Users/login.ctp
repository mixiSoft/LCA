<br>
<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
		<div class="panel">
			<h2 class="text-center">Ingresar</h2>
			<?= $this->Form-> create(); ?>
				<?= $this->Form->input('username'); ?>
				<?= $this->Form->input('password', array('type' => 'password')); ?>
				<?= $this->Form->submit('Ingresar', array('class' =>'button')); ?>
			<?= $this->Form->end(); ?>
		</div>
	</div>	