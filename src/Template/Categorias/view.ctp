<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Automovils'), ['controller' => 'Automovils', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Automovil'), ['controller' => 'Automovils', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorias view large-9 medium-8 columns content">
    <h3><?= h($categoria->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($categoria->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poincremento Alquiler') ?></th>
            <td><?= $this->Number->format($categoria->poincremento_alquiler) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Automovils') ?></h4>
        <?php if (!empty($categoria->automovils)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Placa') ?></th>
                <th scope="col"><?= __('Klmts') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Tipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->automovils as $automovils): ?>
            <tr>
                <td><?= h($automovils->id) ?></td>
                <td><?= h($automovils->placa) ?></td>
                <td><?= h($automovils->klmts) ?></td>
                <td><?= h($automovils->categoria_id) ?></td>
                <td><?= h($automovils->tipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Automovils', 'action' => 'view', $automovils->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Automovils', 'action' => 'edit', $automovils->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Automovils', 'action' => 'delete', $automovils->id], ['confirm' => __('Are you sure you want to delete # {0}?', $automovils->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
