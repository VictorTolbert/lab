<div class="panel panel-<?=$status_types[$status];?>">
  <div class="panel-heading">
    <span>
      <strong>Job: </strong>
    </span>
    <span>
      <?=$id?>
    </span>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-6 col-md-7">
        <div class="well m-bot-0">
          <dl class="dl-horizontal m-bot-0">
            <dt>User ID</dt>
            <dd><?=$user_id;?></dd>
            <dt>Progress</dt>
            <dd><?=$completion_progress;?></dd>
            <dt>Retry Count</dt>
            <dd><?=$retry_count;?></dd>
            <dt>Job Duration</dt>
            <dd><?=$job_duration;?></dd>
            <dt>Processing Duration</dt>
            <dd><?=$processing_duration;?></dd>
            <dt>Video Link</dt>
            <dd><?=$ovp_video_id;?></dd>
            <dt>Instance ID</dt>
            <dd><?=$instance_id;?></dd>
            <dt>Agent ID</dt>
            <dd><?=$agent_id;?></dd>
            <dt>Status</dt>
            <dd><?=$status;?></dd>
            <dt>Blender Instance ID</dt>
            <dd><?= ($agent->instance_id) ? : 'null'; ?></dd>
          </dl>
        </div>
      </div>
      <div class="col-sm-6 col-md-5">
        <div class="panel panel-default m-bot-0">
          <div class="panel-heading">
            <strong>Status Logs</strong>
          </div>
          <div class="panel-body">
            <dl class="dl-horizontal m-bot-0">
              <? foreach ($render_job_status as $title => $value) { ?>
                <dt><?=$title;?></dt>
                <dd><?=($value) ? $value : 'null';?></dd>
              <? } ?>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
