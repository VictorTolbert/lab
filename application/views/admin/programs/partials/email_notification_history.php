<? if ($email_notification_history): ?>
<div>
  <h4>Email Communication History</h4>
  <p>*Note: recipient count only updates after send is complete, which happens in background.</p>
  <table class="table">
    <tr>
      <th>Sent On</th>
      <th>Sent By Email</th>
      <th>Type</th>
      <th># of Recipients</th>
    </tr>
    <? foreach ($email_notification_history as $notification): ?>
      <tr>
        <td><?= date('m/d/Y h:i:s A', strtotime($notification->notification_sent)) ?></td>
        <td><?= $notification->email ?></td>
        <td><?= $notification->notification_type ?></td>
        <td><?= $notification->recipients ?></td>
      </tr>
    <? endforeach; ?>
  </table>
</div>
<? endif; ?>
