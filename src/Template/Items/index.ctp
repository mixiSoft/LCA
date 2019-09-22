<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menú') ?></li>
        <li><?= $this->Html->link(__('Nuevo Item'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="items index large-9 medium-8 columns content">
    <h3><?= __('Inventario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_Pat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('n_serie') ?></th>
               
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $this->Number->format($item->id) ?></td>
                <td><?= h($item->cod_Pat) ?></td>
                <td><?= h($item->nombre) ?></td>
                <td><?= h($item->marca) ?></td>
                <td><?= h($item->codigo) ?></td>
                <td><?= h($item->n_serie) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $item->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $item->id]) ?>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} record(s) de {{count}} total')]) ?></p>
    </div>
</div>
