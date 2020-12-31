<?php if (!empty($fields_disabled)): ?>
<div class="alert alert-danger">
  The account is suspended due to errors listed below. Please click recreate to attempt another approval.
  <br/><br/>
  <a class="btn btn-medium btn-danger" href="/admin/schools/merchant/edit/<?= $school->id?>/reset">Recreate Merchant Account</a>
</div>
  <?php $this->load->view('admin/schools/partials/braintree_edit_status.php'); ?>
<?php else: ?>
<div class="col-md-6">
  <form action="/admin/schools/merchant/edit/<?= $school->id?>" method="post" class="">
  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    <input type="hidden" name="merchant_type" value="braintree">
      <h4>Braintree Merchant Account Details</h4>
      <fieldset class="nested">
        <?php $this->load->view('admin/schools/partials/braintree_edit_status.php'); ?>
      </fieldset>
      <fieldset class="nested">
        <legend class="margin-left-neg-30 m-bot-10">Point Person</legend>
        <div class="form-group <?= form_error('first_name') ? 'error' : ''; ?>">
          <label for="first_name" class="control-label">First Name:</label>
          <div class="controls">
            <input class="form-control" type="text" name="first_name" value="<?= $this->input->post('first_name') ? $this->input->post('first_name') : $braintree_merchant->individual['firstName']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('first_name'); ?>
            </span>
          </div>
        </div>
        <div class="form-group <?= form_error('last_name') ? 'error' : ''; ?>">
          <label for="last_name" class="control-label">Last Name:</label>
          <div class="controls">
            <input class="form-control" type="text" name="last_name" value="<?= $this->input->post('last_name') ? $this->input->post('last_name') : $braintree_merchant->individual['lastName']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('last_name'); ?>
            </span>
          </div>
        </div>
        <div class="form-group <?= form_error('email') ? 'error' : ''; ?>">
          <label for="email" class="control-label">Email:</label>
          <div class="controls">
            <input class="form-control" type="text" name="email" value="<?= $this->input->post('email') ? $this->input->post('email') : $braintree_merchant->individual['email']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('email'); ?>
            </span>
          </div>
        </div>
        <div class="form-group <?= form_error('point_person_phone') ? 'error' : ''; ?>">
          <label for="point_person_phone" class="control-label">Phone Number:</label>
          <div class="controls">
            <input class="form-control" type="text" name="point_person_phone" value="<?= $this->input->post('point_person_phone') ? $this->input->post('point_person_phone') : $braintree_merchant->individual['phone']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('point_person_phone'); ?>
            </span>
          </div>
        </div>
        <?php $dob_error = form_error('dob_month') || form_error('dob_day') ||
               form_error('dob_year') ? 'error' : ''; ?>
        <div class="form-group <?= $dob_error; ?>">
          <label for="first_name" class="control-label">Date of Birth:</label>
          <div class="controls container">
            <?php
              //handle displaying DOB and errors
              $dob_month = substr($braintree_merchant->individual['dateOfBirth'], 5, 2);
              $dob_day   = substr($braintree_merchant->individual['dateOfBirth'], 8);
              $dob_year  = substr($braintree_merchant->individual['dateOfBirth'], 0, 4);
              $month     = $this->input->post('dob_month') ? $this->input->post('dob_month') : $dob_month;
              $day       = $this->input->post('dob_day') ? $this->input->post('dob_day') : $dob_day;
              $year      = $this->input->post('dob_year') ? $this->input->post('dob_year') : $dob_year;
            ?>
            <div class="margin-left-neg-30">
              <div class="col-md-1 col-sm-2 col-xs-3"><?= month_dropdown(['name' => 'dob_month', 'id' => 'dob-month', $merchant_edit_disabled => ''], $month); ?></div>
              <div class="col-md-1 col-sm-2 col-xs-3"><?= day_dropdown(['name' => 'dob_day', 'id' => 'dob-day', $merchant_edit_disabled => ''], $day); ?></div>
              <div class="col-md-1 col-sm-2 col-xs-3"><?= year_dropdown(['name' => 'dob_year', 'id' => 'dob-year', $merchant_edit_disabled => ''], $year, date("Y"), 100); ?></div>
              <span class="help-inline">
                <p><?= form_error('dob_month'); ?></p>
                <p><?= form_error('dob_day'); ?></p>
                <p><?= form_error('dob_year'); ?></p>
              </span>
            </div>
          </div>
        </div>
        <div class="form-group <?= form_error('point_person_address') ? 'error' : ''; ?>">
          <label for="point_person_address" class="control-label">Address:</label>
          <div class="controls">
            <input class="form-control" type="text" name="point_person_address" value="<?= $this->input->post('point_person_address') ? $this->input->post('point_person_address') : $braintree_merchant->individual['address']['streetAddress']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('point_person_address'); ?>
            </span>
          </div>
        </div>
        <div class="form-group <?= form_error('point_person_city') ? 'error' : ''; ?>">
          <label for="point_person_city" class="control-label">City:</label>
          <div class="controls">
            <input class="form-control" type="text" name="point_person_city" value="<?= $this->input->post('point_person_city') ? $this->input->post('point_person_city') : $braintree_merchant->individual['address']['locality']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('point_person_city'); ?>
            </span>
          </div>
        </div>
        <div class="form-group <?= form_error('point_person_state') ? 'error' : ''; ?>">
          <label for="point_person_state" class="control-label">State:</label>
          <div class="controls">
            <?php $state = $this->input->post('point_person_state') ? $this->input->post('point_person_state') : $braintree_merchant->individual['address']['region']; ?>
            <?= form_dropdown('point_person_state', $states, $state, $merchant_edit_disabled); ?>
            <span class="help-inline">
              <?= form_error('point_person_state'); ?>
            </span>
          </div>
        </div>
        <div class="form-group <?= form_error('point_person_zip') ? 'error' : ''; ?>">
          <label for="point_person_zip" class="control-label">Zip:</label>
          <div class="controls">
            <input class="form-control" type="text" name="point_person_zip" value="<?= $this->input->post('point_person_zip') ? $this->input->post('point_person_zip') : $braintree_merchant->individual['address']['postalCode']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('point_person_zip'); ?>
            </span>
          </div>
        </div>
      </fieldset>
      <fieldset class="nested">
        <legend class="margin-left-neg-30 m-bot-10">Organization</legend>
        <div class="form-group <?= form_error('legal_name') ? 'error' : ''; ?>">
          <label for="legal_name" class="control-label">Legal Name:</label>
          <div class="controls">
            <input class="form-control" type="text" name="legal_name" value="<?= $this->input->post('legal_name') ? $this->input->post('legal_name') : $braintree_merchant->business['legalName']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('legal_name'); ?>
            </span>
          </div>
        </div>
        <div class="form-group <?= form_error('tax_id') ? 'error' : ''; ?>">
          <label for="tax_id" class="control-label">*Federal Tax ID:</label>
          <div class="controls">
            <input class="form-control" type="text" name="tax_id" value="<?= $this->input->post('tax_id') ? $this->input->post('tax_id') : $braintree_merchant->business['taxId']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline">
              <?= form_error('tax_id') ?: '*Federal Tax ID must be 9 digits, e.g. 121234567'; ?>
            </span>
          </div>
        </div>
        <div class="form-group <?= form_error('organization_address') ? 'error' : ''; ?>">
          <label for="organization_address" class="control-label">Address:</label>
          <div class="controls">
            <input class="form-control" type="text" name="organization_address" value="<?= $this->input->post('organization_address') ? $this->input->post('organization_address') : $braintree_merchant->business['address']['streetAddress']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline"> <?= form_error('organization_address'); ?> </span>
          </div>
        </div>
        <div class="form-group <?= form_error('organization_city') ? 'error' : ''; ?>">
          <label for="organization_city" class="control-label">City:</label>
          <div class="controls">
            <input class="form-control" type="text" name="organization_city" value="<?= $this->input->post('organization_city') ? $this->input->post('organization_city') : $braintree_merchant->business['address']['locality']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline"> <?= form_error('organization_city'); ?> </span>
          </div>
        </div>
        <?php $org_state = $this->input->post('organization_state') ? $this->input->post('organization_state') : $braintree_merchant->business['address']['region']; ?>
        <div class="form-group <?= form_error('organization_state') ? 'error' : ''; ?>">
          <label for="organization_state" class="control-label">State:</label>
          <div class="controls">
            <?= form_dropdown('organization_state', $states, $org_state, $merchant_edit_disabled); ?>
            <span class="help-inline"> <?= form_error('organization_state'); ?> </span>
          </div>
        </div>
        <div class="form-group <?= form_error('organization_zip') ? 'error' : ''; ?>">
          <label for="organization_zip" class="control-label">Zip:</label>
          <div class="controls">
            <input class="form-control" type="text" name="organization_zip" value="<?= $this->input->post('organization_zip') ? $this->input->post('organization_zip') : $braintree_merchant->business['address']['postalCode']; ?>" <?= $merchant_edit_disabled ?>>
            <span class="help-inline"> <?= form_error('organization_zip'); ?> </span>
          </div>
        </div>
      </fieldset>
      <fieldset class="nested">
        <legend class="margin-left-neg-30 m-bot-20">Funding Destination</legend>

        <? $account_type = $this->input->post('account_type') ?: $braintree_merchant->account_type; ?>
        <div class="form-group <?= form_error('account_type') ? 'error' : ''; ?>">
          <label for="account_type" class="control-label">What type of account will you be using?</label>
          <div class="controls">
            <select class="form-control" id="account_type_select" name="account_type" required  <?= $merchant_edit_disabled ?>>
              <option value="checking" <?= $account_type != 'savings' ? 'selected' : '' ?>>Checking</option>
              <option value="savings" <?= $account_type == 'savings' ? 'selected' : '' ?>>Savings/Other</option>
            </select>
            <span class="help-inline"> <?= form_error('account_type'); ?> </span>
            <span id="checkingonlyhelp" class="help-inline error"
              <?= $this->input->post('account_type') === 'savings' ? '' : 'style="display:none;"' ?>
              >Only Checking Accounts can be authorized for funding desination.</span>
          </div>
        </div>

        <div id="funding_destination_info" <?= $account_type !== 'savings' ? '' : 'style="display:none"';?>>
          <div id="check_image" class="text-center m-bot-10">
            <img  src="<?= asset_url('images/funding_destination_check.gif');?>" />
          </div>
          <br>
          <div class="form-group <?= form_error('routing_number') ? 'error' : ''; ?>">
            <label for="routing_number" class="control-label">Routing Number:</label>
            <div class="controls">
              <input class="form-control" type="text" name="routing_number" value="<?= $this->input->post('routing_number') ? $this->input->post('routing_number') : $braintree_merchant->funding['routingNumber']; ?>" <?= $merchant_edit_disabled ?>>
              <span class="help-inline"> <?= form_error('routing_number'); ?> </span>
            </div>
          </div>
          <div class="form-group <?= form_error('account_number') ? 'error' : ''; ?>">
            <label for="account_number" class="control-label">Account Number:</label>
            <div class="controls">
              <?php
                  $api_account_number = !empty($braintree_merchant->funding['accountNumberLast4']) ? '****' . $braintree_merchant->funding['accountNumberLast4'] : '';
              ?>
              <input class="form-control" type="text" name="account_number" value="<?= $this->input->post('account_number') ? $this->input->post('account_number') : $api_account_number; ?>" <?= $merchant_edit_disabled ?>>
              <span class="help-inline"> <?= form_error('account_number'); ?> </span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="escrow_funds" class="control-label">Deposit Schedule:</label>
          <div class="controls">
            <?php $escrow = ($this->input->post('escrow_funds') !== null) ? $this->input->post('escrow_funds') : $braintree_merchant->escrow_funds; ?>
            <?= form_dropdown('escrow_funds', [1 => 'Weekly', 0 => 'Daily'], $escrow, $merchant_edit_disabled); ?>
          </div>
        </div>

      <div class="form-group <?= form_error('tos') ? 'error' : ''; ?>">
        <label for="tos" class="control-label">
        Accept <a href="#" data-toggle="modal" data-target="#terms-modal">Terms of Service</a>:
        </label>
        <div class="controls">
          <?php
            $posted_tos = $this->input->post('tos');
            $checked    = !empty($braintree_merchant->tos) || !empty($posted_tos) ? 'checked="checked"' : '';
          ?>
          <input cla ss="form-control" type="checkbox" name="tos" <?= $checked; ?> <?= $merchant_edit_disabled ?>>
          <span class="help-inline"><?= form_error('tos'); ?></span>
        </div>
      </div>
      </fieldset>
      <div class="form-actions">
      <input id="merchant-submit-btn" type="submit"  <?= $fields_disabled ?> class="btn btn-info" value="<?= !empty($braintree_merchant) ? 'Update' : 'Submit' ?>" <?= $merchant_edit_disabled ?>>
      </div>
  </form>
