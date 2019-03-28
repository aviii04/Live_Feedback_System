<?php include APPPATH.'views/include/header.php'; ?>

<div class="container">
 <div class="row">
  <div class="col-6">
  <?php
  echo form_open('admin/teacher_connect/teacher_class');
  ?>
  <div class="container">
  <div class="row">
  <div class="col-3">
  </div>
  <div class="col-6">




  
  </div>
  <div class="col-3">
  </div>
  </div>
  <fieldset>
    <legend>Teacher Dashboard</legend>
    
    
    <div class="form-group">
      <label for="class">Class</label>
      <input type="text" name="class" class="form-control" id="class" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('class')?></span>
    </div>
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" name="subject" class="form-control" id="subject" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('subject')?></span>
    </div>
    <div class="form-group">
      <label for="topic">Topic</label>
      <input type="text" name="topic" class="form-control" id="topic" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('topic')?></span>
    </div>
    <div class="form-group">
      <label for="subtopic">Sub Topic</label>
      <input type="text" name="subtopic" class="form-control" id="subtopic" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('subtopic')?></span>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
    <?php  echo '<span style="color:red">'.$this->session->flashdata('error').'</span>'?>
  </fieldset>
  <?php
  echo form_close();
  ?>
<!-- Summary -->
<?php
  echo form_open('admin/teacher_connect/get_summary');
  ?>
  <br>
  <fieldset>
    <input type="submit" value="Get Summary" class="btn btn-primary">
    <?php  echo '<span style="color:red">'.$this->session->flashdata('error').'</span>'?>
  </fieldset>
  <?php
  echo form_close();
  ?>
</div>
</div>
</div>

<?php include APPPATH.'views/include/footer.php'; ?>
