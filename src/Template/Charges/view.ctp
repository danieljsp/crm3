<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Charge $charge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Charge'), ['action' => 'edit', $charge->int]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Charge'), ['action' => 'delete', $charge->int], ['confirm' => __('Are you sure you want to delete # {0}?', $charge->int)]) ?> </li>
        <li><?= $this->Html->link(__('List Charges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="charges view large-9 medium-8 columns content">
    <h3><?= h($charge->int) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Concept') ?></th>
            <td><?= h($charge->concept) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $charge->has('user') ? $this->Html->link($charge->user->id, ['controller' => 'Users', 'action' => 'view', $charge->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lead') ?></th>
            <td><?= $charge->has('lead') ? $this->Html->link($charge->lead->id, ['controller' => 'Leads', 'action' => 'view', $charge->lead->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Int') ?></th>
            <td><?= $this->Number->format($charge->int) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Charges') ?></th>
            <td><?= $this->Number->format($charge->charges) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($charge->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($charge->modified) ?></td>
        </tr>
    </table>
</div>
