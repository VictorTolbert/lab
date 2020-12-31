<div class="row">
  <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-2">
    <h2 class="center">Edit Task List</h2>
    <div class="row">
    <? if ($this->session->flashdata('message')) { ?>
      <div class='alert alert-success'><?=$this->session->flashdata('message')?></div>
    <? } elseif ($this->session->flashdata('error')) {  ?>
      <div class='alert alert-danger'><?=$this->session->flashdata('error')?></div>
    <? } ?>
    </div>
    <div id="edit-task-list-form" class="row">
      <a href="/admin/user_tasks/lists"><button class="btn btn-default btn-xs"><i class="glyphicon glyphicon-arrow-left"></i> Back to Lists</button></a>
      <br><br>
       <br>
       <div class="panel panel-default">
       <div class="panel-heading">
        <h3 class="panel-title"><?=$task_list->name?></h3>
      </div>
        <div class="panel-body">
          <form name="edit-task-list-form" action="/admin/user_tasks/lists/<?=$task_list->id?>/update" method="post" class="form-inline">
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Task List Name" value="<?=$task_list->name?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Name</button>
           </form>
        </div>
      </div>
    </div>
    <div class="row">
       <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Add Task</h3>
          </div>
          <div class="panel-body">
            <form name="add-task-list-tasks-form" action="/admin/user_tasks/lists/<?=$task_list->id?>/tasks/add" method="post">
              <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
              <div class="form-group">
                <select name="task_template_id" class="form-control" required>
                <? if(count($available_templates)) : ?>
                    <option value="">Select One</option>
                  <? foreach ($available_templates as $template) : ?>
                    <option value="<?=$template->id?>"><?=$template->title?></option>
                  <? endforeach; ?>
                <? else: ?>
                    <option value="">There are no available templates to choose from...</option>
                <? endif; ?>
                </select>
              </div>
              <div class="row">
              <div class="form-group col-md-6">
              <label for="event_offset"></label>
                <select name="event_offset" class="form-control" required>
                  <option value="">Event Offest (in business days)</option>
                  <? for($x = -35; $x < 36; $x++) : ?>
                    <option value="<?=$x?>"><?=$x?></option>
                  <? endfor; ?>
                </select>
              </div>
             <div class="form-group col-md-6">
              <label for="rally_offset"></label>
                <select name="event" class="form-control" required>
                  <option value="">Event (select one)</option>
                  <? foreach($this->config->item('events') as $value) :?>
                  <option value="<?=$value?>"><?=$value?></option>
                  <? endforeach; ?>
                </select>
              </div>
              </div>
                <button type="submit" class="btn btn-primary">Add</button>
             </form>
          </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <h4>Current Tasks</h4>
        <?
        if(count($current_templates)) :
          ?>
        <table class="table table-striped table-hover">
        <tr>
          <th>Task</th>
          <th>Event Offset</th>
          <th>Event</th>
          <th class="text-right">Actions</th>
        </tr>
          <?
          foreach($current_templates as $template) :
            ?>
        <tr class="task-list-row">
          <td class="col-md-6 col-sm-9 col-xs-6"><?=$template->title?></td>
          <td class="col-md-2 col-sm-8"><?=$template->event_offset?></td>
          <td class="col-md-2 col-sm-2"><?=$template->event?></td>
          <td class="col-md-2 col-sm-2 text-right">
            <a href="/admin/user_tasks/lists/<?=$task_list->id?>/tasks/<?=$template->id?>/remove"><button class="btn btn-danger btn-xs remove-list-task-btn"><i class="glyphicon glyphicon-trash"></i></button></a>
          </td>
        </tr>
            <?
          endforeach;
          ?>
        </table>
          <?
        else:
          ?>
        There are no task templates currently assocaited with this list.
          <?
        endif;
        ?>
    </div>
  </div>
</div>
<br><br>
