<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bono'), ['action' => 'edit', $bono->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bono'), ['action' => 'delete', $bono->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bono->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bonos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bono'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bonos view large-9 medium-8 columns content">
    <h3><?= h($bono->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $bono->has('client') ? $this->Html->link($bono->client->name, ['controller' => 'Clients', 'action' => 'view', $bono->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bono->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Podescuento') ?></th>
            <td><?= $this->Number->format($bono->podescuento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fevencimiento') ?></th>
            <td><?= h($bono->fevencimiento) ?></td>
        </tr>
    </table>
</div>
