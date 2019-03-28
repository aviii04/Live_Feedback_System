<?php include  APPPATH.'views/include/header.php'; ?>

<div class="container">
 <div class="row">
  <div class="col-6">
  <?php
  echo form_open('admin/admin/validate_registeration');
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
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('password')?></span>
    </div>
    <div class="form-group">
      <label for="cnfpassword">Confirm Password</label>
      <input type="password" class="form-control" name="cnfpassword" id="cnfpassword" placeholder="Password">
      <span class="alert-danger"><?php echo form_error('cnfpassword')?></span>

    </div>
    <div class="form-group">
      <label for="firstName">First Name</label>
      <input type="text" class="form-control" name="firstName" id="firstName"  placeholder="Enter first name">
      <span class="alert-danger"><?php echo form_error('firstName')?></span>
    </div>
    <div class="form-group">
      <label for="lastName">Last Name</label>
      <input type="text" class="form-control" name="lastName" id="lastName"  placeholder="Enter last name">
      <span class="alert-danger"><?php echo form_error('lastName')?></span>

    </div>
    <div class="form-group">
      <label for="college">College</label>
      <input type="text" class="form-control" name="college" id="college"  placeholder="college name">
      <span class="alert-danger"><?php echo form_error('college')?></span>

    </div>
    
    <div class="form-group">
      <label for="gender">Select Gender</label>
      <select class="form-control" id="gender" name="gender">
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
      </select>
      <span class="alert-danger"><?php echo form_error('gender')?></span>
</div>
    <input type="submit" value="Submit" class="btn btn-primary">
    <!-- <?php $arr_submit = array('class' => 'btn btn-primary'); echo form_submit('regist_submit','Submit',$arr_submit) ?>
    <?php $arr_submit = array('class' => 'btn btn-primary'); echo form_reset('reset_button','Reset',$arr_submit) ?> -->

  </fieldset>
  <?php
  echo form_close();
  ?>
</div>
</div>
</div>
<?php include APPPATH.'views/include/footer.php'; ?>
