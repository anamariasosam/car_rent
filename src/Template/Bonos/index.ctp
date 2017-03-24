<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bono'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bonos index large-9 medium-8 columns content">
    <h3><?= __('Bonos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fevencimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('podescuento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bonos as $bono): ?>
            <tr>
                <td><?= $this->Number->format($bono->id) ?></td>
                <td><?= h($bono->fevencimiento) ?></td>
                <td><?= $this->Number->format($bono->podescuento) ?></td>
                <td><?= $bono->has('client') ? $this->Html->link($bono->client->name, ['controller' => 'Clients', 'action' => 'view', $bono->client->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bono->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bono->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bono->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bono->id)]) ?>
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
