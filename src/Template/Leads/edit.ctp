<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead $lead
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
      <!--  <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lead->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lead->id)]
            )
        ?></li>-->
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'addid', $lead->id]) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'addid', $lead->id]) ?></li>
    </ul>
</nav>

<!--form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>-->
<div class="leads form large-9 medium-8 columns content">
    <?= $this->Form->create($lead, array('class' => 'form-horizontal form-label-left input_mask')) ?>
    <fieldset>
        <legend><?= __('Edit Lead') ?></legend>



        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <?=  $this->Form->control('lawfirm_id', ['options' => $lawfirms, 'empty' => true, 'class' =>'form-control has-feedback-left', 'placeholder' => "Law Firm"]); ?>
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <?php  echo $this->Form->control('agent_id', ['options' => $agents, 'empty' => true,'class' =>'form-control has-feedback-left', 'placeholder' => "Agent", 'label' => 'Agent']); ?>

          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <?=  $this->Form->control('first_name', ['class' =>'form-control has-feedback-left', 'placeholder' => "First Name"]); ?>
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>
            <?php
            echo $this->Form->control('last_name');
            echo $this->Form->control('price');
            echo $this->Form->control('phone1');
            echo $this->Form->control('phone2');
            echo $this->Form->control('email1');
            echo $this->Form->control('email2');
            echo $this->Form->control('contract');
            echo $this->Form->control('resort1');
            echo $this->Form->control('resort2');
            echo $this->Form->control('weeks_points');
            echo $this->Form->control('adress1');
            echo $this->Form->control('address2');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('zip');
            echo $this->Form->control('pa');
            echo $this->Form->control('sent_anex');
            echo $this->Form->control('received_anex');
            echo $this->Form->control('paid');
            echo $this->Form->control('approved_anex');
        ?>
    </fieldset>
    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">


        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>
      </div>

    <?= $this->Form->end() ?>
    <div class="related">
        <h4><?= __('Related Accounts') ?></h4>
        <?php if (!empty($lead->accounts)): ?>
        <table cellpadding="0" cellspacing="0" class="table table-striped jambo_table bulk_action">
<thead>
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
          </thead>
          <tbody>
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
          </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Charges') ?></h4>
        <?php if (!empty($leadcontain->charges)): ?>
        <table cellpadding="0" cellspacing="0" class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
                <th scope="col"><?= __('Int') ?></th>
                <th scope="col"><?= __('Charges') ?></th>
                <th scope="col"><?= __('Concept') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User') ?></th>
            </tr>
          </thead>
<tbody>
            <?php foreach ($leadcontain->charges as $charges): ?>
            <tr>
                <td><?= h($charges->int) ?></td>
                <td><?= $this->Number->currency(h($charges->charges), 'USD'); ?></td>
                <td><?= h($charges->concept) ?></td>
                <td><?= h($charges->created) ?></td>
                <td><?= h($charges->user->username) ?></td>
                <!--  <td class="actions">
                     <?= $this->Html->link(__('View'), ['controller' => 'Charges', 'action' => 'view', $charges->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Charges', 'action' => 'edit', $charges->int]) ?>
                 <?= $this->Form->postLink(__('Delete'), ['controller' => 'Charges', 'action' => 'delete', $charges->int], ['confirm' => __('Are you sure you want to delete # {0}?', $charges->int)]) ?>
                </td>-->
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($leadcontain->comments)): ?>
        <table cellpadding="0" cellspacing="0" class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Created') ?></th>
            </tr>
          </thead>
            <?php foreach ($leadcontain->comments as $comments): ?>
              <tbody>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->user->username) ?></td>
                <td><?= h($comments->comments) ?></td>
                <td><?= h($comments->created) ?></td>
              <!--   <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                   <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>-->

            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