</div>
<?php endif; ?>
<div class="modal fade" id="terms-modal" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p>Booster Enterprises, Inc. Merchant Terms of Service:</p>

        <p>Booster Enterprises, Inc. (“Booster”) uses Braintree, a division of Paypal, Inc. (“Braintree”) for payment processing services. By using Braintree’s payment processing services, you, as a representative of the Client, agree to the Braintree Payment Services Agreement available at www.braintreepayments.com/legal/gateway-agreement and the applicable bank agreement available at <a href="https://www.braintreepayments.com/legal/bank-agreement" target="_blank">www.braintreepayments.com/legal/bank-agreement.</a></p>

        <p>Each Client chooses the person who will serve as the point person for their organization and will complete the compliance process required by Braintree, which may require the point person to provide personally identifiable information to Booster and Braintree. Booster’s privacy policy is available at <a href="https://boosterthon.com/privacy-policy/" target="_blank">https://boosterthon.com/privacy-policy/</a>.</p>

        <p>Booster does not cover all interchange fees and per transaction fees associated with each merchant account. To cover the cost of credit card processing charges, Booster charges a fixed, online processing fee per transaction. Each Client has the choice to cover this fee or pass this fee on to sponsors.</p>

        <p>If a payment has been deposited into the Client account, and a sponsor requests a refund due to a sponsor error (example: the sponsor pays for a pledge twice by sending a check in as well as submitting payment online), Booster will work with the Client directly on the best method to refund the sponsor and adjust your invoice with the removal of the duplicate pledge, if necessary. Booster will set up each Program and is not liable for any Client actions, intentional or otherwise, while using the site that could have an impact on their Program.</p>

        <p>Clients will NOT be entered into a contract term and there are NO early termination or cancellation penalties. Any questions about or requests for cancellation should be sent to <a href="mailto:support@boosterthon.com">support@boosterthon.com</a>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
