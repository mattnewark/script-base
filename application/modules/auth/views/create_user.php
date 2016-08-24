<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Script Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
      body { padding-top: 100px; }
  </style>
  <body> 
      <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Script Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="auth/logout">Log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      <div class="container">
        <ul class="nav nav-pills pull-right">
            <?php 
            $group = array(1,3);
            if (!$this->ion_auth->in_group($group))
            {}else{?>
            <li role="presentation"><a href="/">Dashboard</a></li>
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                  CMS <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="<?php echo base_url('CMSpages'); ?>">Pages</a></li>
                    <li role="presentation"><a href="<?php echo base_url('CMSarticles'); ?>">Articles</a></li>
                </ul>
            </li>
            <?php } 
            if (!$this->ion_auth->is_admin())
            {}else{?>
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                  Admin <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="/auth">Users & Access</a></li>
                </ul>
            </li>
            <?php } ?>
        </ul>
      </div><!--end container-->
<div class="container">
            <!--Main text code-->

<div id="infoMessage"><?php echo $message;?></div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create User</h3>
        </div>

<?php echo form_open("auth/create_user",'class="form-horizontal"');?>
        <div class="panel-body">

        <div class="form-group">
            <?php echo lang('create_user_fname_label', 'first_name','class="col-sm-4 control-label"');?>
            <div class="col-sm-8">
            <?php echo form_input($first_name);?>
            </div>
        </div>

      <div class="form-group">
            <?php echo lang('create_user_lname_label', 'last_name','class="col-sm-4 control-label"');?>
          <div class="col-sm-8">
            <?php echo form_input($last_name);?>
          </div>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_email_label', 'email','class="col-sm-4 control-label"');?>
          <div class="col-sm-8">
            <?php echo form_input($email);?>
          </div>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_password_label', 'password','class="col-sm-4 control-label"');?>
          <div class="col-sm-8">
            <?php echo form_input($password);?>
          </div>
      </div>

      <div class="form-group">
            <?php echo lang('create_user_password_confirm_label', 'password_confirm','class="col-sm-4 control-label"');?>
          <div class="col-sm-8">
            <?php echo form_input($password_confirm);?>
          </div>
      </div>

            <div class="form-group">
                        <div class="col-sm-12">
      <?php echo form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-primary"');?>
                        </div>
            </div>
        </div>
    </div>

<?php echo form_close();?>
            </div>
      </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
            </html>
