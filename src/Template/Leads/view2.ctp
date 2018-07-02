<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead $lead
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lead'), ['action' => 'edit', $lead->id]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="leads view large-9 medium-8 columns content">
    <h3><?= h($lead->first_name)." ".h($lead->last_name)?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lawfirm') ?></th>
            <td><?= $lead->has('lawfirm') ? $this->Html->link($lead->lawfirm->name, ['controller' => 'Lawfirms', 'action' => 'view', $lead->lawfirm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $lead->has('user') ? $this->Html->link($lead->user->username, ['controller' => 'Users', 'action' => 'view', $lead->user->username]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($lead->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($lead->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone1') ?></th>
            <td><?= h($lead->phone1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone2') ?></th>
            <td><?= h($lead->phone2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email1') ?></th>
            <td><?= h($lead->email1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email2') ?></th>
            <td><?= h($lead->email2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resort1') ?></th>
            <td><?= h($lead->resort1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resort2') ?></th>
            <td><?= h($lead->resort2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress1') ?></th>
            <td><?= h($lead->adress1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($lead->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($lead->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($lead->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h($lead->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($lead->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lead->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($lead->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contract') ?></th>
            <td><?= $this->Number->format($lead->contract) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weeks Points') ?></th>
            <td><?= $this->Number->format($lead->weeks_points) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pa') ?></th>
            <td><?= $this->Number->format($lead->pa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sent Anex') ?></th>
            <td><?= $this->Number->format($lead->sent_anex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Received Anex') ?></th>
            <td><?= $this->Number->format($lead->received_anex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paid') ?></th>
            <td><?= $this->Number->format($lead->paid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Approved Anex') ?></th>
            <td><?= $this->Number->format($lead->approved_anex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lead->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lead->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Accounts') ?></h4>
        <?php if (!empty($lead->accounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Accounts') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Account') ?></th>
                <th scope="col"><?= __('Financial Institution') ?></th>
                <th scope="col"><?= __('Routing Number') ?></th>
                <th scope="col"><?= __('Swift Code') ?></th>
                <th scope="col"><?= __('Aba Number') ?></th>
                <th scope="col"><?= __('Held Credit Union') ?></th>
                <th scope="col"><?= __('Intermediary Bank') ?></th>
                <th scope="col"><?= __('Swift Code2') ?></th>
                <th scope="col"><?= __('Routing Number2') ?></th>
                <th scope="col"><?= __('Account Number2') ?></th>
                <th scope="col"><?= __('Aba Number2') ?></th>
                <th scope="col"><?= __('Deposit Option') ?></th>
                <th scope="col"><?= __('Increment') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Lead Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lead->accounts as $accounts): ?>
            <tr>
                <td><?= h($accounts->accounts) ?></td>
                <td><?= h($accounts->type) ?></td>
                <td><?= h($accounts->account) ?></td>
                <td><?= h($accounts->financial_institution) ?></td>
                <td><?= h($accounts->routing_number) ?></td>
                <td><?= h($accounts->swift_code) ?></td>
                <td><?= h($accounts->aba_number) ?></td>
                <td><?= h($accounts->held_credit_union) ?></td>
                <td><?= h($accounts->intermediary_bank) ?></td>
                <td><?= h($accounts->swift_code2) ?></td>
                <td><?= h($accounts->routing_number2) ?></td>
                <td><?= h($accounts->account_number2) ?></td>
                <td><?= h($accounts->aba_number2) ?></td>
                <td><?= h($accounts->deposit_option) ?></td>
                <td><?= h($accounts->increment) ?></td>
                <td><?= h($accounts->created) ?></td>
                <td><?= h($accounts->modified) ?></td>
                <td><?= h($accounts->user_id) ?></td>
                <td><?= h($accounts->lead_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Accounts', 'action' => 'view', $accounts->accounts]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Accounts', 'action' => 'edit', $accounts->accounts]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accounts', 'action' => 'delete', $accounts->accounts], ['confirm' => __('Are you sure you want to delete # {0}?', $accounts->accounts)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Charges') ?></h4>
        <?php if (!empty($lead->charges)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Int') ?></th>
                <th scope="col"><?= __('Charges') ?></th>
                <th scope="col"><?= __('Concept') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Lead Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lead->charges as $charges): ?>
            <tr>
                <td><?= h($charges->int) ?></td>
                <td><?= h($charges->charges) ?></td>
                <td><?= h($charges->concept) ?></td>
                <td><?= h($charges->created) ?></td>
                <td><?= h($charges->modified) ?></td>
                <td><?= h($charges->user_id) ?></td>
                <td><?= h($charges->lead_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Charges', 'action' => 'view', $charges->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Charges', 'action' => 'edit', $charges->int]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Charges', 'action' => 'delete', $charges->int], ['confirm' => __('Are you sure you want to delete # {0}?', $charges->int)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($lead->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Lead Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lead->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->comments) ?></td>
                <td><?= h($comments->lead_id) ?></td>
                <td><?= h($comments->created) ?></td>
                <td><?= h($comments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
