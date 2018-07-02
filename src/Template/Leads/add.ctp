<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead $lead
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lawfirms'), ['controller' => 'Lawfirms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lawfirm'), ['controller' => 'Lawfirms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="leads form large-9 medium-8 columns content">
    <?= $this->Form->create($lead) ?>
    <fieldset>
        <legend><?= __('Add Lead') ?></legend>
        <?php
            echo $this->Form->control('lawfirm_id', ['options' => $lawfirms, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('price');
            echo $this->Form->control('phone1');
            echo $this->Form->control('phone2');
            echo $this->Form->control('email1');
            echo $this->Form->control('email2');
            echo $this->Form->control('contract');
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
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
