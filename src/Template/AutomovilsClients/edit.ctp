<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $automovilsClient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $automovilsClient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Automovils Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Automovils'), ['controller' => 'Automovils', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Automovil'), ['controller' => 'Automovils', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="automovilsClients form large-9 medium-8 columns content">
    <?= $this->Form->create($automovilsClient) ?>
    <fieldset>
        <legend><?= __('Edit Automovils Client') ?></legend>
        <?php
            echo $this->Form->control('feprestamo');
            echo $this->Form->control('fedevolucion', ['empty' => true]);
            echo $this->Form->control('automovil_id', ['options' => $automovils]);
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('psvalor_cobrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
