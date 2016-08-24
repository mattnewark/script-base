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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.6/css/jquery.dataTables.css">
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
            <li><a href="<?php echo base_url('auth/logout'); ?>">Log out</a></li>
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
            <li role="presentation"><a href="<?php echo base_url(); ?>">Dashboard</a></li>
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                  CMS <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="<?php echo base_url('CMSpage'); ?>">Pages</a></li>
                    <li role="presentation"><a href="<?php echo base_url('CMSarticle'); ?>">Articles</a></li>
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
                    <li role="presentation"><a href="<?php echo base_url('auth'); ?>">Users & Access</a></li>
                </ul>
            </li>
            <?php } ?>
        </ul>
      </div><!--end container-->
      <div class="container">
            <!--Main text code-->
            
<h3><?php echo lang('index_heading');?></h3>
<div class="container">
<?php echo anchor('auth/create_user', lang('index_create_user_link'), 'class="btn btn-primary"')?>
</div>
<br />
<div id="infoMessage"><?php echo $message;?></div>

<table class="table" id="AuthTable">
    <thead>
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
    </thead>
    <tbody>
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
 
	<?php endforeach;?>
    </tbody>
</table>
            <!--End main text code-->
      </div><!--end container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.js"></script>
      <script>
    $(document).ready( function () {
    $('#AuthTable').DataTable();
    } );
    </script>
  </body>
</html>