<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Automovils Client'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Automovils'), ['controller' => 'Automovils', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Automovil'), ['controller' => 'Automovils', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="automovilsClients index large-9 medium-8 columns content">
    <h3><?= __('Automovils Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feprestamo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fedevolucion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('automovil_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('psvalor_cobrar') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($automovilsClients as $automovilsClient): ?>
            <tr>
                <td><?= $this->Number->format($automovilsClient->id) ?></td>
                <td><?= h($automovilsClient->feprestamo) ?></td>
                <td><?= h($automovilsClient->fedevolucion) ?></td>
                <td><?= $automovilsClient->has('automovil') ? $this->Html->link($automovilsClient->automovil->id, ['controller' => 'Automovils', 'action' => 'view', $automovilsClient->automovil->id]) : '' ?></td>
                <td><?= $automovilsClient->has('client') ? $this->Html->link($automovilsClient->client->name, ['controller' => 'Clients', 'action' => 'view', $automovilsClient->client->id]) : '' ?></td>
                <td><?= $this->Number->format($automovilsClient->psvalor_cobrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $automovilsClient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $automovilsClient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $automovilsClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $automovilsClient->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
