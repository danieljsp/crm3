<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lawfirm $lawfirm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lawfirms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lawfirms form large-9 medium-8 columns content">
    <?= $this->Form->create($lawfirm) ?>
    <fieldset>
        <legend><?= __('Add Lawfirm') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
