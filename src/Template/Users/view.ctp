<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Accounts') ?></h4>
        <?php if (!empty($user->accounts)): ?>
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
            <?php foreach ($user->accounts as $accounts): ?>
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
        <?php if (!empty($user->charges)): ?>
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
            <?php foreach ($user->charges as $charges): ?>
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
        <?php if (!empty($user->comments)): ?>
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
            <?php foreach ($user->comments as $comments): ?>
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
    <div class="related">
        <h4><?= __('Related Leads') ?></h4>
        <?php if (!empty($user->leads)): ?>
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
            <?php foreach ($user->leads as $leads): ?>
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
