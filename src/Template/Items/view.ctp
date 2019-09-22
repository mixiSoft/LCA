<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menú') ?></li>
        <li><?= $this->Html->link(__('Editar Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Item'), ['action' => 'delete', $item->id], ['confirm' => __('Seguro que deseas borrar # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Item'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo Patrimonial') ?></th>
            <td><?= h($item->cod_Pat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($item->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($item->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Código') ?></th>
            <td><?= h($item->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número de Serie') ?></th>
            <td><?= h($item->n_serie) ?></td>
        </tr>
       
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripción') ?></h4>
        <?= $this->Text->autoParagraph(h($item->descripcion)); ?>
    </div>
    <div class="row">
        <h4><?= __('imagen') ?></h4>
        <?= $this->Text->autoParagraph(h($item->image)); ?>
    </div>
</div>
