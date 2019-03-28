<?php include APPPATH.'views/include/header.php'; ?>

<div class="container">
 <div class="row">
  <div class="col-6">
  <?php
  echo form_open('public/student_feedback/feedback');
  ?>
  <fieldset>
    <legend>Student Feedback</legend>
    
    
    <div class="form-group">
      <label for="doubt">Enter Doubt Topics</label>
      <input type="text" name="doubt" class="form-control" id="doubt" placeholder="Feedback">
      <span class="alert-danger"><?php echo form_error('doubt')?></span>
    </div>
    <!-- <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" name="subject" class="form-control" id="subject" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('subject')?></span>
    </div>
    <div class="form-group">
      <label for="topic">Topic</label>
      <input type="text" name="topic" class="form-control" id="topic" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('topic')?></span>
    </div> -->
    <input type="submit" value="Submit" class="btn btn-primary">
    <?php  echo '<span style="color:red">'.$this->session->flashdata('error').'</span>'?>
  </fieldset>
  <?php
  echo form_close();
  ?>
</div>
</div>
</div>

<?php include APPPATH.'views/include/footer.php'; ?>
