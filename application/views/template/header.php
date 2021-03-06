<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!-- meta -->
        <title>West Penn Wire Marketing Survey</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="" />
        <!-- end meta -->

        <!-- styles & fonts -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <?php if(isset($editor)): ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dropzone.css">
        <?php endif; ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/vnd.microsoft.icon" />
        <script src="//use.typekit.net/rgq8ybw.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
    </head>

    <body>

    <div class="head">
        <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 pull-right margintop-5">
                  <a class="pull-right" href="http://www.westpenn-wpw.com" target="_blank"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="West Penn Wire" class="img-responsive" /></a>
              </div>
                <?php if($this->session->userdata("username") && !$this->session->userdata("token")): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pull-right margintop-5">
                            <div class="panel-footer">
                                 <i class="fa fa-user"></i> <strong><?php echo $this->session->userdata("username"); ?></strong> | <i class="glyphicon glyphicon-time"></i> Last Login: <?php echo date('m/d/y h:i a', $this->session->userdata("last_login")); ?>
                            <div class="btn-group">
                                <a href="<?php echo base_url(); ?>home/bin" class="btn btn-sm btn-primary"> <i class="fa fa-cart-arrow-down"></i> My Bin</a>
                                <a href="<?php echo base_url(); ?>auth/logout" class="btn btn-sm btn-danger"> <i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                            </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if($this->session->userdata('token')): ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Admin Panel
                        <?php if(isset($editor)): ?>
                        <span class="glyphicon glyphicon-chevron-right" style="font-size: 1.890rem;"></span> <?php echo $editor; ?>
                        <?php endif; ?>
                    </h3>
                </div>
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th style="vertical-align:middle;">
                                    <span class="glyphicon glyphicon-user"></span> <strong><?php echo $this->session->userdata("username"); ?></strong>
                                </th>
                                <th style="vertical-align:middle;">
                                    <span class="glyphicon glyphicon-time"></span> <strong>Last Login: <?php echo date('m/d/y h:i a', $this->session->userdata("last_login")); ?></strong>
                                </th>
                                <th>
                                    <a class="btn btn-primary btn-block pull-left" href="<?php echo base_url(); ?>admin">Dashboard <span class="glyphicon glyphicon-dashboard"></span></a>
                                </th>
                                <th>
                                    <a class="btn btn-primary btn-block pull-left" href="<?php echo base_url(); ?>admin/logout">Logout <span class="glyphicon glyphicon-log-out"></span></a>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
