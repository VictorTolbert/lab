<div class="row">
  <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-2">
    <h2 class="center">Task Templates</h2>
    <div class="row">
    <? if ($this->session->flashdata('message')) { ?>
      <div class='alert alert-success'><?=$this->session->flashdata('message')?></div>
    <? } elseif ($this->session->flashdata('error')) {  ?>
      <div class='alert alert-danger'><?=$this->session->flashdata('error')?></div>
    <? } ?>
    </div>
    <div class="row">
      <button id="create-new-task-template" class="btn btn-primary btn-md">Create New Template</button>
    </div>
    <div id="new-task-template-form" class="row hide">
      <br>
       <h4 class="">Create New Template</h4>
       <br>
       <form name="add-task-template-form" id="add-task-template-form" action="/admin/user_tasks/templates/store" method="post">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        <div class="form-group">
          <label for="task_title">Task</label>
          <textarea class="form-control" id="task_title" name="task_title" placeholder="Short Decscription, including links.." required></textarea>
          <script>
            document.addEventListener("DOMContentLoaded", function() {
              CKEDITOR.config.toolbar_Basic = [
                  [ 'Source', '-', 'Bold', 'Italic', 'Link', 'Unlink' ]
              ];

              CKEDITOR.config.plugins += ",link";
              CKEDITOR.config.autoParagraph = false;
              CKEDITOR.replace("task_title", {
                extraPlugins: 'sourcedialog',
                removePlugins: 'sourcearea',
                removeButtons: 'About,Outdent,Indent,BulletedList,NumberedList,Anchor,Superscript,Subscript,Strike,Underline,Undo,Redo,Cut,Copy,Paste'

              });
            });
          </script>
        </div>
        <div class="form-group">
          <label for="task_label">Label</label>
          <select class="form-control" name="task_label" required>
            <option value="" selected>Select One</option>
            <? foreach($this->config->item('labels') as $value) :?>
            <option value="<?= $value['task_label_text'] ?>"><?= $value['task_label_text'] ?></option>
            <? endforeach; ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
    <hr>
    <div class="row">
       <h4>Current Templates</h4>
        <?
        if(count($templates)) :
          ?>
          <table class="table table-striped table-hover">
          <tr>
            <th class="edit-task-title-column">Task</th>
            <th class="edit-task-label-column">Label</th>
            <th class="edit-task-actions-column text-right">Actions</th>
          </tr>
          <? foreach($templates as $template) : ?>
            <tr class="task-template-row" data-template-id="<?=$template->id?>" data-label="<?=$template->label?>">
              <td class="col-md-7 col-sm-6 col-xs-3"><?=$template->title?><div class="hide" id="task-title-<?=$template->id?>"><?=$template->title?></div></td>
              <td class="col-md-2 col-sm-2 col-xs-2"><?=$template->label?></td>
              <td class="col-md-3 col-sm-3 col-xs-3 text-right">
                <button id="edit-task-template-btn-<?=$template->id?>" data-template-id="<?=$template->id?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#edit-task-modal"></i></button>
                <button id="del-task-template-btn-<?=$template->id?>" data-template-id="<?=$template->id?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
              </td>
            </tr>
          <? endforeach; ?>
        </table>
          <?
        else:
          ?>
        There are currently no task templates created.
          <?
        endif;
        ?>
    </div>

  </div>

</div>
<br><br>
</div>
<!-- Edit Template Modal -->
<div id="edit-task-modal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form name="edit-task-template-form" id="edit-task-template-form" action="" method="post">
      <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Edit Template</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="task_title">Task</label>
          <textarea class="form-control" id="edit-task_title" name="task_title" placeholder="Short Decscription, including links.." required></textarea>
        </div>
        <div class="form-group">
          <label for="task_label">Label</label>
          <select class="form-control" id="task_label" name="task_label" required>
            <option value="" selected>Select One</option>
            <? foreach($this->config->item('labels') as $value) :?>
            <option value="<?=$value['task_label_text']?>"><?=$value['task_label_text']?></option>
            <? endforeach; ?>
          </select>
        </div>
        <input type="hidden" name="template_id" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="save-task-changes" class="btn btn-primary">Save Changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
