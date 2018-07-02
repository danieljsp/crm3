<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lawfirm $lawfirm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lawfirm'), ['action' => 'edit', $lawfirm->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lawfirm'), ['action' => 'delete', $lawfirm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lawfirm->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lawfirms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lawfirm'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lawfirms view large-9 medium-8 columns content">
    <h3><?= h($lawfirm->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($lawfirm->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lawfirm->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Leads') ?></h4>
        <?php if (!empty($lawfirm->leads)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lawfirm Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Phone1') ?></th>
                <th scope="col"><?= __('Phone2') ?></th>
                <th scope="col"><?= __('Email1') ?></th>
                <th scope="col"><?= __('Email2') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col"><?= __('Resort1') ?></th>
                <th scope="col"><?= __('Resort2') ?></th>
                <th scope="col"><?= __('Weeks Points') ?></th>
                <th scope="col"><?= __('Adress1') ?></th>
                <th scope="col"><?= __('Address2') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Pa') ?></th>
                <th scope="col"><?= __('Sent Anex') ?></th>
                <th scope="col"><?= __('Received Anex') ?></th>
                <th scope="col"><?= __('Paid') ?></th>
                <th scope="col"><?= __('Approved Anex') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lawfirm->leads as $leads): ?>
            <tr>
                <td><?= h($leads->id) ?></td>
                <td><?= h($leads->lawfirm_id) ?></td>
                <td><?= h($leads->user_id) ?></td>
                <td><?= h($leads->first_name) ?></td>
                <td><?= h($leads->last_name) ?></td>
                <td><?= h($leads->price) ?></td>
                <td><?= h($leads->phone1) ?></td>
                <td><?= h($leads->phone2) ?></td>
                <td><?= h($leads->email1) ?></td>
                <td><?= h($leads->email2) ?></td>
                <td><?= h($leads->contract_id) ?></td>
                <td><?= h($leads->resort1) ?></td>
                <td><?= h($leads->resort2) ?></td>
                <td><?= h($leads->weeks_points) ?></td>
                <td><?= h($leads->adress1) ?></td>
                <td><?= h($leads->address2) ?></td>
                <td><?= h($leads->city) ?></td>
                <td><?= h($leads->state) ?></td>
                <td><?= h($leads->zip) ?></td>
                <td><?= h($leads->pa) ?></td>
                <td><?= h($leads->sent_anex) ?></td>
                <td><?= h($leads->received_anex) ?></td>
                <td><?= h($leads->paid) ?></td>
                <td><?= h($leads->approved_anex) ?></td>
                <td><?= h($leads->status) ?></td>
                <td><?= h($leads->created) ?></td>
                <td><?= h($leads->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Leads', 'action' => 'view', $leads->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Leads', 'action' => 'edit', $leads->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leads', 'action' => 'delete', $leads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leads->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
