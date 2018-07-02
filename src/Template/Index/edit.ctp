<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $index
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $index->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $index->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Index'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="index form large-9 medium-8 columns content">
    <?= $this->Form->create($index) ?>
    <fieldset>
        <legend><?= __('Edit Index') ?></legend>
        <?php
            echo $this->Form->control('lawfirm_id');
            echo $this->Form->control('agent_id');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('price');
            echo $this->Form->control('phone1');
            echo $this->Form->control('phone2');
            echo $this->Form->control('email1');
            echo $this->Form->control('email2');
            echo $this->Form->control('contract_id');
            echo $this->Form->control('resort1');
            echo $this->Form->control('resort2');
            echo $this->Form->control('weeks_points');
            echo $this->Form->control('adress1');
            echo $this->Form->control('address2');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('zip');
            echo $this->Form->control('pa');
            echo $this->Form->control('sent_anex');
            echo $this->Form->control('received_anex');
            echo $this->Form->control('paid');
            echo $this->Form->control('approved_anex');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
