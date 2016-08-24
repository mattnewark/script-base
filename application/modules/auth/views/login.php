<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      body { padding-top: 250px; }
  </style>
  </head>
  
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default center">
        <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
        </div>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login",'class="form-horizontal"');?>
<div class="panel-body">
  <div class="form-group">
    <?php echo lang('login_identity_label', 'identity','class="col-sm-4 control-label"');?>
      <div class="col-sm-8">
    <?php echo form_input($identity);?>
      </div>
  </div>

  <div class="form-group">
    <?php echo lang('login_password_label', 'password','class="col-sm-4 control-label"');?>
      <div class="col-sm-8">
    <?php echo form_input($password);?>
      </div>
  </div>

    <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
    <label class="checkbox-inline" for="remember">
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    Remember Me
    </label>
    </div>
    </div>

  <div class="form-group">
  <div class="col-sm-12">  
  <?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-primary"');?>
  </div>
  </div>
</div>
<?php echo form_close();?>
