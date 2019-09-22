<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menú') ?></li>
        <li><?= $this->Html->link(__('Lista de Items'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Nuevo Item') ?></legend>
        <?php
            echo $this->Form->control('cod_Pat');
            echo $this->Form->control('nombre');
            echo $this->Form->control('marca');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('codigo');
            echo $this->Form->control('n_serie');
            echo $this->Form->control('image');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('REGISTRAR')) ?>
    <?= $this->Form->end() ?>
</div>
