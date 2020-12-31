<h1>Student Star Statuses</h1>
<div class="pull-left m-bot-10">
<a href="/admin/student_star_servers">View Servers</a>
</div>
<div class="pull-right m-bot-10">
  <form class="form-inline">
    <input type="text" class="form-control" id="user_id" placeholder="User ID"/>
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>
<div class="clearfix"></div>
<h4>Status Average Times</h4>
<div id="student_star_status_form" class="form-inline">
  <input type="hidden" id="student_star_api_endpoint" value="<?= $student_star_api_status_endpoint ?>">
  <div class="radio">
    <label>
      <input type="radio" name="status_hour" value="1" checked>
      1 Hour
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="status_hour" value="12">
      12 Hours
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="status_hour" value="24">
      24 Hours
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="status_hour" value="168">
      1 Week
    </label>
  </div>
</div>
<table id="student_star_status_table" class="table table-bordered">
  <thead>
    <tr>
      <th>Submission to Finish</th>
      <th>Submission to Init</th>
      <th>Init to Blend</th>
      <th>Blending Time</th>
      <th>Blending to Encoding</th>
      <th>Encoding Time</th>
      <th>Encoding to Upload</th>
      <th>Uploading Time</th>
      <th>Uploading to Callback</th>
      <th>Callback to Finish</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td id="submit_to_finish"><?= $student_star_status_averages->submit_to_finish ?></td>
      <td id="submit_to_init"><?= $student_star_status_averages->submit_to_init ?></td>
      <td id="init_to_blend"><?= $student_star_status_averages->init_to_blend ?></td>
      <td id="blend_start_finish"><?= $student_star_status_averages->blend_start_finish ?></td>
      <td id="blend_finish_ffmpeg_start"><?= $student_star_status_averages->blend_finish_ffmpeg_start ?></td>
      <td id="ffmpeg_start_finish"><?= $student_star_status_averages->ffmpeg_start_finish ?></td>
      <td id="ffmpeg_finish_upload_start"><?= $student_star_status_averages->ffmpeg_finish_upload_start ?></td>
      <td id="upload_start_finish"><?= $student_star_status_averages->upload_start_finish ?></td>
      <td id="upload_to_callback"><?= $student_star_status_averages->upload_to_callback ?></td>
      <td id="callback_to_finish"><?= $student_star_status_averages->callback_to_finish ?></td>
    </tr>
  </tbody>
</table>
<div class="clearfix"></div>
<?php

foreach ($student_star_videos as $student_star_video) {
  $this->load->view('admin/student_star/video_status', $student_star_video);
}
?>
