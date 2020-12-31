<div class="panel panel-<?=($render_job_id) ? 'success' : 'info'; ?>">
  <div class="panel-heading">
    <span>
      <strong>Server: </strong>
    </span>
    <span>
      <?=$id?>
    </span>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="well m-bot-0">
          <dl class="dl-horizontal m-bot-0">
            <dt>Render Job ID</dt>
            <dd><?=($render_job_id) ? $render_job_id : 'null';?></dd>
            <dt>AWS Instance ID</dt>
            <dd><?=$instance_id;?></dd>
            <dt>Online</dt>
            <dd><?=$online;?></dd>
            <dt>Stay/Keep Online</dt>
            <dd><?=$stay_online;?></dd>
            <dt>IP Address</dt>
            <dd><?=$ip;?></dd>
            <dt>Expired Error</dt>
            <dd><?=$expired_error;?></dd>
            <dt>Initialized At</dt>
            <dd><?=$initialized_at;?></dd>
            <dt>Terminated At</dt>
            <dd><?=$terminated_at;?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
