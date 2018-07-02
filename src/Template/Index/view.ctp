<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $index
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Index'), ['action' => 'edit', $index->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Index'), ['action' => 'delete', $index->id], ['confirm' => __('Are you sure you want to delete # {0}?', $index->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Index'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Index'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="index view large-9 medium-8 columns content">
    <h3><?= h($index->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($index->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($index->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone1') ?></th>
            <td><?= h($index->phone1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone2') ?></th>
            <td><?= h($index->phone2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email1') ?></th>
            <td><?= h($index->email1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email2') ?></th>
            <td><?= h($index->email2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resort1') ?></th>
            <td><?= h($index->resort1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resort2') ?></th>
            <td><?= h($index->resort2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress1') ?></th>
            <td><?= h($index->adress1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($index->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($index->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($index->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h($index->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($index->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($index->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lawfirm Id') ?></th>
            <td><?= $this->Number->format($index->lawfirm_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agent Id') ?></th>
            <td><?= $this->Number->format($index->agent_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($index->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contract Id') ?></th>
            <td><?= $this->Number->format($index->contract_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weeks Points') ?></th>
            <td><?= $this->Number->format($index->weeks_points) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pa') ?></th>
            <td><?= $this->Number->format($index->pa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sent Anex') ?></th>
            <td><?= $this->Number->format($index->sent_anex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Received Anex') ?></th>
            <td><?= $this->Number->format($index->received_anex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paid') ?></th>
            <td><?= $this->Number->format($index->paid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Approved Anex') ?></th>
            <td><?= $this->Number->format($index->approved_anex) ?></td>
        </tr>
    </table>
</div>
