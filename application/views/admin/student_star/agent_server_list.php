<h1>Student Star Servers</h1>
<div class="pull-left m-bot-10">
<a href="/admin/student_star">back to jobs</a>
</div>
<div class="pull-right m-bot-10">
  <form class="form-inline">
    <input type="text" class="form-control" id="user_id" placeholder="Instance ID"/>
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>
<div class="clearfix"></div>
<?php

foreach ($student_star_agents as $agent) {
  $this->load->view('admin/student_star/server_item', $agent);
}
?>
