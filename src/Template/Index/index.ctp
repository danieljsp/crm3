<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $index
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Index'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="index index large-9 medium-8 columns content">
    <h3><?= __('Index') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lawfirm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contract_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resort1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resort2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weeks_points') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adress1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sent_anex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('received_anex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('approved_anex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($index as $index): ?>
            <tr>
                <td><?= $this->Number->format($index->id) ?></td>
                <td><?= $this->Number->format($index->lawfirm_id) ?></td>
                <td><?= $this->Number->format($index->agent_id) ?></td>
                <td><?= h($index->first_name) ?></td>
                <td><?= h($index->last_name) ?></td>
                <td><?= $this->Number->format($index->price) ?></td>
                <td><?= h($index->phone1) ?></td>
                <td><?= h($index->phone2) ?></td>
                <td><?= h($index->email1) ?></td>
                <td><?= h($index->email2) ?></td>
                <td><?= $this->Number->format($index->contract_id) ?></td>
                <td><?= h($index->resort1) ?></td>
                <td><?= h($index->resort2) ?></td>
                <td><?= $this->Number->format($index->weeks_points) ?></td>
                <td><?= h($index->adress1) ?></td>
                <td><?= h($index->address2) ?></td>
                <td><?= h($index->city) ?></td>
                <td><?= h($index->state) ?></td>
                <td><?= h($index->zip) ?></td>
                <td><?= $this->Number->format($index->pa) ?></td>
                <td><?= $this->Number->format($index->sent_anex) ?></td>
                <td><?= $this->Number->format($index->received_anex) ?></td>
                <td><?= $this->Number->format($index->paid) ?></td>
                <td><?= $this->Number->format($index->approved_anex) ?></td>
                <td><?= h($index->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $index->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $index->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $index->id], ['confirm' => __('Are you sure you want to delete # {0}?', $index->id)]) ?>
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
