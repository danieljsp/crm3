<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Charge[]|\Cake\Collection\CollectionInterface $charges
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="charges index large-9 medium-8 columns content">
    <h3><?= __('Charges') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped jambo_table bulk_action">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('int') ?></th>
                <th scope="col"><?= $this->Paginator->sort('charges') ?></th>
                <th scope="col"><?= $this->Paginator->sort('concept') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lead_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($charges as $charge): ?>
            <tr>
                <td><?= $this->Number->format($charge->int) ?></td>
                <td><?= $this->Number->format($charge->charges) ?></td>
                <td><?= h($charge->concept) ?></td>
                <td><?= h($charge->created) ?></td>
                <td><?= h($charge->modified) ?></td>
                <td><?= $charge->has('user') ? $this->Html->link($charge->user->id, ['controller' => 'Users', 'action' => 'view', $charge->user->id]) : '' ?></td>
                <td><?= $charge->has('lead') ? $this->Html->link($charge->lead->id, ['controller' => 'Leads', 'action' => 'view', $charge->lead->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $charge->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $charge->int]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $charge->int], ['confirm' => __('Are you sure you want to delete # {0}?', $charge->int)]) ?>
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
