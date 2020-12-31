<div class="row">
<div class="tab-content">
  <div class="tab-pane active" id="test-merchant">
    <div class="col-md-12">
      <div class="row">
      <?php
      if (!empty($message)) {
        echo "<div class='alert'>{$message}</div>";
      }

      if (empty($merchant)):
        echo "<div class='alert alert-danger'>This School does not have a <a href='/admin/schools/edit/" . $school_id . "#merchant'>Veracity merchant account</a> set.</div>";
      else:
        ?>
      <form id="pledge_payment_form" action="<?php echo $veracity_url ?>" method="post">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        <h3>Billing Information</h3>
        <input type="hidden" name="TERMINALID" value="<?php echo $terminal ?>" />
        <input type="hidden" name="ORDERID" value="<?php echo $order_id ?>" />
        <input type="hidden" name="DATETIME" value="<?php echo $datetime ?>" />
        <!-- <input type="hidden" name="RECEIPTPAGEURL" value="<?php echo $receiptpageurl ?>" /> -->
        <!-- <input type="hidden" name="VALIDATIONURL" value="<?php echo $validationurl ?>" /> -->
        <input type="hidden" name="HASH" value="<?php echo $hash ?>" />
        <input type="hidden" name="CURRENCY" value="USD" />
        <input type="hidden" name="URL" value="<?php echo $return_url ?>" />
        <input type="hidden" name="DESCRIPTION" value="TESTAUTH" />
        <div class="col-md-2">
          <div class="form-group">
            <div class="control-label"><label for="AMOUNT">Amount</label></div>
            <div class="controls">
              <input class="required" type="text" name="AMOUNT" value="0.25">
            </div>
          </div>
          <div class="form-group">
            <div class="control-label"><label for="first_name">First Name</label></div>
            <div class="controls">
              <input class="required" type="text" name="first_name" value="First">
            </div>
          </div>
          <div class="form-group">
            <div class="control-label"><label for="last_name">Last Name</label></div>
            <div class="controls">
              <input class="required" type="text" name="last_name" value="Last">
            </div>
          </div>
          <div class="form-group">
            <div class="control-label"><label for="PHONE">Phone Number</label></div>
            <div class="controls"><input class="required" type="text" name="PHONE" value="1234567890"></div>
          </div>
          <div class="form-group">
            <div class="control-label"><label for="EMAIL">Email</label></div>
            <div class="controls">
              <input class="required" type="text" name="EMAIL" value="test@test.com">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <div class="control-label"><label for="ADDRESS1">Address</label></div>
            <div class="controls">
              <input class="required" type="text" name="ADDRESS1" value="123 Test St.">
            </div>
          </div>
          <div class="form-group">
            <div class="control-label"><label for="city">City</label></div>
            <div class="controls">
              <input class="required" type="text" name="city" value="City">
            </div>
          </div>
          <div class="form-group">
            <div class="control-label"><label for="state">State</label></div>
            <div class="controls">
              <input class="required" type="text" name="state" value="GA">
            </div>
          </div>
          <div class="form-group">
            <div class="control-label"><label for="POSTCODE">Zip</label></div>
            <div class="controls">
              <input type="text" name="POSTCODE" value="30022">
            </div>
          </div>
        </div>
      </div>
      <div class="form-actions">
        <button type="submit" class="fr btn btn-lg btn-success">Test Payment</button>
        <a class="btn btn-lg" href="/admin/schools/edit/<?php echo $school_id ?>#merchant" >
          Return to School Merchant
        </a>
      </div>
      <input type="hidden" name="sponsor_convenience_fee" value="<?php echo $processing ?>"/>
      <input type="hidden" name="pledges" value="12345,12346"/>
    </form>
        <?
      endif;
      ?>
</div>
</div>
</div>
</div>
