<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menú') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $item->id],
                ['confirm' => __('Seguro que deseas borrar # {0}?', $item->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Items'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Editar Item') ?></legend>
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
    <?= $this->Form->button(__('GUARDAR')) ?>
    <?= $this->Form->end() ?>
</div>
