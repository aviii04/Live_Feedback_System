<?php include APPPATH.'views/include/header.php'?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>



        <div class="col-xs-6">
            <!--  -->
                <h3> Students please provide your Doubt Sub Topics!!!</h3>
                <br><br>
                <div id="field">
                    <div id="field0">
                        <!-- Text input-->
                        <?php
  echo form_open('public/student_feedback/feedback');
  ?>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="action_id">Enter your doubts subtopics:</label>
                            <br>
                            <div class="col-md-5">
                                <input name="action_id" type="text" placeholder="Start typing here..." class="form-control input-md">


                            </div>
                        </div>

                    </div>
                </div>
<br>
                <div class="form-group">
                    <div class="col-md-4 " style="float:right">
                        <button id="add-more" name="add-more" class="btn btn-primary ">Add More</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 " style="float:right">
                        <input type="submit" class="btn btn-primary "value="Submit" onclick="get_data()">
                    </div>
                </div>
                        <!-- Hidden Element -->
                        <input type="text" name="data" id="hidden" hidden>
                        <?php
  echo form_close();
  ?>
                
                <br><br>


        </div>
        
        <div class="col-sm-3">
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/feedback_page.js"> </script>
