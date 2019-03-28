<?php include APPPATH.'views/include/header.php'; ?>

<div class="container">
 <div class="row">
  <div class="col-6">
  <?php
  echo form_open('admin/admin/validate_login');
  ?>
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <span class="alert-danger"><?php echo form_error('email')?></span>

    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('password')?></span>
    </div>
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
