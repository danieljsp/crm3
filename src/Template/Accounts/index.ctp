<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account[]|\Cake\Collection\CollectionInterface $accounts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accounts index large-9 medium-8 columns content">
    <h3><?= __('Accounts') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped jambo_table bulk_action">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('accounts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account') ?></th>
                <th scope="col"><?= $this->Paginator->sort('financial_institution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('routing_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('swift_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aba_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('held_credit_union') ?></th>
                <th scope="col"><?= $this->Paginator->sort('intermediary_bank') ?></th>
                <th scope="col"><?= $this->Paginator->sort('swift_code2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('routing_number2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_number2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aba_number2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deposit_option') ?></th>
                <th scope="col"><?= $this->Paginator->sort('increment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lead_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
            <tr>
                <td><?= $this->Number->format($account->accounts) ?></td>
                <td><?= h($account->type) ?></td>
                <td><?= $this->Number->format($account->account) ?></td>
                <td><?= h($account->financial_institution) ?></td>
                <td><?= h($account->routing_number) ?></td>
                <td><?= h($account->swift_code) ?></td>
                <td><?= h($account->aba_number) ?></td>
                <td><?= h($account->held_credit_union) ?></td>
                <td><?= h($account->intermediary_bank) ?></td>
                <td><?= h($account->swift_code2) ?></td>
                <td><?= h($account->routing_number2) ?></td>
                <td><?= h($account->account_number2) ?></td>
                <td><?= h($account->aba_number2) ?></td>
                <td><?= h($account->deposit_option) ?></td>
                <td><?= $this->Number->format($account->increment) ?></td>
                <td><?= h($account->created) ?></td>
                <td><?= h($account->modified) ?></td>
                <td><?= $account->has('user') ? $this->Html->link($account->user->id, ['controller' => 'Users', 'action' => 'view', $account->user->id]) : '' ?></td>
                <td><?= $account->has('lead') ? $this->Html->link($account->lead->id, ['controller' => 'Leads', 'action' => 'view', $account->lead->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $account->accounts]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->accounts]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->accounts], ['confirm' => __('Are you sure you want to delete # {0}?', $account->accounts)]) ?>
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
