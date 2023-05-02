<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?=base_url()?>dok/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>dok/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>dok/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>dok/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>dok/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?=base_url()?>dok/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>dok/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?=base_url()?>dok/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src=" <?=base_url()?>dok/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                   	
                   </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                   
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
<form action="<?php base_url(" table/edit") ?>" method="post"
							enctype="multipart/form-data">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h5>Edit data</h5>
                        <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        <a href="<?php echo site_url('table') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
       
          

                            <div class="content mt-3">
                                
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Basic Form</strong> Elements
                                                    </div>
                                                    <div class="card-body card-block">
                                                    

                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"></label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <p class="form-control-static">Form update data</p>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Project ID</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('id') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="id" Value="<?php echo $data->project_id ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('id') ?></div>   
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site ID DMT</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('id_dmt') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="id_dmt" Value="<?php echo $data->id_dmt ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('id_dmt') ?></div>   
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">SOW</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('sow') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="sow" Value="<?php echo $data->sow ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('sow') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tenant</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('tenant') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="tenant" Value="<?php echo $data->tenant ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('tenant') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site ID Actual</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('id_actual') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="id_actual" Value="<?php echo $data->id_actual?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('id_actual') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Name Actual</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('name_actual') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="name_actual" Value="<?php echo $data->name_actual ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('name_actual') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="status" Value="<?php echo $data->status ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('status') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site ID Owner</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('id_owner') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="id_owner" Value="<?php echo $data->id_owner?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('id_owner') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Name Owner</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('name_owner') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="name_owner" Value="<?php echo $data->name_owner ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('name_owner') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tower Owner</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('tower_owner') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="tower_owner" Value="<?php echo $data->tower_owner ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('tower_owner') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pabrikan Tower</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('pabrikan_tower') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="pabrikan_tower" Value="<?php echo $data->pabrikan_tower ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('pabrikan_tower') ?></div>
                                                            </div>                                         
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type Tower1</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_tower1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_tower1" Value="<?php echo $data->type_tower1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_tower1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type Tower2</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_tower2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_tower2" Value="<?php echo $data->type_tower2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_tower2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type Tower3</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_tower3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_tower3" Value="<?php echo $data->type_tower3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_tower3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Height Tower</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_tower') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_tower" Value="<?php echo $data->height_tower ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_tower') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Load Tower</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('load_tower') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="load_tower" Value="<?php echo $data->load_tower ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('load_tower') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Longitude</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('longtitude') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="longtitude" Value="<?php echo $data->longtitude ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('longtitude') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Latitude</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('latitude') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="latitude" Value="<?php echo $data->latitude ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('latitude') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Adress</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('adress') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="adress" Value="<?php echo $data->adress ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('pabrikan_tower') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mitra Konsultan</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('konsultan') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="konsultan" Value="<?php echo $data->konsultan ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('konsultan') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mitra Sitac</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('sitac') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="sitac" Value="<?php echo $data->sitac ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('sitac') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mitra IMB</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('imb') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="imb" Value="<?php echo $data->imb ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('imb') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mitra CME</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('cme') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="cme" Value="<?php echo $data->cme ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('cme') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mitra SACME</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('sacme') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="sacme" Value="<?php echo $data->sacme ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('sacme') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mitra Power</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('power') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="power" Value="<?php echo $data->power ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('power') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mitra Panel</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('panel') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="panel" Value="<?php echo $data->panel ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('panel') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mitra Tower</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('tower') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="tower" Value="<?php echo $data->tower ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('tower') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID PLN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('id_pln') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="id_pln" Value="<?php echo $data->id_pln ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('id_pln') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DAYA PLN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('daya_pln') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="daya_pln" Value="<?php echo $data->daya_pln?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('daya_pln') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">RFI</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('rfi') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="rfi" Value="<?php echo $data->rfi ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('rfi') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ON AIR</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('on_air') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="on_air" Value="<?php echo $data->on_air ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('on_air') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">APD (dokumen)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('apd') ? 'is-invalid':'' ?>"
                                                                    type="file" id="text-input" name="apd" Value="<?php echo $data->apd?>" ><small class="form-text text-muted"></small></div>
                                                               <input type="hidden" name="old_image" value="<?php echo $data->apd ?>">
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('apd') ?></div>
                                                            </div>
                                        
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ABD (dokumen)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('abd') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="abd" Value="<?php echo $data->abd?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('abd') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">BAST (Dokumen)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('bast') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="bast" Value="<?php echo $data->bast ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('bast') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">PKS (dokumen)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('pks') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="pks" Value="<?php echo $data->pks ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('pks') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">IMB (dokumen)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('imb_doc') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="imb_doc" Value="<?php echo $data->imb_doc ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('imb_doc') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mount1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mount1" Value="<?php echo $data->type_mount1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mount1') ?></div>_doc
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ANTENNA RF/INSTALLAED (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('antenna_rf1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="antenna_rf1" Value="<?php echo $data->antenna_rf1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('antenna_rf1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI ANTENNA RF (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevasi_antenna1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevasi_antenna1" Value="<?php echo $data->elevasi_antenna1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevasi_antenna1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT ANTENNA RF (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_antenna1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_antenna1" Value="<?php echo $data->height_antenna1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_antenna1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI ANTENNA RF (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_antenna1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_antenna1" Value="<?php echo $data->dimensi_antenna1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('dimensi_antenna1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT ANTENNA RF (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_antenna1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_antenna1" Value="<?php echo $data->weight_antenna1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_antenna1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">AZIMUT ANTENNA (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('azimut_antenna1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="azimut_antenna1" Value="<?php echo $data->azimut_antenna1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('azimut_antenna1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mount2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mount2" Value="<?php echo $data->type_mount2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mount2') ?></div>_doc
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ANTENNA RF/INSTALLAED (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('antenna_rf2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="antenna_rf2" Value="<?php echo $data->antenna_rf2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('antenna_rf2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI ANTENNA RF (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevasi_antenna2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevasi_antenna2" Value="<?php echo $data->elevasi_antenna2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevasi_antenna2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT ANTENNA RF (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_antenna2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_antenna2" Value="<?php echo $data->height_antenna2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_antenna2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI ANTENNA RF (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_antenna2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_antenna2" Value="<?php echo $data->dimensi_antenna2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('dimensi_antenna2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT ANTENNA RF (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_antenna2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_antenna2" Value="<?php echo $data->weight_antenna2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_antenna2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">AZIMUT ANTENNA (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('azimut_antenna2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="azimut_antenna2" Value="<?php echo $data->azimut_antenna2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('azimut_antenna2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mount3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mount3" Value="<?php echo $data->type_mount3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mount3') ?></div>_doc
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ANTENNA RF/INSTALLAED (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('antenna_rf3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="antenna_rf3" Value="<?php echo $data->antenna_rf3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('antenna_rf3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI ANTENNA RF (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevasi_antenna3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevasi_antenna3" Value="<?php echo $data->elevasi_antenna3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevasi_antenna3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT ANTENNA RF (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                <input class="form-control <?php echo form_error('height_antenna3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_antenna3" Value="<?php echo $data->height_antenna3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_antenna3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI ANTENNA RF (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_antenna3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_antenna3" Value="<?php echo $data->dimensi_antenna3?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('dimensi_antenna3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT ANTENNA RF (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_antenna3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_antenna3" Value="<?php echo $data->weight_antenna3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_antenna3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">AZIMUT ANTENNA (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('azimut_antenna3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="azimut_antenna3" Value="<?php echo $data->azimut_antenna3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('azimut_antenna3') ?></div>
                                                            </div>
                                                                           <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mounti1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mounti1" Value="<?php echo $data->type_mounti1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mounti1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">MW/INSTALLAED (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('mw1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="mw1" Value="<?php echo $data->mw1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('mw1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI MW (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevasi_mw1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevasi_mw1" Value="<?php echo $data->elevasi_mw1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevasi_mw1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT MW (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_mw1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_mw1" Value="<?php echo $data->height_mw1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_mw1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI MW (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_mw1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_mw1" Value="<?php echo $data->dimensi_mw1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('dimensi_mw1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT MW (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_mw1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_mw1" Value="<?php echo $data->weight_mw1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_mw1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">AZIMUT MW (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('azimut_mw1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="azimut_mw1" Value="<?php echo $data->azimut_mw1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('azimut_mw1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mounti2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mounti2" Value="<?php echo $data->type_mounti2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mounti2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">MW/INSTALLAED (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('mw2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="mw2" Value="<?php echo $data->mw2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('mw2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI MW (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevasi_mw2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevasi_mw2" Value="<?php echo $data->elevasi_mw2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevasi_mw2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT MW (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_mw2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_mw2" Value="<?php echo $data->height_mw2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_mw2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI MW (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_mw2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_mw2" Value="<?php echo $data->dimensi_mw2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('dimensi_mw2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT MW (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_mw2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_mw2" Value="<?php echo $data->weight_mw2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_mw2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">AZIMUT MW (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('azimut_mw2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="azimut_mw2" Value="<?php echo $data->azimut_mw2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('azimut_mw2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mounti3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mounti3" Value="<?php echo $data->type_mounti3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mounti3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">MW/INSTALLAED (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('mw3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="mw3" Value="<?php echo $data->mw3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('mw3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI MW (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevasi_mw3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevasi_mw3" Value="<?php echo $data->elevasi_mw3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevasi_mw3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT MW (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_mw3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_mw3" Value="<?php echo $data->height_mw3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_mw3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI MW (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_mw3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_mw3" Value="<?php echo $data->azimut_antenna3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('azimut_antenna3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT MW (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_mw3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_mw3" Value="<?php echo $data->weight_mw3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_mw3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">AZIMUT MW (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('azimut_mw3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="azimut_mw3" Value="<?php echo $data->azimut_mw3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('azimut_mw3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mountn1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mountn1" Value="<?php echo $data->type_mountn1?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mountn1') ?></div>
                                                          </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">RRU/INSTALLAED (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('rru1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="rru1" Value="<?php echo $data->rru1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('rru1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI RRU (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevsai_rru1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevsai_rru1" Value="<?php echo $data->elevsai_rru1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevsai_rru1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT RRU (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_rru1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_rru1" Value="<?php echo $data->height_rru1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_rru1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI RRU (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_rru1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_rru1" Value="<?php echo $data->dimensi_rru1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('dimensi_rru1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT RRU (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_rru1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_rru1" Value="<?php echo $data->weight_rru1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_rru1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mountn2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mountn2" Value="<?php echo $data->type_mountn2?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mountn2') ?></div>
                                                          </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">RRU/INSTALLAED (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('rru2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="rru2" Value="<?php echo $data->rru2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('rru2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI RRU (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevsai_rru2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevsai_rru2" Value="<?php echo $data->elevsai_rru2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevsai_rru2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT RRU (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_rru2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_rru2" Value="<?php echo $data->height_rru2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_rru2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI RRU (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_rru2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_rru2" Value="<?php echo $data->dimensi_rru2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('dimensi_rru2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT RRU (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_rru2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_rru2" Value="<?php echo $data->weight_rru2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_rru2') ?></div>
                                                            </div> <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TYPE MOUNTING (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('type_mountn3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="type_mountn3" Value="<?php echo $data->type_mountn3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('type_mountn3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">RRU/INSTALLAED (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('rru3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="rru3" Value="<?php echo $data->rru3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('rru3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ELEVASI RRU (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('elevasi_rru3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="elevasi_rru3" Value="<?php echo $data->elevasi_rru3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('elevasi_rru3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">HEIGHT RRU (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('height_rru3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="height_rru3" Value="<?php echo $data->height_rru3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('height_rru3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">DIMENSI RRU (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('dimensi_rru3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="dimensi_rru3" Value="<?php echo $data->dimensi_rru3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('dimensi_rru3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">WEIGHT RRU (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('weight_rru3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="weight_rru3" Value="<?php echo $data->weight_rru3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('weight_rru3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">CAF 1</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('caf1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="caf1" Value="<?php echo $data->caf1 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('caf1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">CAF 2</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('caf2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="caf2" Value="<?php echo $data->caf2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('caf2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">CAF 3</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('caf3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="caf3" Value="<?php echo $data->caf3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('caf3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">OA RF (1)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('oarf1') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="oarf1" Value="<?php echo $data->oarf1?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('oarf1') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">OA RF (2)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('oarf2') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="oarf2" Value="<?php echo $data->oarf2 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('oarf2') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">OA RF (3)</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('oarf3') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="oarf3" Value="<?php echo $data->oarf3 ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('oarf3') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">PID PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('pid_perk') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="pid_perk" Value="<?php echo $data->pid_perk ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('pid_perk') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">SOW PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('sow_perk') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="sow_perk" Value="<?php echo $data->sow_perk ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('sow_perk') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">TONASE PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('tonase_perk') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="tonase_perk" Value="<?php echo $data->tonase_perk ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('tonase_perk') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">MITRA PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('mitra_perk') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="mitra_perk" Value="<?php echo $data->mitra_perk ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('mitra_perk') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">PABRIKASI PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('pabrikasi_perk') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="pabrikasi_perk" Value="<?php echo $data->pabrikasi_perk ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('pabrikasi_perk') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">APD PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('apd_perkuatan') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="apd_perkuatan" Value="<?php echo $data->apd_perkuatan ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('apd_perkuatan') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">NOD PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('nod_perkuatan') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="nod_perkuatan" Value="<?php echo $data->nod_perkuatan ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('nod_perkuatan') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">RFI PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('rfi_perkutan') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="rfi_perkuatan" Value="<?php echo $data->rfi_perkuatan ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('rfi_perkuatan') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">BAST PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('bast_perkuatan') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="bast_perkuatan" Value="<?php echo $data->bast_perkuatan ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('mitra_perk') ?></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">FOTO PERKUATAN</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input class="form-control <?php echo form_error('foto_perkuatan') ? 'is-invalid':'' ?>"
                                                                    type="text" id="text-input" name="foto_perkuatan" Value="<?php echo $data->foto_perkuatan ?>" ><small class="form-text text-muted"></small></div>
                                                                <div class="invalid-feedback">
									                            <?php echo form_error('foto_perkuatan') ?></div>
                                                            </div>
                                                  
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o" name="btn"></i> Submit
                                                        </button>
                                                       
                                                    </div>
                                                </div>


                            <script src="<?=base_url()?>dok/vendors/jquery/dist/jquery.min.js"></script>
                            <script src="<?=base_url()?>dok/vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="<?=base_url()?>dok/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="<?=base_url()?>dok/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="<?=base_url()?>dok/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="<?=base_url()?>dok/assets/js/main.js"></script>

                            
</body>
</html>
