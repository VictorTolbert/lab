<div class="row">
  <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-2">
    <h2 class="center">Task Lists</h2>
    <div class="row">
    <? if ($this->session->flashdata('message')) { ?>
      <div class='alert alert-success'><?=$this->session->flashdata('message')?></div>
    <? } elseif ($this->session->flashdata('error')) {  ?>
      <div class='alert alert-danger'><?=$this->session->flashdata('error')?></div>
    <? } ?>
    </div>
    <div class="row">
      <button id="create-new-task-list" class="btn btn-success btn-md">Create New Task List</button>
    </div>
    <div id="new-task-list-form" class="row hide">
      <br>
       <h4 class="">Create New Task List</h4>
       <br>
       <form name="add-task-template-form" id="add-task-template-form" action="/admin/user_tasks/lists/store" method="post">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        <div class="form-group">
          <label for="name">List Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Task List Name" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
       </form>
    </div>
    <hr>
    <div class="row">
       <h4>Current Lists</h4>
        <?
        if(count($task_lists)) :
          ?>
          <table class="table table-striped table-hover">
          <tr>
            <th>Task</th>
            <th class="text-right">Actions</th>
          </tr>
          <? foreach($task_lists as $task_list) : ?>
            <tr class="task-list-row">
              <td class="col-md-10 col-sm-9"><?=$task_list->name?></td>
              <td class="col-md-3 col-sm-3 text-right">
                <a href="/admin/user_tasks/lists/<?=$task_list->id?>/edit"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil"></i></button></a>
                <a href="/admin/user_tasks/lists/<?=$task_list->id?>/delete"><button class="btn btn-danger btn-xs remove-list-btn"><i class="glyphicon glyphicon-trash"></i></button></a>
              </td>
            </tr>
          <? endforeach; ?>
        </table>
          <?
        else:
          ?>
        There currently no tasks lists created.
          <?
        endif;
        ?>
    </div>

  </div>

</div>
<br><br>
</div>
