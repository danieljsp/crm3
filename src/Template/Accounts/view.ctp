<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->accounts]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->accounts], ['confirm' => __('Are you sure you want to delete # {0}?', $account->accounts)]) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accounts view large-9 medium-8 columns content">
    <h3><?= h($account->accounts) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Financial Institution') ?></th>
            <td><?= h($account->financial_institution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Routing Number') ?></th>
            <td><?= h($account->routing_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Swift Code') ?></th>
            <td><?= h($account->swift_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aba Number') ?></th>
            <td><?= h($account->aba_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Intermediary Bank') ?></th>
            <td><?= h($account->intermediary_bank) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Swift Code2') ?></th>
            <td><?= h($account->swift_code2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Routing Number2') ?></th>
            <td><?= h($account->routing_number2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Number2') ?></th>
            <td><?= h($account->account_number2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aba Number2') ?></th>
            <td><?= h($account->aba_number2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $account->has('user') ? $this->Html->link($account->user->id, ['controller' => 'Users', 'action' => 'view', $account->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lead') ?></th>
            <td><?= $account->has('lead') ? $this->Html->link($account->lead->id, ['controller' => 'Leads', 'action' => 'view', $account->lead->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accounts') ?></th>
            <td><?= $this->Number->format($account->accounts) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account') ?></th>
            <td><?= $this->Number->format($account->account) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Increment') ?></th>
            <td><?= $this->Number->format($account->increment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($account->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($account->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $account->type ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Held Credit Union') ?></th>
            <td><?= $account->held_credit_union ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deposit Option') ?></th>
            <td><?= $account->deposit_option ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
