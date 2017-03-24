<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Automovils Client'), ['action' => 'edit', $automovilsClient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Automovils Client'), ['action' => 'delete', $automovilsClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $automovilsClient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Automovils Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Automovils Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Automovils'), ['controller' => 'Automovils', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Automovil'), ['controller' => 'Automovils', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="automovilsClients view large-9 medium-8 columns content">
    <h3><?= h($automovilsClient->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Automovil') ?></th>
            <td><?= $automovilsClient->has('automovil') ? $this->Html->link($automovilsClient->automovil->id, ['controller' => 'Automovils', 'action' => 'view', $automovilsClient->automovil->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $automovilsClient->has('client') ? $this->Html->link($automovilsClient->client->name, ['controller' => 'Clients', 'action' => 'view', $automovilsClient->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($automovilsClient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Psvalor Cobrar') ?></th>
            <td><?= $this->Number->format($automovilsClient->psvalor_cobrar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feprestamo') ?></th>
            <td><?= h($automovilsClient->feprestamo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fedevolucion') ?></th>
            <td><?= h($automovilsClient->fedevolucion) ?></td>
        </tr>
    </table>
</div>
