<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $account->accounts],
                ['confirm' => __('Are you sure you want to delete # {0}?', $account->accounts)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accounts form large-9 medium-8 columns content">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Edit Account') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('account');
            echo $this->Form->control('financial_institution');
            echo $this->Form->control('routing_number');
            echo $this->Form->control('swift_code');
            echo $this->Form->control('aba_number');
            echo $this->Form->control('held_credit_union');
            echo $this->Form->control('intermediary_bank');
            echo $this->Form->control('swift_code2');
            echo $this->Form->control('routing_number2');
            echo $this->Form->control('account_number2');
            echo $this->Form->control('aba_number2');
            echo $this->Form->control('deposit_option');
            echo $this->Form->control('increment');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('lead_id', ['options' => $leads, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
