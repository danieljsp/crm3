<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead[]|\Cake\Collection\CollectionInterface $leads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
      <!--  <li><?= $this->Html->link(__('List Lawfirms'), ['controller' => 'Lawfirms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lawfirm'), ['controller' => 'Lawfirms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>-->
    </ul>
</nav>
Filters
<form action="/crm2/leads/index/">
  <label>First Name</label>
    <input type="text" name="first_name">
    <label>Last Name</label>
      <input type="text" name="last_name">
      <label>Agent</label>
        <?php
        echo $this->Form->select(
            'agent_id',
            $agents,
            ['empty' => true]
        );
         ?>
        <input type="submit" value="Search">
</form>
<div class="leads index large-9 medium-8 columns content">
    <h3><?= __('Clients') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped jambo_table bulk_action">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>

                <th scope="col"><?= $this->Paginator->sort('user_id', 'User') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agent_id', 'Agent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>

                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($leads as $lead): ?>
            <tr>
                <td><?= $this->Number->format($lead->id) ?></td>

                <td><?= $lead->has('user') ? $this->Html->link($lead->user->username, ['controller' => 'Users', 'action' => 'view', $lead->user->id]) : '' ?></td>
                <td><?= $lead->has('agent') ? $this->Html->link($lead->agent->name, ['controller' => 'Agents', 'action' => 'view', $lead->agent->id]) : '' ?></td>
                <td><?= h($lead->first_name) ?></td>
                <td><?= h($lead->last_name) ?></td>

                <td><?= h($lead->status) ?></td>
                <td><?= h($lead->created) ?></td>
                <td><?= h($lead->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lead->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lead->id]) ?>
                  <!--  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lead->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lead->id)]) ?> -->
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
