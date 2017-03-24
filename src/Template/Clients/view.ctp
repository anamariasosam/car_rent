<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bonos'), ['controller' => 'Bonos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bono'), ['controller' => 'Bonos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Automovils'), ['controller' => 'Automovils', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Automovil'), ['controller' => 'Automovils', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Snvip') ?></th>
            <td><?= h($client->snvip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bonos') ?></h4>
        <?php if (!empty($client->bonos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fevencimiento') ?></th>
                <th scope="col"><?= __('Podescuento') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->bonos as $bonos): ?>
            <tr>
                <td><?= h($bonos->id) ?></td>
                <td><?= h($bonos->fevencimiento) ?></td>
                <td><?= h($bonos->podescuento) ?></td>
                <td><?= h($bonos->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bonos', 'action' => 'view', $bonos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bonos', 'action' => 'edit', $bonos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bonos', 'action' => 'delete', $bonos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bonos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Automovils') ?></h4>
        <?php if (!empty($client->automovils)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Placa') ?></th>
                <th scope="col"><?= __('Klmts') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Tipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->automovils as $automovils): ?>
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
